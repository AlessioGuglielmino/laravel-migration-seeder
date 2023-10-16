<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
  public function treni()
  {
    $trains = Trains::all();
    return view('train', compact('trains'));
  }
}