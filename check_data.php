<?php

require 'vendor/autoload.php';

$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\Computer;

$count = Computer::count();
echo "Total computers in database: " . $count . PHP_EOL;

if ($count > 0) {
    echo "\nFirst 5 computers:" . PHP_EOL;
    $computers = Computer::take(5)->get();
    foreach ($computers as $computer) {
        echo "ID: {$computer->id_computer}, Brand: {$computer->computer_brand}, Model: {$computer->computer_model}, Price: \${$computer->computer_price}, RAM: {$computer->computer_ram_size}GB, Laptop: " . ($computer->computer_is_laptop ? 'Yes' : 'No') . PHP_EOL;
    }
}