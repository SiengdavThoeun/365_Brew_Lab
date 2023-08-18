@extends('website.layout.app')

{{-- title --}}
@section('title', 'Foods')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="event-content-container">
        <div class="event-img">
            <div class="text">
                <h2>News & Events</h2>
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