<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
  public function treni()
  {
$title = 'Treni?';
    $trains = Trains::all();
    return view('trains', compact('trains','title'));
  }
}