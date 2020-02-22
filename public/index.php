<?php

require_once '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();

// $sayHello = new SayHello();
// echo $sayHello->world();
echo SayHello::world();
