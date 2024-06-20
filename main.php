<?php
// Class Description: to present the Fibonacci Sequence
// Author: Rana Albedaiwi
// Date : 6/20/2024
/*
 Create a PHP function (Laravel way) that generates a Fibonacci sequence of a 
specified length. Explain whether you would use recursion or iteration for this task, and 
provide your implementation.

 I used the iterative approach to generate the Fibonacci sequence because iteration has better time complexity 
 and is less likely to produce errors compared to recursion. 
 Please note that the Laravel implementation is beyond my current skill level, but I would be more than happy 
 to learn it if I had more time.
*/


require_once 'FibonacciSequence.php'; 

// Create an instance of the FibonacciSequence class and specifying the initial length
$length=5;
$fibSeq= new FibonacciSequence($length);

//Printing the Fibonacci Sequence in length 5
$fibSeq->show();
//Setting the length to 10 and printing the Fibonacci Sequence 
$fibSeq->setLength(10);
$fibSeq->show();












?>