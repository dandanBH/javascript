<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo getElementByClass</title>
    </head>
    <body>     
        <h3>Exemplo de uso do getElementsByClass</h3>
        <!--Uso de class para manipular o getElementsByClassName -->
        
        <div class="time-pequeno">Corinthians</div> 
        <div class="time-pequeno">Cruzeiro</div> 
        <div class="time-grande">São Paulo</div>
        <div class="time-grande">Atletico Mineiro</div>
        
        <script>
            console.log(
                     document.getElementsByClassName("time-pequeno")[1] //Exibi o segundo elemento da class time-pequeno
                   );
        </script>
        
    </body>
</html>


