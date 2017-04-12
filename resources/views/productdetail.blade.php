@extends('layouts.pagelayout')

@section('content')


    <section class="header_text sub">
        @if(!$cats->find($product->category_id)->image)
        <img class="pageBanner" src="{{asset('themes/images/pageBanner.png')}}" alt="New products" >
        @endif
        <h4><span>Product Detail</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                        <a href="{{asset('themes/images/product/'.$product->image)}}" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{asset('themes/images/product/'.$product->image)}}"></a>
                        <ul class="thumbnails small">
                            <li class="span1">
                                <a href="{{asset('themes/images/product/'.$product->image)}}" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="{{asset('themes/images/product/'.$product->image)}}" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="{{asset('themes/images/product/'.$product->image)}}" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="{{asset('themes/images/product/'.$product->image)}}" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="{{asset('themes/images/product/'.$product->image)}}" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="{{asset('themes/images/product/'.$product->image)}}" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="{{asset('themes/images/product/'.$product->image)}}" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="{{asset('themes/images/product/'.$product->image)}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>Brand:</strong> <span>Apple</span><br>
                            <strong>Product Code:</strong> <span>{{$product->sku}}</span><br>
                            <strong>Reward Points:</strong> <span>0</span><br>
                            <strong>Availability:</strong> <span>
                                @if($product->stok>0)
                                In Stock

                                    @else
                                    Out of Stock
                                    @endif
                            </span><br>
                        </address>
                        <h4><strong>Price: ${{$product->price}}</strong></h4>
                    </div>
                    <div class="span5">
                        <form class="form-inline">
                            <label class="checkbox">
                                <input type="checkbox" value=""> Option one is this and that
                            </label>
                            <br/>
                            <label class="checkbox">
                                <input type="checkbox" value=""> Be sure to include why it's great
                            </label>
                            <p>&nbsp;</p>
                            <label>Qty:</label>
                            <input type="text" class="span1" placeholder="1">
                            <a class="btn btn-inverse" href="{{route('cart.edit',$product->id)}}">Add to cart</a>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Description</a></li>
                            <li class=""><a href="#profile">Additional Information</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">

                                {{$product->desc}}
                            </div>
                                <div class="tab-pane" id="profile">
                                <table class="table table-striped shop_attributes">
                                    <tbody>
                                    <tr class="">
                                        <th>Size</th>
                                        <td>Large, Medium, Small, X-Large</td>
                                    </tr>
                                    <tr class="alt">
                                        <th>Colour</th>
                                        <td>Orange, Yellow</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
                        <br>
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">


                                        @forelse($products as $product1)

                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{route('detail',$product1->id)}}"><img alt="" src="{{asset('themes/images/product/'.$product1->image)}}"></a><br/>
                                                    <a href="{{route('detail',$product1->id)}}" class="title">{{$product1->name}}</a><br/>
                                                    <a href="#" class="category">{{$cats->find($product1->category_id)->name}}</a>
                                                    <p class="price">${{$product1->price}}</p>
                                                </div>
                                            </li>

                                        @empty
                                            No Product
                                        @endforelse

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
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
                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
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
                <div class="block">
                    <h4 class="title"><strong>Best</strong> Seller</h4>
                    <ul class="small-product">
                        <li>
                            <a href="#" title="Praesent tempor sem sodales">
                                <img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
                            </a>
                            <a href="#">Praesent tempor sem</a>
                        </li>
                        <li>
                            <a href="#" title="Luctus quam ultrices rutrum">
                                <img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
                            </a>
                            <a href="#">Luctus quam ultrices rutrum</a>
                        </li>
                        <li>
                            <a href="#" title="Fusce id molestie massa">
                                <img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
                            </a>
                            <a href="#">Fusce id molestie massa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection