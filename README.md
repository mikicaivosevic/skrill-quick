#Skrill Quick Checkout Integration

You can use this library to generate SESSION ID from Skrill, 
which is recommended method for connecting to Quick Checkout.

[SKrill Quick Checkout Guide.pdf](https://www.skrill.com/fileadmin/content/pdf/Skrill_Quick_Checkout_Guide.pdf)


##Usage
```php
<?php
$request = new \Skrill\Quick\SkrillRequest();
$request->pay_to_email = 'mikica.ivosevic@gmail.com';
$request->amount = '100';
$request->currency = 'RSD';
$request->language = 'RS';
$request->prepare_only = '1';

$client = new \Skrill\Quick\SkrillClient($request);
$client->getRedirectUrl(); //return redirect url
```