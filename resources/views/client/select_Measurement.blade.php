@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  اختيار  المقياس  </div>
   <img src="{{url('/')}}/images/logo.png" style="  width: 100px;
  height: 100px;
">
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
             
<table class="table">
  <thead class="thead-dark">
    <tr>
       
      <th scope="col"> المعرف </th>
      <th scope="col"> المقياس  </th>
      <th scope="col"> ابد</th>
    </tr>
  </thead>
  <tbody>
     @foreach(App\Measurement::
                  where('status','1')->get() as $key => $Measurement)

    <tr>
      <td>{{$key + 1}}</td>
      <td> {{$Measurement->name}} </td>
      <td>

 <a  class="btn btn-success" href="{{url('/')}}/test/{{$Measurement->id}}">
                                     

  {{ trans('panel.Start Test') }}
                                </a>
       </td>
    </tr>
    @endforeach
     
  </tbody>
</table>

 

                       
                   

                   

                    
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection