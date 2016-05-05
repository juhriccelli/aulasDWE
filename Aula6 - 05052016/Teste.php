<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teste
 *
 * @author julio
 */
class Teste {
    //put your code here
    // atributos
    public $atributo1;
    private $atributo2;
    
    //metodos
    function __construct($attr1, $attr2) {
        $this->atributo1 = $attr1;
        $this->atributo2 = $attr2;
    }
            
    function get_attr1 () {
        echo $this->atributo1 . "</br>";
    }
    
    function get_attr2 () {
        echo $this->atributo2 . "</br>";
    }
    
    function set_attr1 ($atributo) {
        $this->atributo1 = $atributo;
    }
    
    function set_attr2 ($attr2) {
        $this->atributo2 = $attr2;
    }
    
    function result () {
        echo $this->atributo1 * $this->atributo2 . "</br>";
    }
}


