@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <section class="hero-section">
                <div class="container">
                    <div class="flex-column align-items-center w-100">
                        <div class="w-100 py-5 text-center">
                            <h1>Produtos para Animais de Estimação</h1>
                            <p>Encontre tudo o que precisa para cuidar do seu pet na nossa loja online.</p>
                        </div>
                        <div class="w-100 text-center">
                            <img
                                src="https://images.tcdn.com.br/img/img_prod/1126956/1676054706_animacente_-_cashback_banner.png"
                                alt="Pet Shop" class="img-fluid">
                            </a>

                            <h2 class="mt-5">Nossos produtos</h2>

                            <div class="d-flex flex-row w-100 gap-3 mt-5">
                                @foreach(App\Models\Product::all() as $p)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/' . $p->photo) }}" class="card-img-top"
                                             alt="imagem">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->title }}</h5>
                                            <p class="card-text">{{ $p->description }}</p>
                                            <p class="card-text">R${{ $p->price }}</p>
                                            <a href="{{ route('products.show', $p->id) }}"
                                               class="btn btn-warning w-100">Ver mais detalhes</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
