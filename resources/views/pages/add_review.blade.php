@extends('layouts.app')

@section('content')


    <head>
        <title>smArt | New Comment</title>
        <!--CSS Bootstrap-->
        <link rel="stylesheet" href="./css/footer.css">
        <link href="./css/style2.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous"
                defer></script>



        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>

    <body>
    <div class="container">
            <div class="d-flex flex-column align-items-start" style="margin-top: 3rem">
                <h1 class="col mt-5" style="margin-bottom: 2.2rem">Review this product</h1>
                <p style="font-size: 25px; color: #696969;margin-bottom: 0.5rem;">{{$product->title}}</p>
                <p style="color: #696969;font-size: 1.2rem;">{{$product->description}}</p>
                <br>
                <h6 >Your overall score</h6>
                <form method="post" value="{{ csrf_token() }}" action="{{route('rateProduct.addReview', [$product->id, Auth::user()->id]) }}" >
                    @csrf
                    <label>
                        <input type="radio" name="radio" value="1">1
                    </label>
                    <label>
                        <input type="radio" name="radio" value="2">2
                    </label>
                    <label>
                        <input type="radio" name="radio" value="3">3
                    </label>
                    <label>
                        <input type="radio" name="radio" value="4">4
                    </label>
                    <label>
                        <input type="radio" name="radio" value="5">5
                    </label>
                    <br>
                    <br>
                    <label for="exampleFormControlTextarea1" class="form-label">Share your thoughts!</label>
                    <br>
                    <br>
                    <div class="d-flex">
                        <textarea class="form-control rounded" id="exampleFormControlTextarea1" rows="1"
                                    placeholder="Title of review" value="title" name="title"></textarea>
                    </div>
                    <br>
                    <textarea class="form-control rounded" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Tell us about your experiecnce in a couple of sentences" value="content" name="content"></textarea>
                
                    <br>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary mb-5" role="button" style="background-color: #637CFF;">Send</button>
                </form>
                @if (session('alert'))
                <div class="alert alert-success">
                {{ session('alert') }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection