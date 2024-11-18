@extends('layouts.client')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
{{ trans('panel.Dashboard') }}
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
{{ trans('panel.You are logged in!') }}
<br>
 <img src="{{url('/')}}/images/logo.png">

 <div class="container" style="direction: rtl;">


     <div class="row">
        <h4>    ميدي كير  للطفل  </h4>
                               <div class="col-sm-3" style="text-align: center;">
                                 <a href="https://www.facebook.com/medikidcare?mibextid=LQQJ4d" target="_blank" style="font-size: 100px;">
                                 <i class="fa fa-facebook-f"></i>
                                </a>
                               </div>

                               <div class="col-sm-3" style="text-align: center;">

                                 
                                <a href="https://twitter.com/medikidcare?lang=ar" target="_blank" style="font-size: 100px;"> 
                                    <i class="fa fa-twitter"></i>
                                </a>
                                

                               </div>

                                <div class="col-sm-3" style="text-align: center;">

                                 
                                
                                <a href="https://www.instagram.com/medikidcare/" target="_blank" style="font-size: 100px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                

                               </div>


                                  <div class="col-sm-3" style="text-align: center;">
                                <a href="https://www.tiktok.com/@medikidcare11?_t=8jxQXPbRZis&amp;_r=1" target="_blank" style="font-size: 100px;">
                                   <img src="https://medicare.med.sa/forentend/tiktok.png" style="width: 91px;">
                                </a>

                               </div>
            

 <div class="col-sm-3" style="text-align: center;">

                                 
                                
                                <a href="https://www.snapchat.com/add/medikidscare" target="_blank" style="font-size: 100px;">
                                    <i class="fa fa-snapchat"></i>
                                </a>
                                

                               </div>
                               

                        <div class="col-sm-3" style="text-align: center;">
                                <a href="https://youtube.com/@MediKidsCare?si=AvQxWefe2Ks2lU1m" target="_blank" style="font-size: 100px;">
                                <i class="fa fa-youtube-play" style="font-size:103px"></i>
                                </a>

                               </div>

                               <div class="col-sm-3" style="text-align: center;">
                                <a href="https://maps.app.goo.gl/hqX4Ppi7CYdGYXJXA" target="_blank" style="font-size: 100px;">
                     
                      <img src="https://medicare.med.sa/forentend/map-marker.png" style="width: 190px;">


                                </a>

                               </div>

                            </div>


                            <br>
                            <br>
                            <br>
    
  </div>

  <div class="container" style="direction: rtl;">


     <div class="row">
        <h4> ميدي كير </h4>
                               <div class="col-sm-4" style="text-align: center;">
                                 <a href="https://www.facebook.com/Medicaretherapy" target="_blank" style="font-size: 100px;">
                                 <i class="fa fa-facebook-f"></i>
                                </a>
                               </div>

                               <div class="col-sm-4" style="text-align: center;">

                                 
                                <a href="https://twitter.com/medicare_sa" target="_blank" style="font-size: 100px;"> 
                                    <i class="fa fa-twitter"></i>
                                </a>
                                

                               </div>

                                <div class="col-sm-4" style="text-align: center;">

                                 
                                
                                <a href="https://www.instagram.com/medicare_sa/" target="_blank" style="font-size: 100px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                

                               </div>


                                <div class="col-sm-4" style="text-align: center;">
                                <a href="https://www.tiktok.com/@medicare_ksa" target="_blank" style="font-size: 100px;">
                                   <img src="https://medicare.med.sa/forentend/tiktok.png" style="width: 91px;">
                                </a>

                               </div>


                                <div class="col-sm-4" style="text-align: center;">
                                <a href="https://www.youtube.com/channel/UC47yVv8ATlIO0oXENOSazLg" target="_blank" style="font-size: 100px;">
                                <i class="fa fa-youtube-play" style="font-size:103px"></i>
                                </a>

                               </div>

                                <div class="col-sm-4" style="text-align: center;">
                                <a href="https://maps.app.goo.gl/yV2WJdkXduUC3CLVA" target="_blank" style="font-size: 100px;">
                     
                      <img src="https://medicare.med.sa/forentend/map-marker.png" style="width: 190px;">


                                </a>

                               </div>

                                 <div class="col-sm-4" style="text-align: center;">

                                 
                                
                                <a href="https://www.snapchat.com/add/medicaresa" target="_blank" style="font-size: 100px;">
                                    <i class="fa fa-snapchat"></i>
                                </a>
                                

                               </div>





                            </div>


                            <br>
                            <br>
                            <br>
    
  </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection