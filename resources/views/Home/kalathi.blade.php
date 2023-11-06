@extends('main')
@section('content')
<h1>Προιόντα Καλαθιού</h1>
<div class="container">
    <div class="d-grid gap-3">
        <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
            @foreach($basket_data['retailers'] as $chain)
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="ex1-tab-{{Str::before($chain['logo'], '.png')}}"
                style="border-right: 1px solid #cccccc;"
                data-bs-toggle="tab"
                href="#ex1-tabs-{{Str::before($chain['logo'], '.png')}}"
                role="tab"
                aria-controls="ex1-tabs-{{Str::before($chain['logo'], '.png')}}"
                aria-selected="true"
                ><img src="{{$basket_data['base_url']}}{{$chain['logo']}}" class="img-thumbnail" style="width: 100px;"></a
                >
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="data_date"> Οι τιμές αφορούν την περίοδο Από: {{$basket_data['from']}} Έως: {{$basket_data['to']}}</div>
<div class="container ">
  <div class="tab-content" id="ex1-content">
    @foreach($basket_data['retailers']  as $chain)
  @if($loop->first)
  <div
    class="tab-pane fade show active" 
    id="ex1-tabs-{{Str::before($chain['logo'], '.png')}}"
    role="tabpanel"
    aria-labelledby="ex1-tab-{{Str::before($chain['logo'], '.png')}}"
  >  
  <div class="row justify-content-md-center">
            
            <div><h2>{{$chain['name']}}</h2></div>
            <ul class="list-group w-50 mx-auto">
             @foreach($chain['basket'] as $prod )
             <li class="list-group-item" style="background: #afb9c7; text-align: center;">
                <div class="row">
                <div class="col-sm-4">
            <img src="{{$basket_data['base_url']}}{{$prod['IMAGE']}}" class="img-thumbnail" width="100px">
        </div>
        <div class="col-sm-8">
            <ul class="list-group" style="background: #dee9f3;">
                <li class="prod-list" style="font-weight: bold;">{{$prod['NAME']}}</li>
                <li class="prod-list" style="font-weight: bold;">Τιμή: {{$prod['PRICE']}} €</li>
                <li class="prod-list"style="font-weight: bold;">Τιμή/{{$prod['UNIT']}}: {{$prod['PRICE_NORMALIZED']}} €</li>
            </ul>
        </div>
    </div>
           </li>        
             @endforeach
         </ul>
            
    </div> 

</div>
@else
<div
    class="tab-pane fade show" 
    id="ex1-tabs-{{Str::before($chain['logo'], '.png')}}"
    role="tabpanel"
    aria-labelledby="ex1-tab-{{Str::before($chain['logo'], '.png')}}"
  >  
  <div class="row justify-content-md-center">
            
            <div><h2>{{$chain['name']}}</h2></div>
            <ul class="list-group w-50 mx-auto">
             @foreach($chain['basket'] as $prod )
             <li class="list-group-item" style="background: #afb9c7; text-align: center;">
                <div class="row">
                <div class="col-sm-4">
            <img src="{{$basket_data['base_url']}}{{$prod['IMAGE']}}" class="img-thumbnail" width="100px">
        </div>
        <div class="col-sm-8">
            <ul class="list-group" style="background: #dee9f3;">
                <li class="prod-list" style="font-weight: bold;">{{$prod['NAME']}}</li>
                <li class="prod-list" style="font-weight: bold;">Τιμή: {{$prod['PRICE']}} €</li>
                <li class="prod-list"style="font-weight: bold;">Τιμή/{{$prod['UNIT']}}: {{$prod['PRICE_NORMALIZED']}} €</li>
            </ul>
        </div>
    </div>
           </li>        
             @endforeach
         </ul>
            
    </div> 

</div>
@endif
@endforeach
</div></div>
@endsection