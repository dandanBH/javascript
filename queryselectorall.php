<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo querySelectorAll</title>
    </head>
    <body>     
        <h3>Exemplo de uso do querySelectorAll</h3>
        <!--querySelectorAll : acessa todos os elementos (arrays) diferente do queryselector -->
        
    <div class="teste">1</div>
        <div class="teste">2</div>
        <div class="teste">3</div>

        <div id="pai">
            <div class="filho">1</div>
            <div class="filho">2</div>
            <div class="filho">3</div>
        </div>

        <div id="paizao">
            <div class="filho">alo</div>
            <div class="filho">oi</div>
            <div class="filho">ola</div>
        </div>

        <p>oi</p>
        <p>olá</p>


        <script>
            console.log(
                    document.querySelectorAll(".teste") //Acessa a classe teste formando um nodelist

                    );

            /*Acessar todos valores da classe filho do id pai*/
            console.log(
                    //pegar o id pai com o getelementbyid
                    document.getElementById("pai").querySelectorAll(".filho")

                    );

            console.log(
                    //pegar o id pai com o getelementbyid
                    document.getElementById("paizao").querySelectorAll(".filho")[2].innerHTML

                    );
    

        </script>

    </body>
</html>


