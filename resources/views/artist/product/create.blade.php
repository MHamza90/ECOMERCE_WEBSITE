
@extends('artist/layout/layout')
@section('title','Add Product')
@section('header-script')

@endsection

@section('body-section')


<section class="input-validation dashboard-analytics">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{route('product.store')}}" novalidate enctype= "multipart/form-data" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><b>Product Name</b></label>
                                                        <div class="controls">
                                                            <input type="text" name="product_name" class="form-control" data-validation-required-message="This field is required" placeholder="Product Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>Quantity</b></label>
                                                        <div class="controls">
                                                            <input type="number" name="quantity" class="form-control" required data-validation-required-message="This field is required" placeholder="Quantity">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label><b>Price</b></label>
                                                        <div class="controls">
                                                            <input type="number" name="price" class="form-control" data-validation-required-message="This field is required" placeholder="Price">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Description</b></label>
                                                        <div class="controls">
                                                            <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><b>Image</b></label>
                                                        <div class="controls">
                                                            <input type="file" name="product_image" class="form-control" data-validation-required-message="This field is required" >
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
