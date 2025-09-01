<?php
namespace App\Service;
use App\Repository\UserRepository;

class AuthService {
  private UserRepository $repository;

  public function __construct() {
    $this->repository = new UserRepository();
  }

  public function login(string $email, string $password): bool {
    $user = $this->repository->findByEmail($email);

    if(!$user){
      return false;
    }

    return hash('sha256', $password) === $user->getPassword();
  }
}