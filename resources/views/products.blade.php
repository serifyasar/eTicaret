@extends('layouts.pagelayout')

@section('content')



    <section class="header_text sub">
        @if(!$cats->find($cid)->image)
            <img class="pageBanner" src="{{asset('themes/images/pageBanner.png')}}" alt="New products" >
             @else
            <img class="pageBanner" src="{{asset('themes/images/'.$cats->find($cid)->image)}}" alt="New products" >

        @endif
    <h4><span>New products</span></h4>
</section>
<section class="main-content">

    <div class="row">
        <div class="span9">
            <ul class="thumbnails listing-products">
    @forelse($products as $product)

                <li class="span3">
                    <div class="product-box">
                        <span class="sale_tag"></span>
                        <a href="{{route('detail',$product->id)}}"><img alt="" src="{{asset('themes/images/product/'.$product->image)}}"></a><br/>
                        <a href="{{route('detail',$product->id)}}" class="title">{{$product->name}}</a><br/>
                        <a href="#" class="category">{{$cats->find($product->category_id)->name}}</a>
                        <p class="price">${{$product->price}}</p>
                    </div>
                </li>

        @empty
                No Product
                @endforelse
            </ul>
            <hr>
            <div class="pagination pagination-small pagination-centered">
                <ul>
                 {{$products->links()}}
                </ul>
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
                                        <img alt="" src="themes/images/ladies/1.jpg"><br/>
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
                                        <img alt="" src="themes/images/ladies/2.jpg"><br/>
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
                            <img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
                        </a>
                        <a href="#">Praesent tempor sem</a>
                    </li>
                    <li>
                        <a href="#" title="Luctus quam ultrices rutrum">
                            <img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
                        </a>
                        <a href="#">Luctus quam ultrices rutrum</a>
                    </li>
                    <li>
                        <a href="#" title="Fusce id molestie massa">
                            <img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
                        </a>
                        <a href="#">Fusce id molestie massa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


    @endsection