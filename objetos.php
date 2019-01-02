<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de Objetos</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Objetos </h3>
        <p>{ <br>
            &nbsp;indice: valor,<br>
            &nbsp;indice: valor<br> <!-- possui indice e valor -->
            }</p>
        
        
        <div id="linux">
          
        </div>
        
        
        <script>
             //{} indica ser um objeto; conhecido tambem como supervariavel
             // um objeto pode ser recurssivo 
             // literal
            var carro = {
              placa: 'OLX-9086',
              modelo: 'FACTOR',
              marca: 'YAMAHA',
              opcionais:{   
                  marcha: '5',
                  cor: 'Vermelha',
                  partida: 'click',
                  freio: 'Normal',
                  combustivel:'Gasolina'
              },
              andar: function(){
                  return "Olá, me chamo "+this.placa; 

              }
              ,
            "detalhe-modelo": "ESD"
            }; 
            console.log(typeof carro );
            console.log(carro.modelo); // imprime o valor do indice 
            console.log(carro.opcionais); 
            console.log(carro.opcionais.combustivel); 
            console.log(carro["detalhe-modelo"]);

            for (var propriedade in carro){
                console.log(propriedade);
            }

            for (var prop in carro.opcionais){
                console.log(prop, carro.opcionais[prop]);
            }
            
            //objeto como construtor
            var objpessoa = new Object();
            objpessoa.nome = "Maria";
            console.log(objpessoa.nome);
            
            //Object.create
            var objetoPessoa = {
                nome: "Joao Pedro da Silva",
            }
            
            var objetoProduto = new Object();
            objetoProduto.nome = "mesa";
            objetoProduto.preso = 89.99;
            objetoProduto.dimensoes = {
                largura: "1m",
                comprimento: "1,5m",
                altura: "90cm"};

            objetoProduto["nome no formato string valido"]="deu certo";
            var nomeprop = "novoNome";
            objetoProduto[nomeprop] = "Deu certo tambem";
            objetoProduto[""] ="vazio";
            objetoProduto["123"] = 123;

            //o objeto por referencia
            var obj1 = {
                 matricula:17
                };
            console.log("obj1",obj1.matricula);
            var obj2 = obj1;
            obj2.matricula = 28;
            console.log("obj1",obj1.matricula)
            obj2 = null //limpa a memoria do objeto

            //verificar se existe uma propriedade no objeto em questao ou em sua cadeia de prototipos
            var pedido = new Object();
            pedido.total = 233.45;
            console.log("cliente in pedido: ","cliente" in pedido);
            console.log("cliente in pedido: ",pedido.cliente);
            // o in verifica se a propriedade ou metodo existe no objeto e na cadeia de prototipo
            console.log("toString ","toString" in pedido);
            console.log(pedido.hasOwnProperty("total")); //metodo que retorna se existe ou nao a propriedade do pedido
            pedido.totalItens = 23;
            console.log(pedido);
            //remover propriedade de um obj
            console.log("removendo a propriedade",delete pedido.totalItens);
            console.log(pedido);
            
            //como obter as chaves(nome de propriedades) do objeto
            var produtoTeste = {
                nome: 'teste',
                valor:12,
                ativo:true
            }
            var chaves = Object.keys(produtoTeste);
            console.log(chaves);
            //verificar se eh array
            console.log(Array.isArray(chaves));

           //acessando valores de um objeto - ES2017
           var valor = Object.values(produtoTeste);
           console.log(valor);
           
           //acessando valores e e chaves das propriedades do obj
           var chavesValores = Object.entries(produtoTeste);
           console.log(chavesValores);
           
           for ()
            
            

        </script>
         
        
         
        
    </body>
</html>




