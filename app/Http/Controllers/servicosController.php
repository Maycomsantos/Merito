<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicos;
use Validator;



class servicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response




     */
    public function index()
    {
        return view('admin/servicos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'name'=> 'request',
          'fornecedor' => 'request',
          'description' => 'request',
          'cheque' => 'request',
          'destino' => 'request',
          'valor' => 'request',
]);




   $servicos = new servicos;
   $servicos->name = $request->input('name');
   $servicos->fornecedor = $request->input('fornecedor');
   $servicos->description = $request->input('description');
   $servicos->destino = $request->input('destino');
   $servicos->cheque = $request->input('cheque');
   $servicos->valor = $request->input('valor');
   $servicos->save();
   return back()->withMessage('Criado com sucesso!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $servicos = servicos::find($id);

        return view('admin/servicoslist.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $servicos = servicos::find($id);

        echo 'Informação editada';

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

         $servicos = servicos::find($id);
         $servicos->fill($request->all())->save();

         echo 'Informação Atualizada';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $servicos = find($id)->delete();

      return back()->with('info' , 'Informação deletada com sucesso');



    }
}
