<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    private $itens_menu;

    public function __construct(Menu $itens_menu)
    {
        $this->itens_menu = $itens_menu;
        session_start();
    }

    public function index()
    {
        $itens_nivel1 = DB::table('itens_nivel1')->get();
       
        return view('menu.index', compact('itens_nivel1'));
       
    }

   
    public function inserirPrimeiroNivel(Request $request)
    {
        $dados = json_decode($request->getContent(), true);
  
        DB::table('itens_nivel1')->insertGetId($dados);
    }

    public function inserirSegundoNivel(Request $request)
    {
        $dados = json_decode($request->getContent(), true);
        
        DB::table('itens_nivel2')->insertGetId($dados);
    }

    public function getItens_nivel2(Request $request)
    {
        
        $iditens_nivel1 = json_decode($request->getContent(), true);

        $itens_nivel2 = DB::select("SELECT itens_nivel2.iditens_nivel2, nivel2 FROM itens_nivel2 
            join itens_nivel1 on itens_nivel2.iditens_nivel1 = itens_nivel1.iditens_nivel1
            where itens_nivel2.iditens_nivel1 = {$iditens_nivel1}");


        print(json_encode($itens_nivel2));    
       
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
        //
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
