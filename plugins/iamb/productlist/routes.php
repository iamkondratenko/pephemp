<?php

  use Illuminate\Http\Request;
  use Illuminate\Http\Response;
  use iamb\productlist\models\ProductList;
  use iamb\orders\models\Orders;

  Route::match(['get', 'post'], '/api/order/', function(Request $request){


    $content = $request->getContent();
    $res = json_decode($content);

    $products = ProductList::all();
    $orders = Orders::all();

    $recivedBasketItem = $res->basket;

    $total = 0;

    foreach ($products as $key => $productItem) {
      foreach ($recivedBasketItem as $key => $basketItems) {
        $productId = $basketItems->product_id;
        $productQuantity = $basketItems->quantity;

        if ($productItem->id == $productId) {
          $total = ($total + $productItem->price) * $productQuantity;
        };
      }
    }

    Orders::insert(array(
      'first_name' => $res->first_name,
      'last_name' => $res->last_name,
      'email' => $res->email,
      'phone'   => $res->phone,
      'city'   => $res->city,
      'type_of_delivery'   => $res->type_of_delivery,
      'pickpoint'    => $res->pickpoint,
      'order_basket'   => json_encode($recivedBasketItem),
      'total_price'   => $total,
    ));


  class OrderResult {
    var $totalForPay;
  }

  $object = new OrderResult;
  $object->totalForPay = $total;



  return response($orders)
        ->header( 'Access-Control-Allow-Origin', '*' );
  ;


  });


?>
