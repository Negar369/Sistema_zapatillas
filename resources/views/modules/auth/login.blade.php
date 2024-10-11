@extends('layouts/main')

@section('titulo_pagina', 'login de usuario')

@section('contenido')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Login de Usuario con Laravel 11</h2>
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            @method('post')
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="email" id="email">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <button class="btn btn-primary mt-4">Entrar</button>
                            <a href="{{ route('registro') }}" class="btn btn-info mt-4">Registrate aqui</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
