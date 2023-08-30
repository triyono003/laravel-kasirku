<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uanguser extends Model
{
  use HasFactory;
  protected $fillable = [
    'uangadmin',
    'userinput',
    'admininput',
    'total',
  ];
}