<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo parentNode</title>
    </head>
    <body>     
        <h3>Exemplo de uso do parentNode</h3> <!-- Acesso a um elemento PAI -->
        
        <div id="linux">
            <div class="ubuntu">
                Ubuntu
                <div class="elementaryos">Elementary OS</div>
            </div>
            <div class="debian">Debian</div>
        </div>
        
        
        <script>
            console.log(
                document.querySelector(".elementaryos").parentNode // Retornar o elemento PAI
            
            );
           
           console.log(
                document.querySelector(".elementaryos").parentNode.parentNode // Retornar o elemento PAI do ubuntu
            
            );
        
        </script>
         
        
         
        
    </body>
</html>


