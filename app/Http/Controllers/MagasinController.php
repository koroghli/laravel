<?php

namespace App\Http\Controllers;

use App\Product;
use App\Creator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagasinController extends Controller
{

    public function index(Request $request)
    {
      $products = Product::find(1);

      if ($products == NULL) {
        $data = $request->session()->flash('status','Aucun produit retourné');
          }
        else {
          $data = $request->session()->flash('status','Affichage reussi!');
        }
  return view('magasin', ['products' => $products]);

    }
}
