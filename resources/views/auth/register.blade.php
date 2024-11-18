@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card mx-4">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                      @php
  $email= 'user-' . date("Ymd") . '-'. date("his").'@gmail.com';
  $password=123456;
   @endphp
                           
                 <input   type="hidden"   name="email"    
                  value="{{  $email}}" >

                    <input   type="hidden"   name="password"    
                  value="{{  $password}}" >

                         

                    <h1>{{ trans('panel.site_title') }}</h1>
                    <p class="text-muted">{{ trans('global.register') }}</p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.phone') }}" value="{{ old('phone', null) }}">
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>

                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="age" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.age') }}" value="{{ old('age', null) }}">
                        @if($errors->has('age'))
                            <div class="invalid-feedback">
                                {{ $errors->first('age') }}
                            </div>
                        @endif
                    </div>

                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="date" name="dateOfbrith" class="form-control{{ $errors->has('dateOfbrith') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.dateOfbrith') }}" value="{{ old('dateOfbrith', null) }}">
                        @if($errors->has('dateOfbrith'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dateOfbrith') }}
                            </div>
                        @endif
                    </div>


                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="relation" class="form-control{{ $errors->has('relation') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.relation') }}" value="{{ old('relation', null) }}">
                        @if($errors->has('relation'))
                            <div class="invalid-feedback">
                                {{ $errors->first('relation') }}
                            </div>
                        @endif
                    </div>

                   

                   

                    <button class="btn btn-block btn-primary">
                        {{ trans('global.register') }}
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection