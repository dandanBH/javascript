<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo removeChild</title>
    </head>
    <body>     
        <h3>Exemplo de uso do removeChild</h3> <!-- remove um elemento que esta   dentro do outro -->
        
        <div id="nissan">
            
        </div>
        
        
        <script>
            var versa = document.createElement("p");
            versa.innerHTML = 'Versa'; 
            document.getElementById("nissan").appendChild(versa); // acessar a div id nissan
            
            var fusca = document.createElement("p");
            fusca.innerHTML = 'Fusca'; 
            document.getElementById("nissan").appendChild(fusca); // acessar a div id nissan
            
            document.getElementById("nissan").removeChild(versa);
         </script>
         
        
         
        
    </body>
</html>


