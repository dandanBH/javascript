<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo querySelector</title>
    </head>
    <body>     
        <h3>Exemplo de uso do querySelector</h3>
        <!--querySelector : simplicação do getelementbyid, getelementsbyclassname e getelementbytagname -->
        
        <div id="teste1">1</div>
        <div class="teste2">2</div>
        <p class="teste3">teste3</p>
        
        <script>
            console.log(
                     document.querySelector("#teste1") //Acessa os id teste1
                 
                   );
         
         console.log(
                     document.querySelector(".teste2") //Acessa a classe teste2
                 
                   );
           
            console.log(
                     document.querySelector("p.teste3") //Acessa a classe do paragrafo
                 
                   );
        </script>
        
    </body>
</html>


