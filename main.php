<?php
// Class Description: to present the Fibonacci Sequence
// Author: Rana Albedaiwi
// Date : 6/20/2024



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
