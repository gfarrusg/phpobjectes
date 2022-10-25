<?php
    
    class PokerDice{
        
        private $number;
        private $nameFace;
        private $totalThrow;
        
        public function throw(){
            $this->number=(rand(1, 6));
         
        }
        
        public function shapeName(){
  
            if ($this -> number == '1'){
                $this -> nameFace = 'A';
            } else if ($this -> number == '2'){
                $this -> nameFace = 'K';
            } else if ($this -> number == '3'){
                $this -> nameFace = 'Q';
            } else if ($this -> number == '4'){
                $this -> nameFace = 'J';
            } else if ($this -> number == '5'){
                $this -> nameFace = '8';
            } else{
                $this -> nameFace = '7';
            }
            
            echo 'Roll result ' .$this -> nameFace;
            $this -> totalThrow = $this -> totalThrow +1;
           
        }
       
           public function getTotalThrows(){
           
            echo 'Total throws: ' .$this->totalThrow;
         
            }
    
    }
    
    echo 'dice 1';
    echo '<br>';
    $roll = new PokerDice();
    $roll -> throw();
    $roll -> shapeName();
    
    echo '<br>';
    echo 'dice 2';
    echo '<br>';
    $roll -> throw();
    $roll -> shapeName();
    
    echo '<br>';
    echo 'dice 3';
    echo '<br>';
    $roll -> throw();
    $roll -> shapeName();
    
    echo '<br>';
    echo 'dice 4';
    echo '<br>';
    $roll -> throw();
    $roll -> shapeName();
    
    echo '<br>';
    echo 'dice 5';
    echo '<br>';
    $roll -> throw();
    $roll -> shapeName();
    
    echo '<br>';
    $roll -> getTotalThrows();
   
?>


