<?php
    
     class PokerDice{
        
        protected $number;
        protected $nameFace;
        protected $totalThrow;
        
        public function throw(){
           
            $this -> number=(rand(1, 6)); 
         
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
       
         
       public function getTotalThrows($dice1, $dice2, $dice3, $dice4, $dice5) {
            printf("The result of the throw of the five dice is: " . "\n");
            print_r($dice1->shapeName($dice1->throw()));
            print_r($dice2->shapeName($dice2->throw()));
            print_r($dice3->shapeName($dice3->throw()));
            print_r($dice4->shapeName($dice4->throw()));
            print_r($dice5->shapeName($dice5->throw()));
            print_r("\n");
    
    }

}

    
     $dice1 = new PokerDice;
     $dice2 = new PokerDice;
     $dice3 = new PokerDice;
     $dice4 = new PokerDice;
     $dice5 = new PokerDice;

              
    

      
    
?>