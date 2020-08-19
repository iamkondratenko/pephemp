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


    // $liqpay = new LiqPay('sandbox_i41249939473', 'sandbox_dszQGAoDyE7w1GVyHntqjCwtvKJF9nNHWpbPnOjk');
    //   $html = $liqpay->cnb_form(array(
    //   'action'         => 'pay',
    //   'amount'         => '1',
    //   'currency'       => 'UAH',
    //   'description'    => 'description text',
    //   'order_id'       => 'order_id_4',
    //   'version'        => '3'
    // ));




  class OrderResult {
    var $totalForPay;
  }

  $object = new OrderResult;
  $object->totalForPay = $total;


  print_r ($liqpay);

  // return response($total)
  //       ->header( 'Access-Control-Allow-Origin', '*' );
  // ;


  });


?>
