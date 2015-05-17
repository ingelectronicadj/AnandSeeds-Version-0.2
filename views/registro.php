<form action="/DBClass/registro_usuario.php" method="post" class="form-signin">
    <h2 class="form-signin-heading">Registrarse</h2>
    <label for="nickname" class="sr-only">Nickname</label>
    <input type="text" name="nickname" class="form-control" placeholder="Nickname" required>
    <label for="correo" class="sr-only">Correo</label>
    <input type="email" name="correo" class="form-control" placeholder="Correo electronico" required>
    <label for="nombres" class="sr-only">Nombres</label>
    <input type="text" name="nombres" class="form-control" placeholder="Nombres" required>
    <label for="apellidos" class="sr-only">Apellidos</label>
    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
    <label for="contrasena" class="sr-only">Contraseña</label>
    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
    <!--<div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>-->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
</form>