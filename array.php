<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Array </title>
    </head>
    <body>     
        <h3>Exemplo de uso do Array </h3>
        
        <div id="array">
            <p>O acesso é feito com um conjunto de valores que sao acessados pelos indices</p>
            <p>O indice se inicia com 0</p>
        </div>
        
        
        <script>
            var array = ['danilo',33,'Belo Horizonte',{Bairro: 'Santa Amelia',Cep:'31555-440'}];
            console.log(array);
            console.log(array[0]);
            console.log(array[1]);
            console.log(array[2]);
            console.log(array[3]);
            var array2 = ['Belo Horizonte',['Santa Amélia',31555440,'Numero 342','Bloco 17',304]];
            console.log(array2[1][3]);
         
            var carros = ['ka','corsa','fusca',['automatico','gasolina','alcool']];
            carros[4] = 'palio';
            console.log(carros)
            
            console.log(carros[3][0])
            //criando array com new
            var casa = new Array('pequena','grande');
            console.log(casa);

            // ARRAY API
            //valueOf
            console.log(carros.valueOf()); // consulta o array
            console.log(carros.toString()); // extrai string do array
            console.log(carros.length); // tamanho do array
            console.log(carros.push('Gol')) //insere o carro Gol no array
            console.log(carros)
            console.log(carros.pop()); //exibe e retira o ultimo elemento
            console.log(carros)
            console.log(carros.unshift('Gol')); // adiciona o gol no inicio do array
            console.log(carros)
            console.log(carros.shift('Gol')); // remove o primeiro elemento
            console.log(carros);  
            console.log(carros.indexOf('fusca'));
            console.log(carros.splice(1,2))// remove os itens a partir da posicao 1,o segundo parametro diz quantos itens seram removidos
            console.log(carros.toString()); 
            console.log(carros.splice(1,1,'Sonic')); //remove o item e substitui pelo carro sonic 
            console.log(carros.splice(1,0,'HB20')); //adiciona o item      
            console.log(carros.toString()); 
            
            carros.forEach(function(elemento){
                console.log(elemento)
            });


            //funcao filter - buscar um elemento dentro do array
            var veiculo = [{
                marca: 'FORD',
                modelo: 'KA',
                valor: 13000
            },
            {
                marca: 'FIAT',
                modelo:'GOL',
                valor: 12500
            }
            ];
            
           var veiculoFord = veiculo.filter(function(elemento){
                return elemento.marca ==='FORD'
            })
            console.log(veiculoFord);

         //funcao every - testa se todos os elementos eh da marca ford
         var veiculoFord = veiculo.every(function(elemento){
                return elemento.marca ==='FORD'
            })
            console.log(veiculoFord);

          //funcao some - testa se existe algum elemento  da marca ford
          var veiculoFord = veiculo.some(function(elemento){
                return elemento.marca ==='FORD'
            })
            console.log(veiculoFord);

         //funcao map - cria array derivado
         var veiculomap = veiculo.map(function(elemento){
                return elemento.marca
            })
            console.log(veiculomap);
        
         //funcao reduce - cria array de resultados de calculo
         var veiculoreduce = veiculo.reduce(function(prev,cur){
             return prev + cur.valor;//prev elemento anterio, cur: elemento atual
         },0); //começa em zero    
         
         var total = 0; // versao forEach
         var veiculof = veiculo.forEach(function(elemento){
              total +=elemento.valor;
         });
         console.log(total);
         console.log(veiculoreduce);
         
         //funcao concat
         var motos = ['honda','yamaha','Suzuki']

         var motocar = carros.concat(motos);
         console.log(motocar)

         //array slice
         console.log(motocar.slice(0,5))

          //array reverse
          console.log(motocar.reverse())

          //funcao sort
          console.log(veiculo.sort())
          //ordernar por preco
          var veiculosort = veiculo.sort(function(a,b){
             return a.valor -b.valor;//prev elemento anterio, cur: elemento atual
         });
         console.log(veiculosort)

         //funcao join
         console.log(carros.join(" ; ")); // adiciona ; entre os elementos do array carros

        </script>
         
        
         
        
    </body>
</html>




