<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('product.show')->with('products',Product::all());
        return view('products.index', [
            'products' => (Product::all())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
 
        $product->nombre_prod = $request->nombre_prod;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->img1_prod = $request->img1_prod;
        $product->img2_prod = $request->img2_prod;
        $product->img3_prod = $request->img3_prod;
        $product->estado = "ACTIVO";
        $product->talla = $request->talla;
        $product->color = $request->color;
        $product->marca = $request->marca;
        $product->cantidad = $request->cantidad;
        
        // $ruta='';

        // if($image=$request->file('img1')){
        //     $image->move(public_path().'/images/products',$image->getClientOriginalName());        
        // }

 
        $product->save();

        echo "Registro realizado";
 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
 
        $product->nombre_prod = $request->nombre_prod;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->img1_prod = $request->img1_prod;
        $product->img2_prod = $request->img2_prod;
        $product->img3_prod = $request->img3_prod;
        $product->estado = "ACTIVO";
        $product->talla = $request->talla;
        $product->color = $request->color;
        $product->marca = $request->marca;
        $product->cantidad = $request->cantidad;

        $product->save();

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
 
        $product->delete();
    }
}
