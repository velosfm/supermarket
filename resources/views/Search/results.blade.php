@extends('main')
@section('content')
<h3 class="heading">Αποτελέσματα από το Ηλεκτρονικό Κατάστημα Σκλαβενίτη</h3>
                 <div class="container">
                    <div class="row product">
@foreach($sk_prods as $product)
   <div class="col-md-4 ">
  <div class="card">
    <div class="ccc">
      <p class="text-center"><img src="{{$product->original->image[0]}}" class="imw"></p> 
<!--                               <div class="overlay">
        <div class="text">View Details</div>
      </div> -->
    </div>
    <div class="card-body">
      <h5 class="text-center">{{$product->original->title[0]}}</h5> 
      @isset($product->original->main_price[0])
      <p class="text-center">Τιμή: {{$product->original->main_price[0]}}</p>
      @endisset
      <p class="text-center">Τιμή: {{$product->original->kil_price[0]}}</p>
    </div>
  </div>
</div>

   @endforeach
@endsection

