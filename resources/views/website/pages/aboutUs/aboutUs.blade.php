@extends('website.layout.app')

{{-- title --}}
@section('title', 'Foods')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="aboutUs-content-container">
        <div class="aboutUs-img">
            <div class="text">
                <h2>About Us</h2>
            </div>

        </div>
        <div class="group-box">
            <div class="banner">
                <p></p>
            </div>
        </div>
    </div>
@endsection
{{-- END   :: Product Listing Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/website/pages/products/product-list.js') }}"></script>

@endsection