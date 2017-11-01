<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ContatoRepository;
use App\Contato;
use App\Services\ContatoService;

class ContatoController extends Controller
{
    
    protected $repository;

    public function __construct(ContatoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->repository->all(
        return response()->json($this->repository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    public function contatos(Request $request)
    {
        $contatoService = new ContatoService;
        $contatos = $contatoService->getContato($request,$this->repository);
        return response()->json($contatos);
    }

    public function contato($id = null)
    {
        $contato = $this->repository->find($id);        
        return response()->json($contato);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $contato = $this->repository->create($request->all());
        return response()->json($contato,201);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
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
        $this->repository->update($request->all(), $id);
        return response()->json('atualizado com sucesso', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json('deletado com sucesso', 204);   
    }
}
