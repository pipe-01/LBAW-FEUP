<head>
  <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
</head>

<div class="col">
    <div class="card box-shadow">
        <a href="{{ route('openProduct', $product->id) }}"><img class="card-img-top" height="250" data-holder-rendered="true"></a>
        <button id="favourite" class="btn-primary" style="border-color: grey; background-color: grey">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
            </svg>
        </button>
        <div style="display: block; max-width: 100%; word-break:break-all; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" class="card-body">
            <h2 style="font-size: 1em;">{{ $product->title }}</h2>
            <div class="row" style="margin-top: 1em">
                <div class="col-sm">
                    <p class="card-text">{{ $product->type }}</p>
                </div>
                <div class="col-sm">
                    <small style="color: black;" class="text-muted"><b>{{ $product->price}}€</b></small>
                </div>
            </div>
            <div class="row">
                <div class="btn-group" style="align-content: space-evenly;">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{$product->id}}>
                    <button class="btn btn-primary" style="border-color: #571f70; background-color: #571f70; color: white; margin: 1.5em 7em 1em 7em">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<head>
  <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
</head>
<div class="col">
    <div class="card box-shadow" style="background-color: transparent !important; border: 0 !important; margin-right: 0.5rem;">
        <button id="favourite" class="btn-primary" style="border-color: transparent; background-color: transparent;color: red;width: 10%;align-self: flex-end;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
            </svg>
        </button>
        <a href="{{ route('openProduct', $product->id) }}">
        @foreach ($product->images as $img)
            @if($img->main)<img src="{{ $img->image_path }}" style="object-fit: contain;" class="card-img-top" height="250" data-holder-rendered="true">@endif
        @endforeach
        </a>
        <div class="d-flex flex-column" style="margin: 1rem">
            <h2 style="font-size: 1em; color: #696969">{{ $product->title }}</h2>
            <h2 style="font-size: 1em; color: #9F9F9F; margin-bottom: 1rem; margin-top: 0.5rem">{{ $product->artist['name'] }}</h2>
            <small style="color: #9F9F9F"><b>{{ $product->price}}€</b></small>
            <div class="d-flex align-items-center flex-column">
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product->id}}>
                    <button style="background-color: #E5E5E5; color: #9F9F9F; font-size: 0.5rem; margin-top: 1rem; border-color: #E5E5E5; border-radius: 20px; padding: 0.1rem 1rem 0.1rem 1rem;" type="submit" class="btn btn-primary btn-sm" type="submit"> Add to Cart </button>
                </form>
            </div>
        </div>
    </div>
</div>
-->
