<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo </title>
    </head>
    <body>     
        <h3>Exemplo de uso do ecmascript parte 2</h3>
        
        <div id="div">
          
        </div>
        
        
        <script>
            console.log("declaracao de metodos es6");
            objCalcES6 = {
                msg(){
                    console.log('Ola');
                },
                somar(a,b){
                    console.log('resultado', a + b);
                },
                *funcaoGeradora(i){
                    yield i +1;
                }
            }
            objCalcES6.msg();
            objCalcES6.somar(30,40);
            console.log(objCalcES6.funcaoGeradora(1).next().value);
            
            //PROPRIEDADE COMPUTADAS
            console.log('Propriedade computada');
            var objProdutoES6 = {
                nome: 'B',
                ["seq" + 12] : 12
            }
            console.log(objProdutoES6);

            let retNum = function(){
                return 267;
            }

            let nomeProp = 'teste';
            var objProdutoES6v2 = {
                nome: 'C',
                ["seq" + retNum()] : retNum(),
                [nomeProp]: nomeProp
            }
            console.log(objProdutoES6v2);

            //Destructuring - destruturacao.  é uma forma de extração de dados

            let = objPessoa = {
                nome: 'Fernando Silva',
                idade: 45,
                email: 'ferndando@email.com.br',
                sexo: 'Masculino',
                telefone: '31975611076',
                endereco: {
                    rua: 'Rua A',
                    numero: 698,
                    cidade: 'Fortaleza',
                    estado: 'CE'
                },
                site: undefined
            }
            
            let {nome,idade} = objPessoa
            console.log(`Nome ${nome} tem a idade de ${idade}`);

            //rotulo
            let {nome:nomeCompleto,telefone:celular} = objPessoa;
            console.log(`Nome Completo ${nomeCompleto} celular: ${celular}`);

            //Extrair o endereço
            let {endereco:{rua,numero,cidade,estado}} = objPessoa;

            console.log(rua,numero,cidade);

            //DESESTRUTURACAO COMO ARGUMENTOS
            console.log('Desestruturacao como argumentos');
            let objProduto = {
                descricao: "Livro Javascript",
                preco: 79.52,
                pags: 1100
            }

            let objCliente = {
                nome: 'Pedro'
            }

            function venda({nome},{descricao,preco,pags:paginas},qtde = 1){
                console.log(`Cliente: ${nome}`);
                console.log(`Produto: ${descricao} - paginas ${paginas}`);
                console.log(`Qtde: ${qtde} Preco: ${preco}`);
                console.log(`Total: ${qtde*preco}`);
            }

            venda(objCliente,objProduto,1);

            //DESESTRUTURACAO ARRAY
            


        </script>
         
        
         
        
    </body>
</html>




