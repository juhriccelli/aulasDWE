<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <?php require_once 'Teste.php'; ?>
        <meta charset="UTF-8">
        <title>Teste Netbeans</title>
        <link href="css/teste.css" type="text/css" 
              rel="stylesheet" />
        <script type="text/javascript" 
                src="js/script.js"> </script>
    </head>
    <body>
        <button onclick="sayHello('world')">Click Me</button>
        <?php
        // put your code here
        echo "DWE" . "<br />";
        
        $atributo1 = 2;
        $atributo2 = 3;
        
        $teste = new Teste($atributo1, $atributo2);
        $teste->get_attr1();
        $teste->get_attr2();
        $teste->result();
                
        $teste->set_attr1(hortolandia);
        $teste->get_attr1();
        
        $teste->set_attr2(hortolandia2);
        $teste->get_attr2();
        
        ?>
        
        
        
    </body>
</html>
