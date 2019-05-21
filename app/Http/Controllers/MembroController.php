<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;
// use App\Services\MembroService;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\MembroRequest;

class MembroController extends Controller
{

    // protected $membroService;
    //
    // public function __construct(
    //   MembroService $membroService
    // )
    // {
    //     $this->membroService = $membroService;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Membro $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request->all());

      $membro = new Membro;
      $membro->mem_nome = $request->mem_nome;
      $membro->mem_data_nascimento = $request->mem_data_nascimento;
      $membro->save();



      return response()->json('Membro adicionado com sucesso');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
