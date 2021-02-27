<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo "Hello I am Zura";
}
hello();
echo '<br>';
hello();
echo '<br>';
// Function with argument
function hello1($name)
{
    return "Hello I am $name";
}
echo hello1('Zura').'<br>';
echo hello1('Brad').'<br>';

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}
echo sum(4,5);
// Create function to sum all numbers using ...$nums
/*function sum1(...$nums)
{
    //echo '<pre>';
    //var_dump($nums);
    //echo '</pre>';

    $sum1 = 0;
    foreach($nums as $n){
        $sum1 += $n;
    }
    return $sum1;
}
echo sum1(1,2,3,4,5,6);
*/
// Arrow functions
function sum1(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum1(1,2,3,4,5,6);