<form action="/DBClass/ingreso_usuario.php" method="post" class="form-signin">
    <h2 class="form-signin-heading">Ingresar</h2>
    <label for="inputText" class="sr-only">Nickname</label>
    <input type="text" name="nickname" class="form-control" placeholder="Nickname" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
    <!--<div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>-->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
</form>