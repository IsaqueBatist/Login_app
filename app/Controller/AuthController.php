<?php
//Authenticate user
namespace App\Controller;
use App\Service\AuthService;

class AuthController{
  private AuthService $service;
  
  public function _construct() {
    $this->service = new AuthService();
  }

  public function handleLogin(): void {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??  '';

    if(empty($email) || empty($password)){
      echo "Email e senha são obrigatórios";
      return;
    }

    $isAuthenticated = $this->service->login($email, $password);

    if($isAuthenticated){
      echo "Login bem-sucedido";
    }else{
      echo "Credenciais inválidas";
    }
  }
}

?>