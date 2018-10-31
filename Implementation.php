<?php

include('Stripegateway.php');
$myStripe = new Stripegateway();

\Stripe\Stripe::setApiKey("sk_test_dIN5XzviGvZEDKE0GEmncfEi");

\Stripe\Product::create([
  "name" => 'T-shirt',
  "type" => "good",
  "description" => "Comfortable cotton t-shirt",
  "attributes" => ["size", "gender"]
  
\Stripe\Stripe::setApiKey("sk_test_dIN5XzviGvZEDKE0GEmncfEi");

\Stripe\Product::create([
  "name" => 'Monthly membership base fee',
  "type" => "service",
]);

class create_product{
	
  "id": "prod_DsvHA0Gl1FVLLe",
  "object": "product",
  "active": true,
  "attributes": [
    "size",
    "gender"
  ],
  "caption": null,
  "created": 1540952872,
  "deactivate_on": [

  ],
  "description": "Comfortable cotton t-shirt",
  "images": [

  ],
  "livemode": false,
  "metadata": {
  },
  "name": "T-shirt",
  "package_dimensions": null,
  "shippable": true,
  "type": "good",
  "updated": 1540952872,
  "url": null
}