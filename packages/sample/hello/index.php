<?php
 
function main(array $args) : array
{
    // $name = $args["name"] ?? "class 630";
    
    // $greeting = "Hello {$name}!";
    // echo $greeting;

    // if statements
    $num_oranges = 26;
    $num_bananas = 31;
    $body = "";
    if(($num_oranges > 25) && ($num_bananas > 30)){
      $greeting = "25% Discount<br>";
    } elseif(($num_oranges > 30) || ($num_bananas > 35)){
      $greeting = "15% Discount<br>";
    } elseif(!(($num_oranges < 5)) || (!($num_bananas < 5))){
      $greeting = "5% Discount<br>";
    } else {
      $greeting = "No Discount<br>";
    }

    $i = 0;
    $loop_msg = "";
    while($i < 10){
        ++$i;
    }
 
    $body = $greeting;
    $body = $body . 'total: ' . ($num_oranges + $num_bananas) . "<br>";
    $body = $body . 'i from a loop up to 10: ' . $i . "<br>";
    return [
        'body' => $body,
    ];

}
