@extends('layouts.app')

@section('content')
<!--
<section class="py-5 container text-center" id="contacts">
        <div class="row g-5">
            <div class="col-lg-8">
                <h1 style="color: #571f70">Contacts</h1>
                <p style="color: #571f70" class="fs-2">If you have any question, please use one of<br>the following contacts to share it with us.</p>
                <p style="color: #571f70" class="fs-2">E-mail: store@smart.com</p>
                <p style="color: #571f70" class="fs-2">Telephone: +351 912 345 678</p>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="catalog" role="button"> Return to the Catalog</a>
            </div>
        </div>
</section>
-->
<section class="container" id="aboutUs">
    <div class="d-flex flex-column">
        <div style="margin-top: 2rem;position: relative; text-align: center;">
            <img src="{{ asset('/images/persistance.jpeg') }}" style="object-fit: cover;" class="card-img-top" height="250" data-holder-rendered="true">
        </div>
        <div style="margin-top: 5rem;margin-left: 3rem;">
            <h1 style="color: #696969">Contacts</h1>
        </div>
        <div style="padding: 3rem;">
            <p style="color: #696969; font-size: 1.6vw;">If you have any question, please use one of the following contacts</p>
            <div class="d-flex flex-row">
                <p style="color: #696969; font-size: 1.25vw;">Email: </p>
                <p style="color: #9F9F9F; font-size: 1.25vw;">store@smart.com.</p>
            </div>
            <div class="d-flex flex-row">
                <p style="color: #696969; font-size: 1.25vw;">Telephone: </p>
                <p style="color: #9F9F9F; font-size: 1.25vw;">+351 912 345 678</p>
            </div>
        </div>
        <div style="align-self: center;margin-bottom: 3rem;">
            <a style="border-color: #637CFF; background-color: #637CFF; color: white" class="btn btn-primary btn-lg " href="catalog" role="button"> Browse our collection</a>
        </div>
</section>

@endsection
