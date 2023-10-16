<?php

namespace App\Http\Controllers\Admin;

use App\Measurement;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMeasurementRequest;
use App\Http\Requests\StoreMeasurementRequest;
use App\Http\Requests\UpdateMeasurementRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MeasurementController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('Measurement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Measurements = Measurement::all();

        return view('admin.Measurement.index', compact('Measurements'));
    }

    public function create()
    {
        abort_if(Gate::denies('Measurement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.Measurement.create');
    }

    public function store(StoreMeasurementRequest $request)
    {
        $Measurement = Measurement::create($request->all());

        return redirect()->route('admin.Measurement.index');
    }

    public function edit(Measurement $Measurement)
    {
        abort_if(Gate::denies('Measurement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.Measurement.edit', compact('Measurement'));
    }

    public function update(UpdateMeasurementRequest $request, Measurement $Measurement)
    {
        $Measurement->update($request->all());

        return redirect()->route('admin.Measurement.index');
    }

    public function show(Measurement $Measurement)
    {
        abort_if(Gate::denies('Measurement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.Measurement.show', compact('Measurement'));
    }

    public function destroy(Measurement $Measurement)
    {
        abort_if(Gate::denies('Measurement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Measurement->delete();

        return back();
    }

    public function massDestroy(MassDestroyMeasurementRequest $request)
    {
        Measurement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
