<?php

  use Illuminate\Http\Request;
  use Illuminate\Http\Response;
  use iamb\productlist\models\ProductList;
  // include 'LiqPay.php';
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
          $total = $total + ($productItem->price * $productQuantity);
        };
      }
    }

    $queryState = Orders::insertGetId(array(
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

  $public_liqpay = 'sandbox_i41249939473';
  $private_liqpay = 'sandbox_dszQGAoDyE7w1GVyHntqjCwtvKJF9nNHWpbPnOjk';
  $json_liqpay = base64_encode('{"public_key":"sandbox_i41249939473","version":"3","action":"pay","amount":"' . $total . '","currency":"UAH","description": "Оплата заказа №'.$queryState.'","order_id":'.$queryState.'}');



$sign_string = $private_liqpay.$json_liqpay.$private_liqpay;

$sign_result = base64_encode ( sha1 ( $sign_string, true ));

return response(strval('/thankyoupage/?'.'data='.$json_liqpay.'&signature='.$sign_result))
  ->header( 'Access-Control-Allow-Origin', '*' );
;



  // return response($total)
  //       ->header( 'Access-Control-Allow-Origin', '*' );
  // ;


  });


?>
