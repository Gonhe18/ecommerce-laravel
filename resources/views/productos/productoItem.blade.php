@extends('layouts.app')
@section('titulo', $prodId->categoria)
@section('content')
  <article class="contenidoCard">
    <div class="cardItem">
      <div class="imgCard">
        <img src="{{ $prodId->img }}"alt="producto" class="prodImg" />
      </div>
      <div class="bloqueContenedor">
        <h3 class="titContenedor">
          {{ $prodId->marca }} {{ $prodId->modelo }}
        </h3>
        <div class="separador"></div>
        <div class="bloqueContador">
          <h4>$ {{ $prodId->precio }} </h4>
          <h5>Stock:</h5>
          <p>{{ $prodId->stock }} unidad(es)</p>
        </div>
        <div class="contador">
          <div class="modifCant">
            <i class="fa-solid fa-circle-minus disminuir"></i>
          </div>
          <p class="cant-item">0</p>
          <div class="modifCant">
            <i class="fa-solid fa-circle-plus aumentar "></i>
          </div>
        </div>
        <button class='btn-detalleItem'>Agregar a carrito</button>
        @auth
          @if (Auth::user()->admin == true)
            <div class="btnAdmin">
              <a href="{{ route('editProd', $prodId) }}" class="btnActualizar"><button class="actualizar">Actualizar
                  Producto</button></a>
              <form action="{{ route('deleteProd', $prodId) }}" method="post" class='formDelete'>
                @csrf
                @method('delete')
                <button type="submit" class="eliminar">Eliminar Producto</button>
              </form>
            </div>
          @endif
        @endauth

      </div>
    </div>
    <div class="bloqueDescripcion">
      <p class="textDescripcion">{{ $prodId->descripcion }}</p>
    </div>
  </article>

@endsection
