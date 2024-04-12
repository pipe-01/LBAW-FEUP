@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="d-flex flex-column">
        <div style="margin-top: 2rem;position: relative; text-align: center;">
            <div class="d-flex flex-column" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 25%; background-color: #EFEFEF;text-align: center;padding: 0.2rem;"> 
                <span style="color: #696969">“Everything you can imagine is real” </span>
                <br>
                <span style="color: #696969"> -Pablo Picasso </span>
            </div>
            <img src="{{ asset('/images/color_guernica.jpeg') }}" style="object-fit: cover;" class="card-img-top" height="250" data-holder-rendered="true">
        </div>
    </div>
    <div class="d-flex flex-row">
        <div style="margin-top: 2rem;margin-right: 4rem">
            <form action="{{url('find')}}" method="GET">x
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Guernica">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Screenprint in colours">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" id="type" name="type" class="form-control" placeholder="Painting">
                </div>
                <!--
                <div class="mb-3">
                    <label for="customRange2" class="form-label">Price</label>
                    <input type="range" class="form-range" min="0" max="100000" id="customRange2" value="0" oninput="this.nextElementSibling.value = this.value" name="price">
                    <output>0</output>

                </div>
-->
                <div class="d-grip gap-2 d-md-flex justify-content-md-center">
                    <button style="border-color: #637CFF; background-color: #637CFF; color: white font-size: 1rem; center;padding: 0.2rem 1rem;" type="submit"
                            name="submit"
                            class="btn btn-primary">Filter
                    </button>
                </div>
            </form>
        </div>
        <div class="product py-5 col-lg-10" style="width: 1000px">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-3 g-1">
                        @if(count($product)==0)
                            <div class="col-md-12" align="center" style="width: 700px">
                            <h4 align="center" style="margin:20px"> No products found under category </h4>
                            </div>
                        @else
                            @each('partials.product', $product, 'product')
                        @endif
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection