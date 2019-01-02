<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Change</title>
    </head>
    <body>     
        <h3>Exemplo de uso do Change</h3>
        
        <select id="linguagens">
            <option value="1">php</option>
            <option value="2">javascript</option>
            <option value="3">java</option>
            <option value="4">c#</option>
        </select>
        
        
        <script>
            var linguagens = document.getElementById("linguagens");
            linguagens.addEventListener("change",function(){
                var options = this.options;
                var itemAtual = this.selectedIndex;
                alert(options[itemAtual].text);
            });
        </script>
        
    </body>
</html>




