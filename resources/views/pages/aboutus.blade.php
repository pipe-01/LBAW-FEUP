@extends('layouts.app')

@section('content')
<section class="container" id="aboutUs">
    <div class="d-flex flex-column">
        <div style="margin-top: 2rem;position: relative; text-align: center;">
            <img src="{{ asset('/images/about_us.jpeg') }}" style="object-fit: cover;" class="card-img-top" height="250" data-holder-rendered="true">
        </div>
        <div style="margin-top: 5rem;margin-left: 3rem;">
            <h1 style="color: #696969">About us</h1>
        </div>
        <div style="padding: 3rem;">
                <p style="color: #696969 ;font-size: 1.25vw;">SmArt is a dynamic marketplace for art. We provide international acess to exclusive pieces made by world renoun artists. 
                    Our collection is diverse and goes across multiple art forms with out recent introduction of NFT's. It's updated and restocked regularly so there are always new opportunities.</p>

        </div>
        <div style="align-self: center;margin-bottom: 3rem;">
            <a style="border-color: #637CFF; background-color: #637CFF; color: white" class="btn btn-primary btn-lg " href="catalog" role="button"> Browse our collection</a>
        </div>
</section>
@endsection
