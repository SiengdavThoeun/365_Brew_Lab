@extends('website.layout.app')

{{-- title --}}
@section('title', 'Foods')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/drink.css') }}">

@endsection

{{-- BEGIN :: Product Listing Content --}}
@section('body-content')
    <div class="drink-content-container">
        <div class="drink-img">
            <div class="text">
                <h2>Drinks Menu</h2>
                <p>Select the Drink you desire.</p>
            </div>

        </div>
        <div class="list-drink">
            <div class="banner">
                <p>Browse Our Drinks</p>
                <p>Each Coffee are selected specially by our Barista.</p>
            </div>
            <div class="group-drink">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="drink">
                        <div class="img-drink">
                            <img src="{{ asset('img/Img-drink.png') }}" alt="">
                        </div>
                        <div class="title-drink">
                            <div class="column">
                                <p>Drinks Name</p>
                            </div>
                            <div class="column">
                                <p>Drink Description</p>
                            </div>
                        </div>
                        <div class="price">
                            <p>3.5$</p>
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
