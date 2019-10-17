<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use HelloWorld\SayHello;
use HelloWorld\SayBye;
use HelloWorld\SayGoodMorning;
use HelloWorld\SayGoodNight;

echo SayHello::world();
echo SayBye::world();
echo SayGoodNight::world();
echo SayGoodMorning::world();
