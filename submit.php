<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Submit</title>
        <style>
            .error{
                border: 2px solid red;
            }
        </style>
    </head>
    <body>     
        <h3>Exemplo de uso do Submit</h3>
        
        <form action="#" method="post">
            <input type="text" name="name" value="Danilo">
            <input type="email" name="email" value="dannilocomp@gmail.com">
            <button type="submit">Enter</button>
        
        
        <script>
            var form = document.querySelector("form");
            form.addEventListener("submit",function(evento){
                evento.preventDefault(); // nao permite refresh
                for (var i = 0;i< this.elements.length; i++){
                    if(this.elements[i].value=""){
                        
                    }
                }
            })
        </script>
         
        
         
        
    </body>
</html>




