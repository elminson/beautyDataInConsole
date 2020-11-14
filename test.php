<?php

namespace Elminson\beautyDataInConsole;

require __DIR__ . '/vendor/autoload.php';

$gen = new beautyDataInConsole();
$data = ['key' => 'value'];
echo $gen->beautyPrint($data);
//     ->useSymbols()
//     ->useNumbers()
//     ->generate()
//     ->getPassword();
