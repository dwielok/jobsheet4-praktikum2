@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div id="plant" class="section  product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2><strong class="black"> Our</strong> Products</h2>
                        <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected randomised words which don't look even slightly
                            believable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clothes_main section ">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="sport_product">
                            <figure><img src="{{ $product->image }}" alt="img" /></figure>
                            <h3> Rp.<strong class="price_text">{{ $product->price }}</strong></h3>
                            <h4>{{ $product->name }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    </div>
@endsection
