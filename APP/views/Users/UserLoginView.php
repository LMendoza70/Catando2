<div>
  <h2>Log In</h2>
  <form
    action="http://localhost/catando2/?clase=UserController&metodo=login"
    method="post"
  >
    <div>
      <label for="usuario">Username</label>
      <input type="text" name="usuario" id="usuario" required />
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />
    </div>
    <div>
      <input type="submit" value="Log In" />
    </div>
  </form>
  <div>
    <a href="index.php?controller=Users&action=register">Register</a>
  </div>
</div>
