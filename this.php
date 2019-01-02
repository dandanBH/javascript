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
       //template string

       let textoTemplate = 
       `Texto exemplo
       quebra de linha`;
       console.log(textoTemplate);

       let expressao = "5 + 5 é igual a "+ (5 + 5) + " e 3 * 3 é igual a "+ (3 * 3) + ".";
       console.log(expressao);

       let placeholder = `5 + 5 é igual a ${5+5} e 3 * 3 é igual a ${3*3}.`;
       console.log("Placeholder ",placeholder);

        let Pessoa = {nome:'Paulo',idade: 27}
        let apresentacao = `Ola meu nome é ${Pessoa.nome} e tenho ${Pessoa.idade} anos.`;
        console.log(apresentacao);

        //THIS
        console.log("Uso do THIS");
        console.log('this == window',this==window);    

        function fn(){
            console.log(">>>>>this em escopo de funcao: ",this);
            console.log('this==window', this==window);
        
            function fnInterna(){
                console.log("this em escopo de funcao interna", this);
                console.log("this==window", this==window);
            }

            fnInterna();
        }

        fn();

        console.log('-------------THIS----------');
        var nome = 'paulo';
        function fnNome(){
            let nome = 'fernanda';
            console.log('this.nome global ',this.nome);
            console.log('nome local',nome);
            
        }

        fnNome();

        console.log('-------------ESCOPO THIS----------');
        let pessoaObjetoLiteral = {
            nome: 'JOAO',
            exibirThis: function(){
                console.log("this em escopo de objeto literal", this);
                console.log("this==window", this==window);
                console.log('this==pessoaObjetoLiteral', this==pessoaObjetoLiteral);
            }
        }

        pessoaObjetoLiteral.exibirThis();

        function Pessoa1(nome){
            this.nome = nome;
            this.exibirThis = function(){
                console.log(">>>> this em escopo objeto funcao construtora ", this);
                console.log("this==window", this==window);    
            }
        }


        var objPessoa = new Pessoa1('Maria'); // construtor
        objPessoa.exibirThis();

        //THIS COM EVENTOS
        let button = document.getElementById('cadastrar-boot');
        button.addEventListener("click", function(){
            console.log('meuClickThis é ',this);
        },false);



        </script>
         
        
         
        
    </body>
</html>




