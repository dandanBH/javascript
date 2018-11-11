<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo getElementById</title>
    </head>
    <body>     
        <h3>Exemplo de uso do getElementById</h3>
        <div id="time-pequeno">Curintia</div>
        <div id="time-grande">São Paulo</div>
        
        <script>
            document.getElementById("time-pequeno"); /*para visualizar eh necessario 
         * acessar pelo console opcao inspector no chrome*/
            console.log(
                     document.getElementById("time-pequeno") //exibe a div time-pequeno
                   );
           console.log(
                     //document.getElementById("time-pequeno")
                     document.getElementById("time-pequeno").innerHTML //exibe o valor da div - CURINTIA
                   );
        </script>
        
    </body>
</html>


