<?php
//layered architecture
require_once __DIR__ .'/../vendor/autoload.php';

use App\Controller\AuthController;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $controller = new AuthController();
  $controller->handleLogin();
}else{
  ?>
  <form action="" method="POST">
    <div>
      <label for="iemail">Email:</label>
      <input type="email" id="iemail" name="email" required>
    </div>
    <div>
      <label for="ipassword">Password:</label>
      <input type="password" name="password" id="ipassword" required>
    </div>
    <button type="submit">Login</button>
  </form>
  <?php

}