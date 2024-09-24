<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 Praesentium dolorem molestias quod maxime consequuntur, perspiciatis iste,
 eligendi, necessitatibus blanditiis mollitia cupiditate et porro laudantium. 
 Ullam autem accusantium dolor hic facere!
 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 Praesentium dolorem molestias quod maxime consequuntur, perspiciatis iste,
 eligendi, necessitatibus blanditiis mollitia cupiditate et porro laudantium.
 Ullam autem accusantium dolor hic facere!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";