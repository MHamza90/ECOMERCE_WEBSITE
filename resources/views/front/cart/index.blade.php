@extends('front.layout.master')
@section('title')
Activity
@endsection
@section('extra_style')
@endsection
@section('content')
<div class="block-search-form">
    <div class="block-content">
        <div class="container">
            <!--end of row-->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form method="get">
                        <div class="card bg-red">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="icon-search"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-border0"
                                        placeholder="Type a keywords..." type="search" />
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary uppercase border-3">
                                        Search now
                                    </button>
                                </div>
                                <!--end of col-->
                            </div>
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
    </div>
</div>


<!--Hero section-->
<section class="hero">
    <!--Main slider-->
    <div class="main-slider slider flexslider">
        <ul class="slides">

            <li>
                <div class="background-img overlay zoom">
                    <img src="{{ asset('front/assets/yap-new/img/2.jpg') }}" alt="" />
                </div>
                <!--Container-->
                <div class="container hero-content">
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <!--Inner hero-->
                            <div class="inner-hero">
                                <h1 class="large text-white uppercase mb-0">CART
                                </h1>
                              


                                <form action="https://www.yourartistportal.com/result.php" mathod="post" class="mt-3">

                                    <input type="text" name="search" value="" id="search" class="form-control"
                                        placeholder="Artist/Song Search">
                                    <!--<input type="submit" name="send" value="search" class="btn btn-primary uppercase with-ico border-2 mt-3">-->

                                    <div id="display"></div>
                                </form>

                                <!-- <a class="video-play-but popup-youtube"
                                            href="https://www.youtube.com/watch?v=Gc2en3nHxA4">
                                        </a> -->
                            </div>
                        </div>
                        <!--End row-->
                    </div>
                    <!--End container-->
                </div>
                <!--End inner hero-->
            </li>
        </ul>
    </div>
    <!--End main slider-->

    <!--Header-->
    @include('front.includes.header')
    <!--End header-->
</section>
<!--End hero section-->



<!--News section-->
<section id="news" class="news main bg-secondary">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">Cart</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
    <!--Container-->
    <div class="container">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- <h4 class="switch-fot">Tuesday<br />8 Aug</h4> -->
                    <div class="">

                        <table class="table" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell">Single price</th>
                              <th class="hidden text-right md:table-cell">Total price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($cartItems as $item)
                              @php 
                              $image = $item->attributes['image']??null;
                              @endphp
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src='{{ asset("documents/product/$image") }}' class="w-20 rounded" alt="Thumbnail" width="60px;">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id }}" >
                                    <input type="number"  minlength="1" name="quantity" class="form-control quantity" data-id = "{{ $item->id }}" data-price="{{$item->price}}"  value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <!-- <button type="submit" class="btn btn-primary text-white bg-blue-500">update</button> -->
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $item->price }}
                                </span>
                              </td>

                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base" >
                                    $<span id="total_price{{$item->id}}">{{ $item->price * $item->quantity}}</span>
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button onclick="return confirm('Are you sure?')"  class="btn btn-danger  text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @empty
                            <tr colspan="4">
                                <td colspan="6" align="center"><h3>You'r Cart is empty</h3></td>
                            </tr>
                            @endforelse
                             
                          </tbody>
                        </table>
                        <div>
                        Total: ${{ Cart::getTotal() }}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')"  class="btn btn-danger">Remove All Cart</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="float:right">
                                  
                                    <a href="{{route('checkout')}}" class="btn btn-success">Checkout</a>
                                    
                                </div>
                            </div>
                            
                        </div>
               
                
               
            </div>
        </div>
        <hr />
       
    </div>
    <!--End container-->
</section>
<!--End news section-->

@endsection
@section('extra_script')
<script>
     $(document).on('change','.quantity',function(){
        var id = $(this).attr("data-id");
        var price = $(this).attr('data-price');
        var quantity = $(this).val();
        var total  = price* quantity
        
       if(quantity < 1)
        {
            toastr.success("Quantity should be grater then 0");
            $(this).val(1);
            total = price
            $("#total_price"+id).text(total);
             
            quantity = 1;
            
        }

        $.ajax({
         type: 'POST',
         url : "{{route('cart.update')}}",
         data:{ _token: "{{ csrf_token() }}",id: id,quantity:quantity},
         success : function (data) {
          if(data)
          {
            toastr.success("Success");
            $("#total_price"+id).text(total);
            
          }
         }
     })

         
})
</script>
@endsection
