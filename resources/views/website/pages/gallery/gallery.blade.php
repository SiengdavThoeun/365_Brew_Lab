@extends('website.layout.app')

{{-- title --}}
@section('title', 'Foods')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="gallery-content-container">
        <div class="gallery-img">
            <div class="text">
                <h2>Our Gallery</h2>
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