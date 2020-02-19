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


// var_dump($array);

echo '<table style="border: solid";><tr><th>Key</th><th>Value</th></tr>';

foreach ($array as $key => $value) {
    echo '<tr>';
    echo '<td>' . $key . '</td>';
    echo '<td>' . $value . '</td>';
    echo '</tr>';
}

echo '</table>';