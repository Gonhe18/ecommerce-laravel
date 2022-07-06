@extends('layouts.app')
@section('titulo', 'Administración')
@section('content')

  <section class="contenedorAdmin ">
    @if (session('status'))
      <div class="alert alert-success w-100 my-3 h4" role="alert">{{ session('status') }}</div>
    @endif
    <div class="botonesAdmin">
      <button class="enlacebtn misDatos">
        <a href="{{ route('editUsuario', auth()->user()->id) }}" class='btn-adm '>Mis datos</a>
      </button>
      <button class="enlacebtn histCompras">
        <a href="#" class='btn-adm '>Historial compras</a>
      </button>
      @if (Auth::user()->admin == true)
        <button class="enlacebtn crearUser">
          <a href="{{ route('registroAdmin') }}" class='btn-adm'>Crear nuevo Admin</a>
        </button>
        <button class="enlacebtn crearProd">
          <a href="{{ route('newProd') }}" class='btn-adm '>Ingresar nuevo producto</a>
        </button>
        <button class="enlacebtn modEl">
          <a href="{{ route('home') }}" class='btn-adm '>Modificar/Eliminar producto</a>
        </button>
      @endif


    </div>

  </section>

@endsection
