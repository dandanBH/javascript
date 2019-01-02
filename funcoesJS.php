<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Funções CURSO JS</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Funções CURSO JS </h3>
        
        <div id="funcao">
          
        </div>
        
        
        <script>
        //passa funcao argumento para parametro
        // exemplo 1
        function somar(a,b) {
            return a + b;

        }
        function subtrair(a,b) {
            return a - b;
            
        }


        
        function calculadora(fn,v1,v2) {
            return fn(v1,v2);
            
        }
//Hoisting ou icamento : eleva as declarações das variaveis 
//ESCOPO global e local
var pessoa = 'Maria'; 
function empresa(){
    var funcionario = 'Pedro';
    funcionario2 = 'Samuel';
}

//console.log(funcionario2);

empresa();


//aninhamento de funcoes e escopo

var produto = 'Produto A';

function orcamento(){
    var formaPagamento = 'dinheiro';
    var qte = 3;
    var preco = 20;
    var total = qte*preco;
    pedido();
    function pedido(){
        var numeroPedido = 2345;
        var entrega = true;
        var taxaEntrega = 2;
        totalGeral =  entrega == true? total + taxaEntrega: total;

        notafiscal();
        function notafiscal(){
            var numeroNFe = 987298;
            console.log('>>>>>Nota',numeroNFe);
            console.log('>>>>>Produto',produto);
            console.log('>>>>>Qte',qte);
            console.log('>>>>>Preco',preco);
            console.log('>>>>>Total',total);
            
            entrega == true ? console.log('>>>>taxa entrega: ',preco): "";
            console.log(">>>>Total Geral: ",totalGeral);
        
        }

    }
}
orcamento();

//IIFE immediately-invoked function expression( expressao de funcao invocada imediatamente)
//faz uso de funcao anonima

//CLOSURE é um escopo proprio para funcao
//exemplo 
var counter = 0;

// Function to increment counter
function add() {
  counter += 1;
}

// Call add() 3 times
add();
add();
add();


document.getElementById("funcao").innerHTML = "The counter is: " + counter;


//CALLBACK : funcao passada como parametro para outra funcao
function mostrarCliente(nome){
    console.log('Cliente ',nome);
}

function realizarVenda(callback){
    callback("Pedro");
    console.log('1 - Item A');
    console.log('2 - Item B');
    console.log('3 - Item C');
    console.log('Total X');
}

console.log(realizarVenda(mostrarCliente));

//exemplo 2 
function contador(){
    var num = 1000;
    for(var i = 0; i< num;i++){
        console.log(i);
    }
}

function iniciar(callback){
    console.log("inicio");
    callback();
    console.log("termino");
}

iniciar(contador);

//exemplo 3 
function propaganda(timeout){
    setTimeout(() => {
        console.log(">>>>>>Propaganda");
    }, timeout);
}

function rodar(callback){
    console.log("inicio");
    callback(3000);
    console.log("App Rodando>>>>>>>>");
}

rodar(propaganda);


//FUNCAO CONTRUTORA
//eh um funcao que trabalha junto com o operador new com o objetivo de servir como um tipo de classe  para criar
// instanciar objetos personalizados no js com propriedades e metodos especificos
//exemplo de construtores Object,function, array, number

//exemplo 

function Pessoa(){
    this.nome;
    this.cpf;
    this.getNomeCpf = function(){
        return "Nome: "+ this.nome + " - CPF:  "+ this.cpf;
    }
}

var objPessoa = new Pessoa();
objPessoa.nome= "Suzi";
objPessoa.cpf = "6786544689877677";

console.log(objPessoa.getNomeCpf());

//Prototipo js - prototype


</script>
    

         
        
    </body>
</html>




