
@extends('layouts.pagelayout')

@section('content')

    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Check Out</span></h4>
    </section>


    <div class="row">
        <div class="span12">


<form action="/your-server-side-code" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_NePZjcLk7elgZowbOcolGENU"
            data-amount="999"
            data-name="Demo Site"
            data-description="Widget"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
    </script>
</form>



        </div></div>

    @endsection