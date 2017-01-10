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
<h1 class="text-center" >Bienvenue sur notre magasin </h1>
</div>
<div class="container-fluid" style="display:flex;flex-wrap: wrap;">
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
@endsection
