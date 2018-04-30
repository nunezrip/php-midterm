<?php

/*
1: Lion bit my finger!

Part 1: Lion will bite your finger exactly 50% of the time. First, write a function isBitten() that returns TRUE with 50% probability, and FALSE otherwise. Hint: You may find the rand() function useful.
Part 2: Below the function, write code to generate a webpage that displays “Lion bit your finger!” or “Lion did not bite your finger!” using the isBitten() function.
*/

function isBitten() {
  $r = rand(0,1);
  if ($r === 0) {
    return True;
  } else {
    return False;
  }
}

 var_dump(isBitten());