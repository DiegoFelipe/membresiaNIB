<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministerio;

class MinisteriosController extends Controller
{
    public function getAllMinisterios() {
      $ministerios = Ministerio::all();
      dd($ministerios);

      return response()->json($ministerios);
    }
}
