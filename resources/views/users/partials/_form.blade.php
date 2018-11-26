@csrf
<div class="row">
  <div class="col">
    <div class="form-group">
      <div class="form-group">
        <label for="name"> @lang('labels.Users') </label>
        <input name="name"
        type="text"
        id="name"
        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
        placeholder="Nome:"
        value="{{old('name') ?? $users->name ?? '' }} "/>
        <small class="form-text text-muted"> Seu nome de usuario </small>
      </div>

      <div class="form-group">
        <label for="email"> @lang('labels.email') </label>
        <input name="email"
        type="email"
        id="email"
        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
        placeholder="email"
        value="{{old('email') ?? $users->email ?? '' }} "/>
        <small class="form-text text-muted"> Exemplo: seuemail@gmail.com </small>
      </div>

      <label for="password">  @lang('labels.Password')  </label>
      <input name="password"
      type="password"
      id="password"
      class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
      placeholder="Senha"/>
      @if ($errors->has('password'))
      <small class="form-text text-muted"> No mínimo 6 caracteres. Dica: use letras e números </small>
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif

      <div class="form-group">
        <label for="confirm_password"> @lang('labels.Confirm Password') </label>
        <input name="confirm_password"
        type="password"
        id="confirm_password"
        class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
        placeholder="Confire a Senha"
        value=""/>
        <small class="form-text text-muted"> Repita a senha com atenção! Elas devem ser idênticas! </small>
      </div>

      <div class="form-group">
        <label for="profile">@lang('labels.profile') *</label>
        <input name="profile"
        type="file"
        id="profile"
        class="form-control {{ $errors->has('profile') ? ' is-invalid' : '' }}"
        placeholder="Profile"
        value="{{old('profile') ?? $users->profile ?? '' }}"/>
        <small class="form-text text-muted"> Escolha uma imagem no formato .jpg! </small>
      </div>

      
    </div>
  </div>

  <div class="col">
    <div class="form-group">
     <div class="form-group">
      <label for="cep"> @lang('labels.Postal Code') * </label>
      <input name="cep"
      type="text"
      id="cep"
      class="form-control {{ $errors->has('cep') ? ' is-invalid' : '' }}"
      placeholder="Postal Code"
      value="{{old('cep') ?? $users->cep ?? '' }}"
      onblur="pesquisacep(this.value);"/>
      <small class="form-text text-muted"> CEP da Sua Rua </small>
    </div>

    <div class="form-group">
      <label for="cep"> Buscar CEP Correios </label><br>
      <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/"
      class="btn btn-warning"
      target="resource window">
        Busca CEP
      </a>
      <small class="form-text text-muted"> Não lembra o CEP? Consulte no site dos Correios </small>
    </div>

    <div class="form-group">
      <label for="district">@lang('labels.District') *</label>
      <input name="district"
      type="text"
      id="bairro"
      class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
      placeholder="District"
      value="{{old('district') ?? $users->district ?? '' }}"/>
      <small class="form-text text-muted"> Preencha se não foi preenchido automaticamente! </small>
    </div>

    <div class="form-group">
      <label for="city">@lang('labels.City')</label>
      <input name="city"
      type="text"
      id="cidade"
      class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}"
      placeholder="City"
      value="{{old('city') ?? $users->city ?? '' }}"/>
    </div>

    <div class="form-group">
      <label for="state">@lang('labels.State') *</label>
      <input name="state"
      type="text"
      id="uf"
      class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}"
      placeholder="State"
      value="{{old('state') ?? $users->state ?? '' }}"/>
    </div>

  </div>
</div>
</div>
