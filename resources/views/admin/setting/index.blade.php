
@extends('admin/layout/layout')
@section('title','Setting')
@section('header-script')

@endsection

@section('body-section')


<section class="input-validation dashboard-analytics">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{route('setting.store')}}" novalidate enctype= "multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label><b>Header Logo</b></label>
                                                                <div class="controls">
                                                                    <input type="file" name="header_logo" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6">
                                                       @php
                                                        $header_image = $setting->header_logo??null;
                                                       @endphp
                                                        <div class="form-group">
                                                        <img class="profile-user-img img-fluid"  src='{{ asset("documents/setting/$header_image??null") }}' width="50px"
                                                alt="Header Logo">
                                                        </div>
                                                    </div>


                                                <div class="col-md-12">

                                                   <div class="form-group">
                                                        <label><b>Home Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="home_title" value="{{$setting->home_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Home Title">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Home Sub Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="home_sub_title" value="{{$setting->home_sub_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Home Sub Title">

                                                        </div>
                                                    </div>



                                                     <div class="form-group">
                                                        <label><b>About Us Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="about_us_title" value="{{$setting->about_us_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="About Us Title">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>About Us Sub Title</b></label>
                                                        <div class="controls">
                                                            <textarea name="about_us_sub_title"  id="about_us_sub_title"  rows="5" class="form-control editor" >{{$setting->about_us_sub_title??null}}</textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label><b>Spotlight Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="spotlight_title" value="{{$setting->spotlight_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Spotlight Title">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Activity Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="activity_title" value="{{$setting->activity_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Activity Title">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Activity Sub Title</b></label>
                                                        <div class="controls">
                                                            <textarea name="activity_sub_title"  id="activity_sub_title"  rows="5" class="form-control editor" >{{$setting->activity_sub_title??null}}</textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label><b>Vault Title</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="vault_title" value="{{$setting->vault_title??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Vault Title">

                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label><b>Stay In Touch</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="stay_in_touch" value="{{$setting->stay_in_touch??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Stay In Touch">
                                                            <input type="hidden" name="id" value="{{$setting->id??null}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Contact</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="contact" value="{{$setting->contact??null}}" class="form-control" required data-validation-required-message="This field is required" placeholder="Contact">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Contact Description</b></label>
                                                        <div class="controls">
                                                            <textarea name="contact_description"  id="contact_description"  rows="5" class="form-control editor" >{{$setting->contact_description??null}}</textarea>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Email</b></label>
                                                        <div class="controls">
                                                            <input type="email" name="email" value="{{$setting->email??null}}" class="form-control" data-validation-required-message="This field is required" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Phone </b></label>
                                                        <div class="controls">
                                                            <input type="number" name="phone" value="{{$setting->phone??null}}"  class="form-control" data-validation-required-message="This field is required" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Facebook</b></label>
                                                        <div class="controls">
                                                             <input type="url" name="facebook" value="{{$setting->facebook??null}}" class="form-control"  placeholder="Phone">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Instagram</b></label>
                                                        <div class="controls">
                                                             <input type="url" name="instagram" value="{{$setting->instagram??null}}"  class="form-control"  placeholder="Instagram">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Twitter</b></label>
                                                        <div class="controls">
                                                             <input type="url" name="twitter" value="{{$setting->twitter??null}}" class="form-control"  placeholder="Twitter">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection


@section('footer-section')
@endsection

@section('footer-script')

<!-- <script src="{{asset('assets/js/countrystatecity.js?v2')}}"></script> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
<link rel="stylesheet" href="{{asset('app-assets/css/toastr.min.css')}}" />

<script src="{{asset('app-assets/js/waitMe.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>

<script>


var loadFile = function(event) {
   var image = document.getElementById('output');
   image.src = URL.createObjectURL(event.target.files[0]);
   };
</script>

<script type="text/javascript">

 var APP_URL = {!! json_encode(url('/')) !!}







</script>

@endsection
