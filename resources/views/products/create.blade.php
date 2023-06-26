@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Adicionar produto novo') }}</div>

                    <div class="card-body">
                        @if(isset($errors) && count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p> {{$error}}
                                @endforeach
                            </div>
                        @endif

                        {!! Form::open(array('route' => 'products.store', 'method' => 'POST', 'enctype' => 'multipart/form-data')) !!}

                        {!! Form::token() !!}

                        <div class="form-group my-2">
                            {!! Form::label('title', 'Título: ') !!}
                            {!! Form::text('title', null, array('class'=>'form-control', 'required')) !!}
                        </div>
                        <div class="form-group my-2 d-flex flex-column">
                            {!! Form::label('photo', 'Foto do produto: ') !!}
                            {!! Form::file('photo', ['class' => 'form-control', 'accept' => 'image/*']) !!}
                        </div>
                        <div class="form-group my-2">
                            {!! Form::label('description', 'Descrição: ') !!}
                            {!! Form::textarea('description', null, array('class'=>'form-control', 'rows' => '5')) !!}
                        </div>
                        <div class="form-group my-2">
                            {!! Form::label('price', 'Preço: ') !!}
                            {!! Form::number('price', null, array('class'=>'form-control', 'required')) !!}
                        </div>

                        <button type="submit " class="btn btn-warning">Adicionar</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
