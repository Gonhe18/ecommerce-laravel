<div class="cardProd">
  @foreach ($productos as $prod)
    <a href="{{ route('productoId', [$prod->categoria, $prod->id]) }}">
      <article class="product-card">
        <div class="img-contenedor">
          <img src="{{ $prod->img }}" alt="Producto" class="prod-img" />
        </div>
        <div class="tit-contenedor">
          <h3>
            {{ $prod->marca }} - {{ $prod->modelo }}
          </h3>
          <h4>$ {{ $prod->precio }}</h4>
        </div>
      </article>
    </a>
  @endforeach
</div>
