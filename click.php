<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Click</title>
    </head>
    <body>     
        <h3>Exemplo de uso do Click</h3>
        
        <button id="btn">click</button>
        
        <script>
            var botao = document.getElementById('btn'); //pegando o botao
            botao.addEventListener('click',function(){
                alert('vc clicou')
            });
        </script>
         
        
         
        
    </body>
</html>




