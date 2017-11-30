<?php

namespace App\Http\Controllers;

use App\Contagem;
use App\Http\Requests\ContagemRequest;
use Illuminate\Http\Request;

class ContagemController extends Controller
{
    private $contagem;
    public function __construct(Contagem $contagem)
    {
        $this->contagem=$contagem;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contagems = $this->contagem->all();
        $franquias = DB::table('franquias')->select('id', 'nome')->get();
        $produtos = DB::table('produtos')->select('id', 'nome')->get();
        return view('admin.contagem', compact('contagems','franquias','produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('painel.produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContagemRequest $request)
    {
        Contagem::create($request->all());
        return redirect()->route('contagens.index')->with('message', 'Contagem registada com sucesso!');
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
