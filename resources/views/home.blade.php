@extends('layouts.main')

@section('content')


    <section class="header_text">
        We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates.
        <br/>Don't miss to use our cheap abd best bootstrap templates.
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">
                                        @forelse($features as $feature)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="/productdetail/{{$feature->id}}"><img src="themes/images/product/{{$feature->image}}" alt="" /></a></p>
                                                    <a href="/productdetail/{{$feature->id}}" class="title">{{$feature->name}}</a><br/>
                                                    <a href="products.html" class="category">{{$cats->find($feature->category_id)->name}}</a>
                                                    <p class="price">${{$feature->price}}</p>
                                                </div>
                                            </li>

                                        @empty
@endforelse

                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">

                                        @forelse($latests as $latest)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="product_detail.html"><img src="themes/images/product/{{$latest->image}}" alt="" /></a></p>
                                                    <a href="product_detail.html" class="title">{{$latest->name}}</a><br/>
                                                    <a href="products.html" class="category">{{$cats->find($latest->category_id)->name}}</a>
                                                    <p class="price">${{$latest->price}}</p>
                                                </div>
                                            </li>

                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-2" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">

                                      @forelse($latests as $latest)
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <p><a href="product_detail.html"><img src="themes/images/product/{{$latest->image}}" alt="" /></a></p>
                                                <a href="product_detail.html" class="title">{{$latest->name}}</a><br/>
                                                <a href="products.html" class="category">{{$cats->find($latest->category_id)->name}}</a>
                                                <p class="price">${{$latest->price}}</p>
                                            </div>
                                        </li>

                                          @empty

                                        @endforelse
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        @forelse($features as $feature)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="product_detail.html"><img src="themes/images/product/{{$feature->image}}" alt="" /></a></p>
                                                    <a href="product_detail.html" class="title">{{$feature->name}}</a><br/>
                                                    <a href="products.html" class="category">{{$cats->find($feature->category_id)->name}}</a>
                                                    <p class="price">${{$feature->price}}</p>
                                                </div>
                                            </li>

                                        @empty
                                        @endforelse

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@php(
$act=DB::table('blocks')->where('name','like','%Ship%')->get()

)

                <div class="row feature_box">

                    <div class="span4">
                        <div class="service">
                            <div class="responsive">
                                <img src="themes/images/feature_img_2.png" alt="" />
                                <h4>MODERN <strong>DESIGN</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="customize">
                                <img src="themes/images/feature_img_1.png" alt="" />
                                <h4>FREE <strong>SHIPPING</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="support">
                                <img src="themes/images/feature_img_3.png" alt="" />
                                <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                            </div>
                        </div>
                    </div>




                </div>


            </div>
        </div>
    </section>








@endsection
