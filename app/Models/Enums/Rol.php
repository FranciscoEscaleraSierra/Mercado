<?php

namespace App\Models\Enums;

enum Rol: string
{
  case ENCARGADO = 'encargado';
  case CLIENTE = 'cliente';
  case SUPERVISOR = 'supervisor';
  case CONTADOR = 'contador';
}
