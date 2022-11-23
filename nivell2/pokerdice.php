<?php 

class PokerDice {
    
    protected static $diceFace = array("As", "K", "Q", "J", 7 ,8);
    protected static $counter = 0;
    protected $throw;
    
    public function throw(){ 
        
        $this->throw = array_rand(static::$diceFace , 1) ;
        PokerDice::$counter += 1;
        return $this->throw;    
      }
      
      public function shapeName(){
        
        echo static::$diceFace[$this->throw] . "</br>"; 
    }
    
    public function getTotal(){
        
      echo "You've rolled the dice ". self::$counter." times </br>";
    }

}


echo "It's your turn to roll the dice <br>";

function instantiate(){
  
  for ($i = 0; $i < 5; $i++){
    $poker[$i] = new PokerDice;
    $poker[$i]-> throw();
    $poker[$i]-> shapeName();

  }
  
  if($poker[4]){
    $poker[4]-> getTotal();
  }

}

instantiate();
  
?>
