
<div class="container" style="width:80%;">

  @if($errors->any())
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
  
  
  @endif
<form method="POST"  action="{{ route('usuarioCreate.store')}}">
  @csrf


  
  <div class="form-group">
      <label>Ingrese su nombre completo</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="name" >
    </div>
    <div class="form-group">
      <label>Su direccion de correo electronico</label>
      <input name="email" type="email" class="form-control"  id="email" aria-describedby="emailHelp" placeholder="Enter email" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  
  
    <div class="form-group">
      <label>Ingresa tu numero de telefono</label>
      <input type="text" class="form-control" id="telefono" placeholder="55-000 000-00" name="tel1" >
    </div>
    <div class="form-group">
      <label>Ingresa otro numero de telefono</label>
      <input type="text" class="form-control" id="telefono2" placeholder="55-000 000-02" name="tel2" >
    </div>
  
  
   <div class="form-group">
        <label>Ingresa tu Curp</label>
        <input type="text" class="form-control" id="telefono2" placeholder="Curp" name="curp" >
      </div>
  
  
  <div class="input-group">
        <label>Suba su Curriculum Vitae</label>
  
        <input type="file" class="custom-file-input" id="curriculum" name="urlcv" >
      </div>
  
  <br>
  
  
      <div class="input-group-text">
        <input type="checkbox" aria-label="Checkbox for following text input" name="politicas"> aqui van las politicas de privacidad en cuanto nos las den(las politicas)
      </div>
  
    
  
  <br>
  
      <button class="btn btn-success"  style="width:50%;">Envie sus datos</button>
  
  </form>
</div>