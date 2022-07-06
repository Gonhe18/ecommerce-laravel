@extends('layouts.app')
@section('titulo', 'Administración')
@section('content')
  <form method="POST" action="{{ route('editUsuario', auth()->user()->id) }}">
    @include('auth.partials._registro')
    <div class="row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Actualizar datos') }}
        </button>
      </div>
    </div>
  </form>

@endsection
