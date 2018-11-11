<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Funções</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Funções </h3>
        
        <div id="funcao">
          
        </div>
        
        
        <script>
        //Colocar encapsulamento na funcao para nao ocorre erro de função global
        // exemplo 1
        var counter = {
            value:0,
            add: function (){
                return ++this.value;
            }
        };
        console.log(counter.add());
        console.log(counter.add());

        // exemplo 2
        var createCounter = function(){
            var value=0;
            return {
                add: function(){
                    return ++value;
                }
            };
        };
        var counter = createCounter();
        console.log(counter.value);
        console.log(counter.value);
        console.log(counter.value);
        console.log(counter.value);
        console.log(counter.value);

        
        console.log(counter.add());
        console.log(counter.add());
        console.log(counter.add());
        console.log(counter.add());
        console.log(counter.add());
        console.log(counter.add());
        console.log(counter.add());

            function nomeFuncao(valor){
                return ++valor;//adicionar 1 a mais no valor digitado - executado no console
            }
            nomeFuncao();
            
            function calculaMedia(nota1,nota2,nota3){  //function declaration
                return (nota1+nota2+nota3)/3; //executado no console
            }
            
            var soma = function(a,b){
                return a+b;
            } //funcao anonima
            
       
          var getIdade = function(extra){
              return this.idade + extra;
          }
            
          var  pessoa ={
                nome: 'Danilo Souza',
                idade: 33,
                getIdade:getIdade,
                profissao: 'Analista',
                cidade: 'Belo Horizonte'
            };
            
          console.log(pessoa.getIdade.call(pessoa,12));
          console.log(pessoa.getIdade.apply(pessoa,[12]));
          console.log(pessoa.getIdade(12));


          function novapessoa(nome,idade,profissao,cidade){
              pessoa.nome = nome;
              pessoa.idade = idade;
              pessoa.profissao = profissao;
              pessoa.cidade = cidade;
           } // altera os valores dos atributos sem retornar valor, executado no console
            
          function novapessoaob(objetopessoa){
               pessoa = objetopessoa;
           } // passa-se um objeto como parametro, executado no console
           
         //  console.log(pessoa)
           
           
           function testeparametros(){
               console.log(arguments)
           }


           //FUNCOES CONSTRUTORAS VS. FUNCOES FABRICA

           //funcao fabrica
           var criarPessoa = function(nome, idade){
               return{
                   nome:nome,
                   idade:idade
               };
           };
           console.log(criarPessoa("Pedro",20))
           console.log(criarPessoa("Telos",23))

           // Funcao Construtora - tem por conversão iniciar com letra maiuscula
           var Pessoa = function (nome,idade){
               this.nome = nome;
               this.idade = idade; // o this se refere ao objeto criado new
           };
           console.log(new Pessoa("Pedro",20)) //Chamada com NEW
           console.log(new Pessoa("Telos",30))

        //CLOSURES
        var helloWorld = function(){
            var message = "Hello World"; //mantem a referencia
            return function (){
                return message;
            }
        }   
        var fnw = helloWorld();
        console.log(fnw());

        function init() {
        var name = "Mozilla";
        function displayName() {
         //   alert(name);
        }
        displayName();
        }
        init();
    //////////////////////////////////////

        </script>
         
        
         
        
    </body>
</html>




