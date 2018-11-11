<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Loop</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Loop </h3>
        
       <div id="loop">
            <ul>
                <li>FOR</li>
                <li>FOREACH</li>
                <li>MAP</li>
                <li>WHILE</li>
                
            </ul>
           <p>Exemplos</p>
           <div class="js">react</div>
           <div class="js">angular</div>
           <div class="js">typescript</div>
           <div class="js">es6</div>
           
        </div>
        
        
        <script>
            var array = [1,2,3,4];
            var arraymap = [4,3,5,1];
            var js = document.getElementsByClassName("js");
           for(let i=0;i < js.length; i++){
             let texto = js[i].innerHTML;
             js[i].innerHTML = 'curso '+ texto + ' js';
           }
           
           // foreach - nao consegue percorrer o htmlcollection somente array
           array.forEach(function(elemento,indice){
               console.log(elemento,indice)
           });
           
           //map - so consegue percorrer array
           arraymap.map(function(elemento,indice)
           {
               console.log(elemento,indice)
           });
           
           // while
           var i = 0;
           while (i < 5){
               console.log('oi');
               i++;
           }
        </script>
         
        
    </body>
</html>




