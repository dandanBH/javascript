<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo getElementByTagName</title>
    </head>
    <body>     
        <h3>Exemplo de uso do getElementByTagName</h3>
        
        
        <br>
        <form></form>
        <button>Oi</button>
        
        <script>
            console.log(
                     document.getElementsByTagName("br") //Acessa o array da tag escrita
                 
                   );
            console.log(
               document.getElementsByTagName("button")[0].innerHTML //Acessa o array da tag escrita - acessa o valor do button
               // O innerHTML deve ser escrito dessa , nao permite que seja escrito de forma diferente
       );
        </script>
        
    </body>
</html>


