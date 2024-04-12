@extends('layouts.app')

@section('content')
<section class="container" id="aboutUs">
    <div class="d-flex flex-column">
        <div style="margin-top: 2rem;position: relative; text-align: center;">
            <img src="{{ asset('/images/starry_night.jpeg') }}" style="object-fit: cover;" class="card-img-top" height="250" data-holder-rendered="true">
        </div>
        <div style="margin-top: 5rem;margin-left: 3rem;">
            <h1 style="color: #696969">FAQ</h1>
        </div>
        <div style="padding: 3rem;">
            <p style="color: #696969; font-size: 1.6vw;">What are the accepted payment methods?</p>
            <p style="color: #9F9F9F; font-size: 1.25vw;">For now, you can only make your payments using the bank transfer method.</p>
            <p style="color: #696969; font-size: 1.6vw;">What products can I buy?</p>
            <p style="color: #9F9F9F; font-size: 1.25vw;">At SmArt, you can either buy paintings/sculptures or NFTs. Feel free to select which products do you want.</p>
            <p style="color: #696969; font-size: 1.6vw;">How can I make a purchase?</p>
            <p style="color: #9F9F9F; font-size: 1.25vw;">Start by searching through the catalog the products you want and then add them to the shopping basket. After that, proceed to the checkout page and confirm your purchase.</p>
        </div>
        <div style="align-self: center;margin-bottom: 3rem;">
            <a style="border-color: #637CFF; background-color: #637CFF; color: white" class="btn btn-primary btn-lg " href="catalog" role="button"> Browse our collection</a>
        </div>
    </div>
</section>
@endsection
