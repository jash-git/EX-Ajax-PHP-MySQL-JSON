<?php
$jsonString = '
{                                           
  "orderID": 12345,                         
  "shopperName": "John Smith",              
  "shopperEmail": "johnsmith@example.com",  
  "contents": [                             
    {                                       
      "productID": 34,                      
      "productName": "SuperWidget",         
      "quantity": 1                        
    },                                      
    {                                       
      "productID": 56,                      
      "productName": "WonderWidget",        
      "quantity": 3                         
    }                                       
  ],                                        
  "orderCompleted": true                    
}                                           
';
 
$cart = json_decode( $jsonString );
echo $cart->shopperEmail . "<br>";
echo $cart->contents[1]->productName . "<br>";
?>