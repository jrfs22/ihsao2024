<?php 

function isRouteActive($route)
{
  return request()->route()->getName() === $route;
}

function parseToStars($data) 
{
  return str_repeat('*', strlen($data));
}

function generateRandomPassword() {
  $length = 8;
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';

  $password = '';
  $max = strlen($characters) - 1;

  for ($i = 0; $i < $length; $i++) {
      $password .= $characters[random_int(0, $max)];
  }

  return $password;
}