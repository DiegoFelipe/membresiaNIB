<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Membros;
// use App\Services\MembroService;

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
    public function create(Request $request)
    {
      // $membro = new Membros([
      //   'mem_nome' => $request->get('mem_nome'),
      //   'mem_data_nascimento' => $request->get('mem_data_nascimento')
      // ]);
      // // dd('asasdasd');
      // $membro->save();
      // return response()->json('Adicionado com sucesso');
      // // dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $membro = new Membros([
        'mem_nome' => $request->get('mem_nome'),
        'mem_data_nascimento' => $request->get('mem_data_nascimento')
      ]);
      // dd('asasdasd');
      $membro->save();
      return response()->json('Adicionado com sucesso');
      // dd($request->all());
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
