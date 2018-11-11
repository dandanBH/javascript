<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Blur</title>
    </head>
    <body>     
        <h3>Exemplo de uso do Blur</h3>
        
        <input type="text" id="nome">
        <input type="text" id="sobrenome">
        
        <script>
            var nome = document.getElementById("nome");
            var sobrenome = document.getElementById("sobrenome");
            nome.addEventListener("blur",function(){
                console.log("deu blur")
                sobrenome.value = this.value;
            });
        </script>
         
        
         
        
    </body>
</html>




