<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class CrudController extends Controller
{

  public function index() {

      	$products = Product::all();

      	return view('crud', compact('products'));
      }

      public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|max:15',
            'categoria' => 'required|max:100|numeric',
            'detalle'=>'required',
            'precio'=>'required|numeric',
        ]);

        $data = request()->all();

        $product = Product::create($data);
        return redirect()->to('crud')->with('success', 'Producto creado exitosamente') ;
    }


      public function destroy($id) {
          $products = Product::find($id);
          $products->delete();
          return redirect()->to('crud');
      }

      public function edit($id) {
        $product = Product::find($id);
        return view('edit', ['product' => $product]);
    }

    public function update($id, Request $request) {
      $nombre = request()->input('nombre');
      $categoria = request()->input('categoria');
      $detalle = request()->input('detalle');
      $precio = request()->input('precio');

      $this->validate($request, [
          'nombre' => 'required|max:150',
          'categoria' => 'required|max:200|numeric',
          'detalle'=>'required',
          'precio'=>'required|numeric',
      ]);
      $product = Product::find($id);
      $product->nombre = $nombre;
      $product->categoria = $categoria;
      $product->detalle = $detalle;
      $product->precio = $precio;
      $product->save();
      return redirect()->to('crud');
  }


}
