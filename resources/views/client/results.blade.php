@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="printttt">
            <div class="card"  style="text-align: center;border: 5px solid rgba(0,0,0,.125);">
                <div class="card-header">  {{ trans('panel.Results of your test') }} :{{ $result->Measure->name }}</div>

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
   <img src="{{url('/')}}/images/logo.png" style="  width: 200px;
  height: 200px;
">
<br>
{{ $result->Measure->name }}
<br>

        الاسم  :{{ Auth::user()->name }} <br>
        العمر :{{ Auth::user()->age }} <br>
         تاريخ الميلاد  :{{ Auth::user()->dateOfbrith }} <br>
         تاريخ  التقييم  :{{  $result->created_at  }} <br>
         علاقة المقدر   :{{ Auth::user()->relation }} <br>
         اسم  الفاحص ووظيفتة  :............................ <br>
         التوقيع :................. <br>

..................................................................
@php
$Total=0;
@endphp
  @foreach(App\Category::where('Measurement_id',$result->Measurement_id)->get() as $Category)
      @php
      $Questionid=[];
       foreach(App\Question::where('category_id',$Category->id)->get() as $Question)
       {
         array_push($Questionid, $Question->id);
       }

$Total=$Total + App\Option::whereIn('question_id',$Questionid)->sum('points');
      @endphp

  
 
              @endforeach
 
      <p> اجمالي  نقاط  الاختبار : {{ $Total }} درجة</p>


      <p>ملخص  الدرجات : {{ $result->total_points }}درجة</p>

      @foreach(App\Category::where('Measurement_id',$result->Measurement_id)->get() as $Category)
      @php
      $Questionid=[];
       foreach(App\Question::where('category_id',$Category->id)->get() as $Question)
       {
         array_push($Questionid, $Question->id);
       }

$Categoryresult=App\question_result::where('result_id',$result->id)->whereIn('question_id',$Questionid)->sum('points');

 $totfromcat=App\Option::whereIn('question_id',$Questionid)->sum('points');
      @endphp

    <p>  الفئة  : {{$Category->name}} :  {{$Categoryresult}} درجة   /من   {{$totfromcat}} درجة</p>


              @endforeach
............................................................................................

 @foreach(App\question_result::
 where('points','>','0')->
 where('result_id',$result->id)
 ->get() as $Question)
      
       @php
      $Question= App\Question::where('id',$Question->question_id)->first();
       @endphp

      <p>  {{$Question->question_text}}  ?</p>
      <p>  {{$Question->question_treatment}} </p>
              
              @endforeach

............................................................................................
             

                </div>


   <a class="btn btn-primary" onclick="printDiv2('printttt')"> 
   طباعه 
                                        <i class="fa fa-print"></i>
                                    </a >  
                   
            </div>

          
        
        </div>

      

    </div>
</div>
@endsection