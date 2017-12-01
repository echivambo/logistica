<?php

namespace App\Http\Controllers;

use App\Contagem;
use App\Http\Requests\ContagemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $produtos = DB::table('produtos')->select('id', 'nome', 'codigo')->get();
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
        $size = sizeof($request->quantidade);

        for ($i=0; $i < $size; $i++) {

            if($request->quantidade[$i]){

                $entradas = [
                    'comentario'=>$request->comentario[$i],
                    'data_entrada'=>$request->data_entrada,
                    'user_id'=>$request->user_id,
                    'quantidade'=>$request->quantidade[$i],
                    'produto_id'=>$request->produto_id[$i],
                    'franquia_id'=>$request->franquia_id,
                ];
                Entrada::create($entradas);

            }

        }
        return redirect()->route('entradas.index')->with('message', 'Entrada registada com sucesso!');
        //var_dump($request->quantidade);
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
