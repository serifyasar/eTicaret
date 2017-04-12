 @extends('layouts.pagelayout')
 @section('content')


     <h4><span>Shopping Cart</span></h4>
     </section>
     <section class="main-content">
         <div class="row">
             <div class="span9">
                 <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                 <table class="table table-striped">
                     <thead>
                     <tr>
                         <th>Remove</th>

                         <th>Product Name</th>       <th></th>
                         <th>Quantity</th> <th></th>
                         <th>Unit Price</th>
                         <th>Total</th>
                     </tr>
                     </thead>
                     <tbody>

@forelse($cartItems as $cartItem)


                     <tr>
                         <td>
                             {!! Form::open(['route' => ['cart.destroy',$cartItem->rowId], 'method'=>'delete']) !!}
                             <button class="btn" type="submit">Remove</button>
                             {!! Form::close() !!}
                         </td>
                         <td>{{$cartItem->name}}</td>
                         <td></td>
                         {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method'=>'put']) !!}
                         <td><input name="qty"  type="text" placeholder="1" value="{{$cartItem->qty}}" class="input-mini">
                         </td><td>
                             <button class="btn" type="submit">Update</button>
                         </td>

                         <td>{{$cartItem->price}}</td>
                         <td>{{$cartItem->price*$cartItem->qty}}</td>
                     </tr>
    {!! Form::close() !!}
    @empty
                     @endforelse
                     <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td> <td>&nbsp;</td>
                         <td><strong>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</strong></td>
                     </tr>
                     </tbody>
                 </table>
                 <h4>What would you like to do next?</h4>
                 <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                 <label class="radio">
                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                     Use Coupon Code
                 </label>
                 <label class="radio">
                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                     Estimate Shipping &amp; Taxes
                 </label>
                 <hr>
                 <p class="cart-total right">
                     <strong>Sub-Total</strong>: ${{	\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}<br>
                     <strong>Eco Tax </strong>: ${{\Gloudemans\Shoppingcart\Facades\Cart::tax()}}<br>

                     <strong>Total</strong>: ${{\Gloudemans\Shoppingcart\Facades\Cart::total()}}<br>
                 </p>
                 <hr/>
                 <p class="buttons center">
                     <button class="btn" type="button">Update</button>
                     <button class="btn" type="button">Continue</button>
                     <a href="/checkout" class="btn btn-inverse" type="submit" id="checkout">Checkout</a>
                 </p>
             </div>
             <div class="span3 col">
                 <div class="block">
                     <ul class="nav nav-list">
                         <li class="nav-header">SUB CATEGORIES</li>
                         <li><a href="products.html">Nullam semper elementum</a></li>
                         <li class="active"><a href="products.html">Phasellus ultricies</a></li>
                         <li><a href="products.html">Donec laoreet dui</a></li>
                         <li><a href="products.html">Nullam semper elementum</a></li>
                         <li><a href="products.html">Phasellus ultricies</a></li>
                         <li><a href="products.html">Donec laoreet dui</a></li>
                     </ul>
                     <br/>
                     <ul class="nav nav-list below">
                         <li class="nav-header">MANUFACTURES</li>
                         <li><a href="products.html">Adidas</a></li>
                         <li><a href="products.html">Nike</a></li>
                         <li><a href="products.html">Dunlop</a></li>
                         <li><a href="products.html">Yamaha</a></li>
                     </ul>
                 </div>
                 <div class="block">
                     <h4 class="title">
                         <span class="pull-left"><span class="text">Randomize</span></span>
                         <span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                     </h4>
                     <div id="myCarousel" class="carousel slide">
                         <div class="carousel-inner">
                             <div class="active item">
                                 <ul class="thumbnails listing-products">
                                     <li class="span3">
                                         <div class="product-box">
                                             <span class="sale_tag"></span>
                                             <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                                             <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                             <a href="#" class="category">Suspendisse aliquet</a>
                                             <p class="price">$261</p>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="item">
                                 <ul class="thumbnails listing-products">
                                     <li class="span3">
                                         <div class="product-box">
                                             <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                                             <a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
                                             <a href="#" class="category">Urna nec lectus mollis</a>
                                             <p class="price">$134</p>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 @endsection
