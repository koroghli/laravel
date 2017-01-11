@extends('templates.base')
@section('title','Magasin')
@section('content')
<style >
  img
  {
    width:15%
  }
  table{

  justify-content: center;

  }
</style>
<h2>{{Session::get('status')}}</h2>
<h1 class="text-center" >Bienvenue sur notre magasin </h1>
</div>
<div class="container-fluid" style="display:flex;flex-wrap: wrap;">
  @if (sizeof($products) > 1)
    @foreach ($products as $product)
    <div class="wrapper" style="margin-left:15px">
      <table>
          <tr>
            <td><img src='/img/{{$product->img}}'></td>
          </tr>
            <tr>
              <h1><td>{{ $product->name }}</td></h1>
            </tr>
            <tr>
              <td>Description: {{ $product->description }} la taille {{ $product->height }} X {{ $product->width}}</td>
            </tr>
            <tr>
              <td>Prix: {{ $product->price / 100}}€</td>
            </tr>
        </table>
        <button type="button" class="btn btn-default">Ajouter au panier</button>
    </div>
</div>
@endforeach
@elseif (sizeof($products) == 1)
  <div class="wrapper" style="margin-left:15px">
    <table>
        <tr>
          <td><img src='/img/{{$products->img}}'></td>
        </tr>
          <tr>
            <h1><td>{{ $products->name }}</td></h1>
          </tr>
          <tr>
            <td>Description: {{ $products->description }} la taille {{ $products->height }} X {{ $products->width}}</td>
          </tr>
          <tr>
            <td>Prix: {{ $products->price / 100}}€</td>
          </tr>
      </table>
      <button type="button" class="btn btn-default">Ajouter au panier</button>
  </div>
@else
  <h1>aucun produit retourné</h1>

  @endif


@php
  if ($products instanceof Illuminate\Eloquent\Dtatbase\Collection) {
    var_dump($products);die;
  }
  else {
    echo'coucou';
  }

@endphp



























@endsection
