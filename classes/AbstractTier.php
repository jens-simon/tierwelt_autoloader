<?php 

abstract class AbstractTier {

    // Alle Attribute müssen in diese Klasse,
    // die für alle Kinder vorhanden sind
    public $alter;

    public function zeigeMeinenSpeicher(){
        var_dump($this);
        // zeigt das selbe Objekt an, wie 
        // var_dump($objektname) in der index.php!
    }
}