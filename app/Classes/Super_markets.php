<?php

namespace App\Classes; // <- important
use Illuminate\Http\Request;
use Goutte\Client;
use Spatie\Browsershot\Browsershot;

class Super_markets
{
  public static function sk_prods(Request $request)
  {
      $query =  $request->input('search');
      $url = 'https://www.sklavenitis.gr/apotelesmata-anazitisis/?Query='.$query;
      $client = new Client();
      $sklavenitis = $client->request('GET', $url);
      $sk_products = $sklavenitis->filter('.product')->each(function ($node){
      return response()->json([
        'title' => $node->filter('h4 > a')->each(function ($title) {
      return $title->text();
        }),
        'image' => $node->filter('.product__figure img')->each(function ($image) {
      return $image->attr('src');
        }),
        'main_price' => $node->filter('.main-price')->each(function ($main_price) {
      return $main_price->text();
        }),
        'kil_price' => $node->filter('.priceKil')->each(function ($priceKil) {
      return $priceKil->text();
        }),
       ]);
    });
    return json_encode($sk_products);
  }
    public static function ab_prods(Request $request)
    {
      $query =  $request->input('search');
      $ab_products = new Browsershot();
      $ab_products->url('https://www.ab.gr/eshop/search?q='.$query)->noSandbox()->bodyHtml();
    return $ab_products;
  }

   public static function mkin_prods(Request $request)
    {
      $query =  $request->input('search');
      $url = 'https://www.market-in.gr/el-gr/ALL?Title='.$query;
      $client = new Client();
      $mkin = $client->request('GET', $url);
      $mkin_products = $mkin->filter('.product-col')->each(function ($node){
      return response()->json([
        'title' => $node->filter('.product-title')->each(function ($title) {
      return $title->text();
        }),
        'image' => $node->filter('.product-item img')->each(function ($image) {
      return $image->attr('src');
        }),
        'main_price' => $node->filter('.product-price')->each(function ($main_price) {
      return $main_price->text();
        }),
        'kil_price' => $node->filter('.kg-price-weight')->each(function ($priceKil) {
      return $priceKil->text();
        }),
       ]);
    });
    return json_encode($mkin_products);
  }

  public static function mymk_prods(Request $request)
    {
      $query =  $request->input('search');
      $url = 'https://www.mymarket.gr/search?query='.$query;
      $client = new Client();
      $mymk = $client->request('GET', $url);
      $mymk_products = $mymk->filter('.product--teaser.w-full')->each(function ($node){
      return response()->json([
        'title' => $node->filter('h3  > a')->each(function ($title) {
      return $title->text();
        }),
        'image' => $node->filter('.teaser-image-container img')->each(function ($image) {
      return $image->attr('src');
        }),
        'main_price' => $node->filter('.selling-unit-row')->each(function ($main_price) {
      return $main_price->text();
        }),
        'kil_price' => $node->filter('.measure-label-wrapper')->each(function ($priceKil) {
      return $priceKil->text();
        }),
       ]);
    });
    return json_encode($mymk_products);
  }

    public static function sk_test(Request $request)
    {
      $query =  $request->input('search');
      $url = 'https://www.mymarket.gr/search?query='.$query;
      $client = new Client();
      $ab = $client->request('GET', $url);
      $my_products = $ab->filter('.w-full.flex')->each(function ($node){
        return $node->text();
    });
    return $my_products;
  }
}

//$sk_products = $sklavenitis->filter('.product')->each(function ($node) {
 //     return response()->json([
  //  'name' => $node->filter('h4 > a')->each(function ($title) {
  //    return $title->text();
  //  }),
  //  'image' => $node->filter('.product__figure img')->each(function ($image) {
  //    return $image->attr('src');
 //     }),
    
  //  ]);}