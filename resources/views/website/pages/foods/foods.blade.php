@extends('website.layout.app')

{{-- title --}}
@section('title', 'Foods')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/foods.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="food-content-container">
        <div class="food-img">
            <div class="text">
                <h2>Foods Menu</h2>
                <p>Select food you want.</p>
            </div>
        </div>
        <div class="list-foods">
            <div class="banner">
                <p>Browser Our Foods</p>
                <p>Each food are selected specially by our chef.</p>
            </div>
            <div class="group-food">
                @for($i = 1; $i <= 12; $i++)
                <div class="food">
                    <div class="img-food"></div>
                    <div class="title-food">
                        <div class="column">
                            <p>Food Name</p>
                        </div>
                        <div class="column">
                            <p>Food Description</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
{{-- END   :: Product Listing Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/website/pages/products/product-list.js') }}"></script>

@endsection
