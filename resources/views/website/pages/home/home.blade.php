@extends('website.layout.app')

{{-- title --}}
@section('title', 'Home')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="home-content-container">
        <div class="poster">
            
        </div>
        <div class="home-content-info">
            <div class="info-top">
                <h2>Our coffee shop present</h2>
            </div>
            <div class="content-info">
                <div class="info-col">
                    <img src="{{ asset('img/Path 6.png') }}" alt="">
                    <h2>Organic Bean</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book.</p>
                </div>
                <div class="info-col">
                    <img src="{{ asset('img/Icon ionic-ios-cafe.png') }}" alt="">
                    <h2>100, coffee to choose</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book.</p>

                </div>
                <div class="info-col">
                    <img src="{{ asset('img/Icon ionic-ios-music.png') }}" alt="">
                    <h2>Pleasent ambient</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book.</p>

                </div>
                <div class="info-col">
                    <img src="{{ asset('img/cutlery.png') }}" alt="">
                    <h2>Homemade cook</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book.</p>

                </div>

            </div>

        </div>
        <div class="signature-menu">
            <div class="text-menu">
                <h2>365 brew lab SIGNATURE MENU</h2>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry</p>
            </div>
            <div class="group-img">
                <div class="img-left">
                    <img src="{{ asset('img/_DSC0695-Edit.png') }}" alt="">
                    <img src="{{ asset('img/_DSC0712-Edit.png') }}" alt="">
                </div>
                <div class="img-right">
                    <div class="img-col1">
                        <img src="{{ asset('img/_DSC0724-Edit.png') }}" alt="">
                    </div>
                    <div class="img-col">
                        <img src="{{ asset('img/_DSC0707.png') }}" alt="">
                        <img src="{{ asset('img/_DSC0811.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="interior">
            <div class="text-menu">
                <h2>365 brew lab INTERIOR</h2>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry</p>
            </div>
            <div class="group-holder">
                <button>Interior Place Holder</button>
                <button>Interior Place Holder</button>
                <button>Interior Place Holder</button>
            </div>
            <div class="button">
                <button>See more</button>
            </div>
        </div>
        <div class="delivery-services">
            <div class="service">
                <div class="text-menu">
                    <h2>365 brew lab Delivery service</h2>
                </div>
                <div class="contact-delivery">
                    <div class="phone">
                        <img src="{{ asset('img/Icon material-phone.png') }}" alt="">
                        <p>(+855)00 999 999</p>
                    </div>
                    <div class="app-stores">
                        <div class="delivery">
                            <img src="{{ asset('img/bloc app.png') }}" alt="">
                            <img src="{{ asset('img/nham24.png') }}" alt="">
                        </div>
                        <div class="app">
                            <img src="{{ asset('img/app.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection
{{-- END   :: Product Listing Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/home.js') }}"></script>

@endsection
