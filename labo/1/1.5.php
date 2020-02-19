<?php
$array = array(
    "Maya" => "bij",
    "Mickey" => "muis",
    "Bugs" => "konijn",
    "Donald" => "eend",
    "Felix" => "kat",
    "Minnie" => "muis",
    "Sylvester" => "Stalone",
    "Winnie" => "wie wel?",
    "Tweety"  => "vogel",
    "Simba"  => "leeuw"
);


echo '<br>';

// asort($array); //sorteer op value, alfabetisch => S staat bovenaan want grote letter t.o.v. kleine letter
// arsort($array); //zelfde maar reverse

ksort($array); //sorteer op key
// krsort($array);//reverse order

echo '<table style="border: solid";><tr><th>Key</th><th>Value</th></tr>';

foreach ($array as $key => $value) {
    echo '<tr>';
    echo '<td>' . $key . '</td>';
    echo '<td>' . $value . '</td>';
    echo '</tr>';
}

echo '</table>';
