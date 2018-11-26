@csrf
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="title"> @lang('labels.Product title') </label>
      <small class="form-text text-muted"> Exeplo: LG K10 </small>

      <input name="title"
      type="text"
      id="title"
      class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
      placeholder="Name"
      value="{{old('title') ?? $products->title ?? '' }} "/>

      <label for="description"> @lang('labels.description') </label>
      <small class="form-text text-muted"> Exeplo: Celular </small>
      <input name="description"
      type="text"
      id="description"
      class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
      placeholder="description"
      value="{{old('description') ?? $products->description ?? '' }} "/>

      <label for="description"> @lang('th.Price') </label>
      <small class="form-text text-muted"> Somente números em R$. Exemplo: 1250,00 </small>
      <input name="price"
      type="text"
      id="price"
      class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
      placeholder="price"
      value="{{old('price') ?? $products->price ?? '' }} "/>
      <br>
      <label for="image"> @lang('labels.Image upload') * </label>
      <input name="image"
      type="file"
      id="image"
      class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
      placeholder="image"
      value="{{old('image') ??  '' }}"/>
      <small id="exampleInputFloatingLabel1Help" class="form-text text-muted">Entre com uma imagem no formato .jpg</small>
      <br>
      <label for="thumbnail">@lang('labels.Choose thumbnail') *</label>
      <input name="thumbnail"
      type="file"
      id="thumbnail"
      class="form-control {{ $errors->has('thumbnail') ? ' is-invalid' : '' }}"
      placeholder="thumbnail"
      value="{{old('thumbnail') ?? $products->thumbnail ?? '' }}"/>      
      <small id="exampleInputFloatingLabel1Help" class="form-text text-muted">Entre com uma imagem no formato .jpg</small>
    </div>
  </div>
</div>
