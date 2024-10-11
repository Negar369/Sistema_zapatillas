@extends('layouts/main')

@section('titulo_pagina', 'registro de usuario')

@section('contenido')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Registro de Usuario con Laravel 11</h2>
                        <form action="{{ route('registrar') }}" method="post">
                            @csrf
                            @method('POST')
                            <label for="">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="">Correo</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <button class="btn btn-primary mt-4">Registrarse</button>
                            <a href="{{ route('login') }}" class="btn btn-info mt-4">Logearse aqui</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
