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
           var numero = 9.658;
           var nome = "Danilo";
           nome = "Gilberto"; // alterando o valor da variavel - escopo global
           console.log(nome);
           var txt = "Pegou fogo \"na\" caixa d'agua"; //usar aspas duplas/e ou barra invertidade para reconhecer apostrofo.
           var txt2 = "Pegou fogo \\ na caixa d'agua"; //usar barra invertida devera ser usada duas para aparecer

           function teste(){
              nome = "Robson"; 
           }
           teste(); //executar funcao
          console.log(numero.toFixed(2)); // exibir numero apenas com 2 casas decimais
          console.log(txt);
          console.log(txt2.length);
          console.log(txt2.indexOf('fogo')); //a string inicia no indice 6
          console.log(txt2.search('fogo')); //igual indexOf porem aceita expressao regular
          console.log(nome);
          console.log(nome2);
        </script>
         
        
         
        
    </body>
</html>




