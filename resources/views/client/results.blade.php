@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  {{ trans('panel.Results of your test') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>

                                    <a href="{{ route('client.test') }}" class="btn btn-primary"> {{ trans('panel.Start test again') }}</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <p>{{ trans('panel.Total points') }}: {{ $result->total_points }} {{ trans('panel.points') }}</p>

                    <a href="{{ route('client.results.send', $result->id) }}" class="btn btn-primary">{{ trans('panel.GET DETAILS IN PDF BY EMAIL') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection