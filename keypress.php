<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo KeyPress</title>
    </head>
    <body>     
        <h3>Exemplo de uso do KeyPress</h3>
        <input type="text" id="text">
        <div id="result" style="display: none">É Enter

        </div>


        <script>
            var text = document.getElementById("text");
            var result = document.getElementById("result");
            text.addEventListener("keypress",function(evento){
                if(evento.keyCode == 13){
                    result.style.display = "block"; //acessa o css do result
                }
                
            })
        </script>




    </body>
</html>




