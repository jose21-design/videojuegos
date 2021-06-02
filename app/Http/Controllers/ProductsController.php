<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();


        return view ('products.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('products.create');
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
        $producto = new Product();
        $producto->tittle = $request->tittle;
        $producto->description = $request->description;
        $producto->ruta = $request->ruta;
        $si = '/public/img';
        move_uploaded_file($request->ruta, $si);
        //$hola = $producto->ruta;
        //$producto->ruta->move_uploaded_file($hola, 'img');
        $producto->user_id = Auth::user()->id;
        /*$hola=$producto->ruta;
        $archivo=$hola;
        $hola->move_uploaded_file($archivo, 'img');*/
        

        /*$entrada=$request->all();
        if($archivo=$request->file('ruta')){

            $nombre=$archivo->getClientOriginalName();
            $archivo->move('img', $nombre);
            $entrada['ruta']=$nombre;

        }
        $entrada->user_id = Auth::user()->id;
       Product::create($entrada); */


        if ($producto->save()){
            return redirect("/products");
        }else{
            return view('create');
        }
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
