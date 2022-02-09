<?php
$vat = 15;
$actualprice = 100;
$vatamount = ($actualprice / 100) * $vat;
$totalPrice = $actualprice + $vatamount;
print "Total price is " . ($totalPrice);
?> 