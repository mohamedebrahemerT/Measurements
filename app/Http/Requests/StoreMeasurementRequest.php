<?php

namespace App\Http\Requests;

use App\Measurement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreMeasurementRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('Measurement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
