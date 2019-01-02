<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo es 2015 </title>
    </head>
    <body>     
        <h3>Exemplo de uso do es 2015</h3>
        
        <div id="div">
          
        </div>
        
        
        <script>
            // Declarar variavel com let e const

            //escopo de bloco
            var escopoGlobal = 'escopoGlobal';
            function fn(){
                var escopoLocalFuncao = 'escopoLocalFuncao';
                escopoLocalFuncao2 = 'escopoLocalFuncao2'; //considera como global sendo uma ma pratica
                
            console.log(escopoLocalFuncao2);
            }
            
            fn();
            console.log(escopoGlobal);

            //const
            {
                const juros = 13;
                console.log('Juros ',juros);

            }
            const num = 86;
            console.log('num: ',num);
            //console.log('Juros ',juros); nao é permitido declarar fora do seu escopo

            //TDZ temporal dead zone - zona morta temporal
            // nao pode ser atribuido um valor a uma variavel antes de declarar


            //MAP - conjunto chave-valor tanto um quanto o outro pode ser qualquer tipo de dado
            //facilmente iteravel
            //map.prototype.set()
            //              size()
            //              get()
            //              delete()
            //              has()
            //              clear()
            //              forEach()
            //              entries()
            //              keys()
            //              values()

            var nomeString ='PEdro',
                numero = 25.3,
                booleano= true,
                arrayAlfabeto = ['a','b','c','d'];
                funcao = function(){console.log('minha function')},
                objeto = {produto: 'teste'},
                regExp = /teste/gi;
            
            const map = new Map();

            map.set('chave','valor');
            map.set(nomeString,numero);
            map.set(booleano,arrayAlfabeto);
            map.set(funcao,funcao);
            map.set(objeto,objeto);
            

            
            let entradas = map.entries();
            console.log('Entries ',entradas.next().values);

            let retornoMap = map.set(regExp, regExp);
            console.log('retornoMap: ','tipos: ' +Object.prototype.toString.call(retornoMap),retornoMap);
            retornoMap.set('123','teste');
            
            console.log('apos a insercao');
            console.log(retornoMap);
            console.log(map.size);

            let retornoDelete = map.delete(regExp);
            console.log('RetornoDElete ',retornoDelete);

            console.log("MAP FOREACH");
            map.forEach(function(valor,chave,map){
                console.log('valor ',valor, 'chave ',chave);
            });
            
            console.log('map.has(funcao) ',map.has(funcao)); //verifica se existe a funcao


            console.log('map.has(funcao) ',map.has('fernanda')); //verifica se existe a funcao
            
            map.set('fernanda','fernanda');
            console.log('map.has(funcao) ',map.has('fernanda')); //verifica se existe a funcao

            let chaves = map.keys();
            console.log('>>>>>key',typeof chaves, chaves);
            console.log('chaves.next() ', chaves.next());

            //WeakMap quase identico ao MAP - porem a chave deve ser somente objetos
            //weakMap.prototype.set()
            //                 .get()
            //                 .has()
            //                 .delete()
            
            const weakMap = new WeakMap(); 
            let objeto1 = {
                teste1: 'teste1'
            };
            let objeto2 = {
                teste2: 'teste2'
            };
            let objeto3 = {
                teste3: 'teste3'
            };
            let objeto4 = {
                teste4: 'teste4x'
            };

            weakMap.set(objeto1,'teste');

            console.log(weakMap);

            //SET
            //Estrutura de dados que permite armazenar valores unicos de qualquer tipo, desde os valores nao se repitam
            /*
                Set.prototype.add();
                             .clear();
                             .delete();
                             .entries();
                             .forEach();
                             .has();
                             .values();
             const set = new Set();
             */
            console.log('Uso do SET');
            const set = new Set([1,2,3]);
            console.log(set);

            set.add(23);
            set.add('Prof. Madson');
            set.add(true);
            set.add({teste:'teste'});
            set.add(['a']);
            set.add((new Map().set('teste','teste')));

            console.log('set.add(false)',set.add(false));
            console.log(set.size);

            console.log('forEach');
            set.forEach(function(valor,chave,set){
                console.log('Chave: ',chave,' Valor: ',valor);
            });

            console.log('For Of');
            for(let [chave,valor] of set.entries()){
                console.log('Chave: ',chave,' Valor: ',valor);
            }

            console.log('---------Mostrando os valores-----------');
            console.log(set.values());
            
            //WeakSet permite que voce armazene objetos mantidos fracamente 
            /*
                WeakSet.prototype.add();
                                 .delete();
                                 .has();            
             */

             const weakSet = new WeakSet();
             
             let objeto10 = {teste1: 'teste1'};
             let objeto20 = {teste2: 'teste2'};
             let objeto30 = {teste3: 'teste3'};
             let objeto40 = {teste4: 'teste4'};

             weakSet.add(objeto10);
             weakSet.add(objeto20);
             weakSet.add(objeto30);

            console.log(weakSet.has(objeto10));
            
            //OPERADOR SPREAD - Propagar estrutura de dados
            
            console.log('Operador Spread');
            //exemplo 1 - passando argumento para funcao
            function mostrarNumeros(a,b,c,d){
                console.log("Numeros ",a,b,c,d);
            }

            const arrayNumeros = [1,2,3,4,5,6,7,8,9];
            mostrarNumeros(...arrayNumeros); // o spread passa os argumentos de acordo com o numero de argumentos da funcao

            //exemplo 2 juntando elementos de um array
            let arrayLetras = ['a','b','c','d'];
            let arrayNum = [4,5,6,7,8];
            let arrayNum2 = [14,15,16,17,18];

            console.log("Array Spread Letras e numeros");
            let arraySpread = [...arrayLetras, ...arrayNum, ...arrayNum2];
            console.log(arraySpread);

            console.log("Array Spread Somente Numeros");
            let somenteNumeros = [1,2,3, ...arrayNum];
            console.log(somenteNumeros);

            somenteNumeros.push(...[19,20,21,22]);
            console.log("apos o PUSH ",somenteNumeros);

            //REST permite recupera um numero indefinido de argumentos passado na chamada de uma funcao
            //transformando-os em uma unico parametro recebido pela funcao, neste caso um array de valores
            console.log("REST PARAMETER");

            function mostrarNomeCompleto(){
                console.log('qtd Nome: ', arguments.length);
                let nomeCompleto = "";
                Array.prototype.forEach.call(arguments,function(valor){
                    nomeCompleto += " "+ valor;

                })
                console.log(nomeCompleto);
            }

            mostrarNomeCompleto('Francisco','Paulo','Silva');
            
            
            function mostrarNomeCompletoRest(...nomes){
                console.log('qtd Nome: ', nomes.length);
                let nomeCompleto = "";
                nomes.forEach.call(function(valor){
                    nomeCompleto += " "+ valor;

                })
                console.log(nomeCompleto);
            }

            mostrarNomeCompleto('Francisco','Paulo','Silva');


            //restparametros e spreed.
            function somarNumero(...operandos){ //nao sei quantos numeros seram somados, quantos parametros terao
                let retornoSoma = operandos.reduce(function(acumulador, valor, index, array){
                    return acumulador = acumulador + valor;

                });
                console.log("resultado soma = ",retornoSoma);
            } 

            let numeros = [2,8,4,7,3];
            somarNumero(...numeros);

            //DEFAULT PARAMETER, QUANDO O PARAMETRO NAO EH PASSADO
            console.log("Quando o parametro nao é definido");
            
            console.log("exemplo 1");
            function exibirMsgSaudacao(nome = 'Cliente'){
               
                let msg = "Ola " + nome + ",seja bem-vindo!";
                console.log(msg);
            }

            exibirMsgSaudacao("MARY");

            console.log("exemplo 2");
            function fn(nome ='cliente',sobrenome = nome){
                console.log("Ola " + nome + "!");
                console.log("Obrigada " + sobrenome + "!");
                
            }

            fn('Maria');
            fn('Renato','Russo');

            //TEMPLATE STRING
            console.log('template String');
            let texto = `teste
            com template string`;

            
            console.log(texto);
            let valores = `somas ${4 + 5}`
            console.log(valores);
            

            //TAGGED TEMPLATE STRING
            console.log('TAGGED TEMPLATE STRINGs');
           
            let nome = "Maria";
            let sobreNome = "Barbosa";
            console.log(`Ola ${nome} seu nome é ${sobreNome}`);

            //ARROWS FUNCTIONS; funcao anonima;this lexico
            console.log("ARROWS FUNCTIONS");  
            const somarArrow = (a,b)=> {
                return a+b;
            }

            console.log("Usando arrows function  ",somarArrow(10,20));

            const arrow = nome => nome.toUpperCase();
            console.log('Nome: ',arrow('Pedro'));
            
            //SHORTHAND PROPERTY - PROPRIEDADE ABREVIADA
            //SHORTHAND METHOD - METODO ABREVIADO
            // NAME COMPUTED PROPERTY/METHOD NOME DA PROPRIEDADES/METODOS COMPUTADAS


            console.log('SHORTHAND');
            let nomeshorthand = 'Maria', idadeshorthand = 37, cidadeshorthand = 'Sobral';

            let objNome = {nomeshorthand, idadeshorthand, cidadeshorthand};
            console.log(objNome);




        </script>
         
        
         
        
    </body>
</html>













