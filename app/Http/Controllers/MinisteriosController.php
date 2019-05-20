<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministerio;
use Illuminate\Support\Facades\Log;

class MinisteriosController extends Controller
{
    public function getAll() {
      $ministerios = Ministerio::all();
      $response = $ministerios->pluck('min_descricao', 'min_nome');
      // dd($response);
      return $ministerios->toArray();
    }
}
