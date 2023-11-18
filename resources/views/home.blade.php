@php
    $products = config('products');

@endphp

@extends('layouts.main')

@section('content')
    <div class="container flex">
        @foreach ($products as $product)
            @php
                $isInFavorites = $product['isInFavorites']
            @endphp

        <div class="product" @click="$isInFavorites = !$isInFavorites">
            <div class="image relative">
            <img id="img-relaxed" src="{{ Vite::asset('resources/img/'.$product['frontImage']) }}" alt="">
            <img class="secondary-image" src="{{ Vite::asset('resources/img/'.$product['backImage']) }}" alt="">
            <span class="heart" :class="{active : $isInFavorites}"><i class="fa-solid fa-heart"></i></span>
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
            <span class="modello">{{$product['name']}}</span>
            <div class="price">
                @foreach ($product['badges'] as $badge)
                @if ($badge['type'] == 'discount')

                    <span class="last-price">{{$product['price']}}</span>
                    <span class="full-price">{{$product['price']}}</span>
                @else
                    <span class="full-price">{{$product['price']}}</span>

                @endif
                @endforeach


            </div>
            </div>
        </div>
        @endforeach


    </div>

@endsection
