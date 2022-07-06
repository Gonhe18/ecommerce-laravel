@extends('layouts.app')
@section('titulo', 'Administración')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Crear nuevo admin') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('registroAdmin') }}">

              @include('auth.partials._registro')

              <div class="row mb-3">
                <label for="admin" class="col-md-4 col-form-label text-md-end">{{ __('Administrador') }}</label>
                <div class="col-md-6">
                  <input id="admin" type="radio" name="admin" name="admin" checked="checked"
                    value={{ true }}>
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Crear usuario') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
