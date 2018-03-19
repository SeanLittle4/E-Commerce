<?php
/**
 * Copyright (c) 2014-2016 BitPay
 */
require __DIR__ . '/../vendor/autoload.php';
$private = new \Bitpay\PrivateKey();
//if you've got a hex-encoded private key string, you can use it to create a private key
$private->setHex('662be90968bc659873d723374213fa5bf7a30c24f0f0713aa798eb7daa7230fc');
$public = new \Bitpay\PublicKey();
$public->generate($private);
$sin = $public->getSin();
printf("Public Key:  %s\n", $public);
printf("Private Key: %s\n", $private);
printf("Sin Key:     %s\n\n", $sin);
$keypair = array($private->getHex(), $public->getHex());
printf("PEM keypair:  %s\n", $private->pemEncode($keypair));
