<?php 
class Katze extends AbstractTier {
    use Streichelbar;

    //public $alter;
    public function sageMiau(){
        echo "Die Katze sagt: Miau<br>";
    }
   
   
}