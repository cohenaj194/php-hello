<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "class 630";
    
    $greeting = "Hello {$name}!";
    echo $greeting;
 
    return [
        'body' => $greeting,
    ];
}
