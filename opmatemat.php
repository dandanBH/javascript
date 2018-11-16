<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Operadores Matemáticos</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Operadores Matemáticos </h3>
        
        <div id="div">
            <ul>
                <li>Soma</li>
                <li>Subtração</li>
                <li>Multiplicação</li>
                <li>Divisão</li>
            </ul>
        </div>
        
        
        <script>
        /**
         * palavras reservadas
         * var, function,break,return,continue, 
         * 
         */
            var n1 = 2;
            var n2 = 4;
            var n3 = 26+20;
            
            var soma = n1+n2;
            var nome = "Silvio Mdeiros".concat("TESTE");
            var nome2 = 'Pedro;Ana;Maria;Carolina'
            console.log(soma);
            console.log(n3);
            console.log(nome.indexOf("e"));
            console.log(nome.replace("Mdeiros","Marcos"));
            console.log(nome2.split(";"));


            console.log(1 == '1')
            console.log(null == undefined)

           console.log(0||2)

           var gerarSerial = function(max){
               return Math.floor(Math.random()*max);
           }

           console.log(gerarSerial(10))

           //operador NEW
           var Pessoa = function (nome,idade){
               this.nome = nome;
               this.idade = idade;
           }
           var pedro = new Pessoa("Pedro",20);
           console.log(pedro);
           console.log(pedro instanceof Pessoa); // verifica se o objeto da classe pessoa
           console.log(pedro instanceof Date);
           console.log("nome" in pedro); // verificar se a propriedade nome existe no objeto pedro  
           delete pedro.nome 
           console.log(pedro);

           // +=, -=, *=,/= e %=
           
        //Ternario
        /**(expressao)?true:false */
           var idade = 22
         //  if (idade >=18) ? "Maior Idade": "Menor idade"

           console.log((idade >=18)? "Maior Idade": "Menor idade")

           
        </script>

         
        
         
        
    </body>
</html>




