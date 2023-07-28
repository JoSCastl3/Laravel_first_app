<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Este método nos devuelve la vista del Panel Principal
        return view('productos.homeproductos');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Devuelve la vista con el formulario para ingresar un nuevo producto
        return view('productos.createproductos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->nameprod = $request->nameprod;
        $product->typeprod = $request->typeprod;
        $product->cantity = $request->cantity;
        $product->cost = $request->cost;
        $product->price = $request->price;

        $product->save();

        //return response()->json(['result'=>$product]);

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //Muestra todos los productos existentes en la Base de Datos
        $product = Product::all();
        return view('productos.showproductos', compact('product')) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //Muestra la vista de edición de un producto
       $product = Product::findOrFail($id);
       return view('productos.editproductos', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //
        $product = Product::findOrFail($id);

        //return response()->json(['result'=>$product]);
        return view('productos.detalleproductos', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);
        return redirect('show');

    }
}
