@extends('layouts.main')

@section('content')


    <div class="container cont-detail">

        <div class="product-detail">
            <div class="image">
                <img src="{{ Vite::asset('resources/img/'.$product['frontImage']) }}">
                <img src="{{ Vite::asset('resources/img/'.$product['backImage']) }}">
            </div>
            <h4>
                Marca: {{ $product['brand'] }} | Modello: {{ $product['name'] }}| Prezzo: {{ $product['price'] }}
            </h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae itaque officia, a dolores nam id sapiente rem sit quod dignissimos.
            </p>
        </div>


    </div>



@endsection
