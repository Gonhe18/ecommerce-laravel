@extends('layouts.app')
@section('titulo', 'Administración')
@section('content')

  <section class="contenedorAdmin ">
    @if (session('status'))
      <div class="alert alert-success w-100 my-3 h4" role="alert">{{ session('status') }}</div>
    @endif
    <div class="botonesAdmin">
      <a href="{{ route('registroAdmin') }}" class='enlacebtn'>
        <button class="btn-adm crearUser">Crear nuevo Admin</button>
      </a>
      <a href="{{ route('newProd') }}" class='enlacebtn'>
        <button class="btn-adm crearProd">Ingresar nuevo producto</button>
      </a>
      <a href="{{ route('home') }}" class='enlacebtn'>
        <button class="btn-adm modEl">Modificar/Eliminar producto</button>
      </a>
    </div>

  </section>

@endsection
