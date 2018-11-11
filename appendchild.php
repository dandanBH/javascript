<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo appendChild</title>
    </head>
    <body>     
        <h3>Exemplo de uso do appendChild</h3> <!-- Insere um elemento dentro do outro -->
        
        <div id="nissan">
            
        </div>
        
        
        <script>
            var versa = document.createElement("p");
            versa.innerHTML = 'Versa'; 
            document.getElementById("nissan").appendChild(versa); // acessar a div id nissan
            
            var fusca = document.createElement("p");
            fusca.innerHTML = 'Fusca'; 
            document.getElementById("nissan").appendChild(fusca); // acessar a div id nissan
         </script>
         
        
         
        
    </body>
</html>


