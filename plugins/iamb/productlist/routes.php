<?php

  use Illuminate\Http\Request;
  use iamb\productlist\models\ProductList;

  Route::match(['get', 'post'], '/api/order/', function(Request $request){


    $content = $request->getContent();
    $res = json_decode($content);

    $products = ProductList::all();

    $recivedBasketItem = $res->basket;

    $total = 0;

    foreach ($products as $key => $productItem) {
      foreach ($recivedBasketItem as $key => $basketItems) {
        $productId = $basketItems->id;
        $productQuantity = $basketItems->quantity;

        if ($productItem->id == $productId) {
          $total = ($total + $productItem->price) * $productQuantity;
        };
      }
    }


  class OrderResult {
    var $totalOrder;
  }

  $object = new OrderResult;
  $object->totalOrder = $total;

  return json_encode($object);


  });


?>
