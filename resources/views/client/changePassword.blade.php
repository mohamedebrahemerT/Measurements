@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
            {{ trans('panel.Change password') }}

            </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('client.password.update') }}">
                        @csrf

    <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">   العمر  </label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" required autocomplete="new-age" value="{{ Auth::user()->age}}" >

                                @if($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

  <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">    تاريخ  الميلاد   </label>

                            <div class="col-md-6">
                                <input id="dateOfbrith" type="date" class="form-control{{ $errors->has('dateOfbrith') ? ' is-invalid' : '' }}" name="dateOfbrith"  value="{{ Auth::user()->dateOfbrith}}" required autocomplete="new-dateOfbrith">

                                @if($errors->has('dateOfbrith'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfbrith') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  <div class="form-group row">
                            <label for="relation" class="col-md-4 col-form-label text-md-right">     العلاقة  </label>

                            <div class="col-md-6">
                  <input id="relation" type="text" class="form-control{{ $errors->has('relation') ? ' is-invalid' : '' }}" name="relation"  
                   value="{{ Auth::user()->relation}}"  autocomplete="new-relation">

                                @if($errors->has('relation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('relation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                
                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   حفظ 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection