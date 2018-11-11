<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo KeyUP</title>
    </head>
    <body>     
        <h3>Exemplo de uso do KeyUP</h3>
        
        <input type="text" id="search">
        
        <div id="result">
           Nenhum Resultado
        </div>
        
        
        <script>
            var text = document.getElementById("search");
            var result = document.getElementById("result");
            text.addEventListener('keyup',function(){
              result.innerText = this.value;
            })
        </script>
         
        
         
        
    </body>
</html>




