@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Produtos cadastrados') }}</div>

                    @if(isset($errors) && count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p> {{$error}}
                            @endforeach
                        </div>
                    @endif

                    <div class="card-body">
                        <a class="btn btn btn-warning my-2 mb-3" href={{ route('products.create') }}>
                            Cadastrar novo produto
                        </a>

                        @if(isset($products))
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $p)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('images/' . $p->photo) }}"
                                                 alt="{{ $p->title }}" style="max-width: 180px">
                                        </td>
                                        <td>{{ $p->title }}</td>
                                        <td>{{ $p->price }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td class="col">
                                            <a href="{{ route('products.edit', $p->id) }}"
                                               class="btn btn-warning w-100">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="{{ route('products.destroy', $p->id) }}" method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger w-100 mt-2">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4>Não existem produtos cadastrados</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
