<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
  use HasFactory;
  protected $fillable = [
    'userinput',
    'admininput',
    'uang',
  ];
}