@csrf
<div class='formNewProd'>
  <div class='cajaChicaForm'>
    <div class='infoForm'>
      <label for='categoriaProd'>Categoría</label>
      <input id='categoriaProd' type="text" name='categoria' autocomplete="off"
        value="{{ old('categoria', $prodId->categoria) }}" required>
    </div>
    <div class='infoForm'>
      <label for='marcaProd'>Marca</label>
      <input id='marcaProd' type="text" name='marca' autocomplete="off"
        value="{{ old('marca', $prodId->marca) }}" required>
    </div>
    <div class='infoForm'>
      <label for='modelo'>Modelo</label>
      <input id='modelo' type="text" name='modelo' autocomplete="off"
        value="{{ old('modelo', $prodId->modelo) }}" required>
    </div>
    <div class='infoForm'>
      <label for='stockProd'>Stock</label>
      <input id='stockProd' type="number" name='stock' autocomplete="off"
        value="{{ old('stock', $prodId->stock) }}" required>
    </div>
    <div class='infoForm'>
      <label for='precioProd'>Precio</label>
      <input id='precioProd' type="number" name='precio' step="0.01" min=0 autocomplete="off"
        value="{{ old('precio', $prodId->precio) }}" required>
    </div>
    <div class='infoForm'>
      <label for='imgProd'>Foto</label>
      <input id='imgProd' type="text" name='img' value="{{ old('img', $prodId->img) }}" required>
    </div>
  </div>
  <div class="descripcionForm">
    <label for='descripcionProd'>Descripción</label>
    <textarea name="descripcion" id="descripcionProd">{{ old('descripcion', $prodId->descripcion) }}</textarea>
  </div>
  <button type="submit">Guardar</button>
</div>
