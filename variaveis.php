<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de Variaveis</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Variaveis </h3>
        
        <div id="linux">
            <ul>
                <li>Escopo Global</li>
                <li>Escopo Local</li>
                <li>Constantes</li>
            </ul>
        </div>
        
        
        <script>
            
           var  nomeVariavel; //sempre criar variavel com um nome que de para entender, a primeira letra minuscula
           const nome2 = "Tiago"; //Constante
           var nome = "Danilo";
           nome = "Gilberto"; // alterando o valor da variavel - escopo global
           console.log(nome);
           
           
           function teste(){
              nome = "Robson"; 
           }
           teste(); //executar funcao
          console.log(nome);
          console.log(nome2);
        </script>
         
        
         
        
    </body>
</html>




