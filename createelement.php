<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo createElement</title>
    </head>
    <body>     
        <h3>Exemplo de uso do createElement</h3>
        <script>
            console.log(
                     document.createElement("div") //Cria uma div
                 
                   );
         </script>
         
         <script>
           var img = document.createElement("img");
           img.src = "http://lorempixel.com/400/200";
           var p = document.createElement("p");
           p.innerHTML = "ola tudo bem?"
              console.log(
                  img,p
                 
                   );

         </script>
         
        
    </body>
</html>


