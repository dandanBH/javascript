<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo </title>
    </head>
    <body>     
        <h3>Exemplo de uso de funcoes parte 2 </h3>
        
        <div id="div">
          <p>Cuidado com o scopo global das funcoes</p>
        </div>
        
        
        <script>
        ///CENARIO 1
            var counter = 0;
            var add = function(){
                return ++ counter;
            };
            console.log(add())
            console.log(add())
            console.log(add())
            
            var itens = []
            var add = function (item){
                itens.push(item);
                return itens;
            }
            console.log(add('A'))
            console.log(add('B'))
            console.log(add('C'))
            console.log(add()) //ao tentar adicionar novamente na sequencia 1 o escopo global nao ira entender
            //com isso ele ira para a segunda funcao, sendo entao definido como undefined

        ///CENARIO 2 ENCAPSULAR ATRAVES DO OBJETO
            var count = {
                value: 0,
                add: function(){
                    return ++this.value;
                }
            };
           
           console.log(count.add())
           console.log(count.add())
           console.log(count.add())

           var itens ={
               value:[],//array que incrementa item
               add: function(item){
                   this.value.push(item);
                   return this.value;
               }
           }
           console.log(itens.add('A'))
           console.log(itens.add('B'))
           console.log(itens.add('C'))
        </script>
         
        
         
        
    </body>
</html>




