<?php

it('should add two numbers')->test(function () {
    $result = add(2, 3);
    expect($result)->toBe(5);
});

// Sua função para teste
function add($a, $b)
{
    return $a + $b;
};