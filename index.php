<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo JSON con PHP y Jquery</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $preguntas = array();
            $preguntas[0][0]='uno';
            $preguntas[0][1]='dos';
            $preguntas[0][2]='tres';
            $preguntas[1][0]='cuatro';
            $preguntas[1][1]='cinco';
            $preguntas[1][2]='seis';
            echo '<br>Este es el array en PHP: <br>';
            print_r($preguntas);
            echo '<br>';
            echo '<br>Abre la consola de Chrome para ver el contenido del array<br>
                <div > 
                 <button class="btn btn-primary " onclick="muestraArrayEnJavascript();">Muestra Array En Javascript</button>
                 <br>
                 <p id="parrafo" ></p>
                </div>';
        ?>
        
        
        <script>
        function  muestraArrayEnJavascript(){ 
           var arraySinJSON = <?php echo json_encode($preguntas) ?>;
           
           console.log("el array SIN JSON parser: ", arraySinJSON);

           $('#parrafo').text(arraySinJSON[0][0]);
           
           var arrayConJSON = JSON.parse('<?php echo json_encode($preguntas) ?>');
           console.log("el array CON JSON parser: ", arrayConJSON);
           
           var arrayConvertidoEnTexto = ""+<?php echo json_encode($preguntas) ?>;
           
           console.log("el array convertido a String: ", arrayConvertidoEnTexto);
        }   
            
        $(document).ready(function(){

        });  
        
        </script>
    </body>
</html>
