@extends('main')
@section('content')
<h1>Προιόντα Καλαθιού</h1>
<div class="container ">
  <div class="row justify-content-md-center">
            @foreach($basket_data['retailers']  as $chain)
            <div><h2>{{$chain['name']}}</h2></div>
            <ul class="list-group w-50 mx-auto">
             @foreach($chain['basket'] as $prod )
             <li class="list-group-item">
                <div class="row">
                <div class="col-sm-4">
            <img src="{{$basket_data['base_url']}}{{$prod['IMAGE']}}" class="img-thumbnail" width="100px">
        </div>
        <div class="col-sm-8">
            <ul class="list-group">
                <li class="prod-list">{{$prod['NAME']}}</li>
                <li class="prod-list">Τιμή: {{$prod['PRICE']}}</li>
                <li class="prod-list">Τιμή/{{$prod['UNIT']}}: {{$prod['PRICE_NORMALIZED']}}</li>
            </ul>
        </div>
    </div>
           </li>        
             @endforeach
         </ul>
             @endforeach
    </div>
</div>
<div class="data_date"> Οι τιμές αφορούν την περίοδο Από: {{$basket_data['from']}} Έως: {{$basket_data['to']}}</div>
@endsection