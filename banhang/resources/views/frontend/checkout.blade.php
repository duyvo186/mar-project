@extends('frontend.master')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Checkout</h2>
            @if (session('msg'))
                <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
                @endif
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <form action="{{route('checkout.submit')}}" method="post" class="billing-form">
    	<div class="container">
    		<div class="row justify-content-center">

          <div  class="col-xl-10 ftco-animate">

                            <h3 class="mb-4 billing-heading">Billing Details</h3>


{{-- @foreach ($cart as $id=>$item) --}}


	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group"method="post">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" id="ten"name="ten" value="" class="form-control" placeholder="" required>
	                </div>
	              </div>
	              {{-- <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div> --}}
                <div class="w-100"></div>
		            {{-- <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
		            </div> --}}
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="diachi" id="diachi" value="" class="form-control" placeholder="House number and street name" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            {{-- <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div> --}}
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="sdt" id="sdt" value=""  class="form-control" placeholder="" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" id="email"  value="" class="form-control" placeholder="" required>
	                </div>
                </div>
                <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Note</label>
                        <textarea class="form-control" name="ghichu" id="" rows="3"></textarea>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
                            <div class="custom-control custom-checkbox" >
                                                <input onchange="if(this.checked){$('#nhanhang').removeClass('d-none')}else{$('#nhanhang').addClass('d-none')}"  type="checkbox" class="custom-control-input" id="khac">
										  <label  action="hide" class="custom-control-label" for="khac" >
                                            Receiving Information</label>
                                          </div>

                                    </div>
                                    <div class="d-none" id="nhanhang" class="row align-items-end">
                                        <div class="col-md-6">
                                      <div class="form-group"method="post">
                                          <label for="firstname">Firt Name</label>
                                        <input type="text" id="tennhan"name="tennhan" value="" class="form-control" placeholder="" >
                                      </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                  </div> --}}
                                  <div class="w-100"></div>
                                      {{-- <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="country">State / Country</label>
                                              <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">France</option>
                                              <option value="">Italy</option>
                                              <option value="">Philippines</option>
                                              <option value="">South Korea</option>
                                              <option value="">Hongkong</option>
                                              <option value="">Japan</option>
                                            </select>
                                          </div>
                                          </div>
                                      </div> --}}
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="streetaddress">Street Address</label>
                                        <input type="text" name="diachinhan" id="diachinhan" value="" class="form-control" placeholder="House number and street name" >
                                      </div>
                                      </div>
                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                                      </div>
                                      </div> --}}

                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="towncity">Town / City</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div> --}}
                                      {{-- <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="postcodezip">Postcode / ZIP *</label>
                                        <input type="text" class="form-control" placeholder="">
                                      </div>
                                      </div> --}}
                                      <div class="w-100"></div>
                                      <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phone">Phone</label>
                                        <input type="text" name="sdtnhan" id="sdtnhan" value=""  class="form-control" placeholder="" >
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailaddress">Email Address</label>
                                        <input type="text" name="emailnhan" id="emailnhan"  value="" class="form-control" placeholder="" >
                                      </div>
                </div>
	            </div>
              <!-- END -->
              @php
              $tong = 0;
              @endphp
               @foreach ($cart as $item)

               @endforeach
              {{-- @php  $cart['id'->$item]; @endphp --}}
              @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp

	        <div class="row mt-5 pt-3 d-flex">

	          	<div class="col-md-6 d-flex">

	          		<div class="cart-detail cart-total p-3 p-md-4">

	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">



		    						<span>Subtotal</span>
		    						<span>{{number_format($tt)}}</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>$3.00</span>
		    					</p>

                        {{-- @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp --}}
		    					<p id="tongtien" name="tongtien"class="d-flex total-price" aria-required>
		    						<span>Total</span>
		    						<span>{{ number_format($tong)}}</span>
                                </p>

                                </div>

                  </div>

	          	<div class="col-md-6">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
                                    </div>
                                    @csrf
                                    <p> <button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
                                </form>
								</div>
	          	</div>
              </div>

          </div> <!-- .col-md-8 -->
        </div>
        </div>

    </section>
    @endsection
