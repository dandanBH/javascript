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

           
            
        </script>
         
        
         
        
    </body>
</html>




