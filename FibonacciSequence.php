<?php
// Class Description: to generate the Fibonacci Sequence
// Author: Rana Albedaiwi
// Date : 6/20/2024

class FibonacciSequence
{
    private $length;

    //Constructor to initialize the given length
    public function __construct(int $len)
    {
        $this->length = $len;
    }

    //Setting the length of the fibonacci sequence
    public function setLength(int $len)
    {
        $this->length = $len;
    }

    //Generate a Fibonacci sequence of the specified length.
    private function iterFib(): array
    {
        if ($this->length <= 0) 
        {
            return [];
        }
        
        if ($this->length == 1) 
        {
            return [0];
        }
        
        $sequence = [0, 1];
        
        for ($i = 2; $i < $this->length; $i++) 
        {
            $next = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $next;
        }
        
        return $sequence;
    
    }

    //Printing fibonacci sequence
    public function show()
    {
        $arrayString = implode(', ', $this->iterFib());
        echo "The fibonacci sequence of length $this->length is " . $arrayString ."\n";
    }

}





?>