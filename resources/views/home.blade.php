@php
    $products = config('products');

@endphp

@extends('layouts.main')

@section('content')
    <div class="container flex">
        @foreach ($products as $product)
            @php
                $isInFavorites = $product['isInFavorites'];
                $price = $product['price'];
                $price_disc = $product['price']*(50/100);

                

            @endphp

        <div class="product">
            <a href="{{ route('productDetail', ['slug' => $product['id']]) }}">

                <div class="image relative">
                    <img id="img-relaxed" src="{{ Vite::asset('resources/img/'.$product['frontImage']) }}" alt="">
                    <img class="secondary-image" src="{{ Vite::asset('resources/img/'.$product['backImage']) }}" alt="">
                    <span class="heart {{$isInFavorites ? 'active' : '' }}"><i class="fa-solid fa-heart"></i></span>
                    <div class="tag">
                        @foreach ($product['badges'] as $badge)
                            @if ($badge['type'] == 'discount')
                                <span class="discount">{{ $badge['value'] }}</span>
                            @endif

                            @if ($badge['value'] == 'Sostenibilità')
                                <span class="sostenibilita"> {{ $badge['value'] }} </span>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="description">
                    <span class="marca">{{$product['brand']}}</span>
                    <span class="modello">{{ strtoupper($product['name'])}}</span>
                    <div class="price">
                        @if (in_array('discount', $product))
                            <span class="last-price">{{$price_disc}} €</span>
                            <span class="full-price">{{$price}} €</span>
                        @else
                            
                            <span class="last-price">{{$price}} €</span>
                        @endif


                    </div>
                </div>
            </a>
        </div>
        @endforeach


    </div>

@endsection
