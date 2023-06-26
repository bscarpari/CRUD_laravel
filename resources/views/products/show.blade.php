@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-2">
                <div class="card">
                    <div class="card-header d-flex align-items-center w-100 justify-content-between">
                        {{ __('Visualizar produto') }}
                        <div>
                            <a href="{{ route('products.index') }}" class="btn btn-warning float-end">Ver estoque</a>
                        </div>
                    </div>

                    @if(isset($product))
                        <div class="card-body">
                            <h3 class="my-3">{{ $product->title }}</h3>
                            <img src="{{ asset('images/' . $product->photo) }}"
                                 alt="{{ $product->title }}" style="width: 100%">
                            <div class="my-5">
                                <h5 class="fw-bold">Descrição: </h5>
                                <p class="">{{ $product->description }}</p>
                            </div>
                            <h4 class="fw-bold">R${{ $product->price }}</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
