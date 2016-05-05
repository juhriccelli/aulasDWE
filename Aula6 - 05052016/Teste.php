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
    var $atributo1;
    var $atributo2;
    
    //metodos
    function get_attr1 () {
        echo "Atributo 1 " . $this->atributo1 ."</br>";
    }
    
    function set_attr1 ($atributo) {
        $this->atributo1 = $atributo;
    }
}


$teste = new Teste();
$teste->atributo1="IFSP";
$teste->get_attr1();


$teste->set_attr1(hortolandia);
$teste->get_attr1();