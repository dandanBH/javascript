<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de Condicionais </title>
    </head>
    <body>     
        <h3>Exemplo de uso de Condicionais </h3>
        
        <div id="condicionais">
            <ul>
                <li>IF</li>
                <li>ELSE</li>
                <li>ELSE IF</li>
                <li>SWTICH</li>
                
            </ul>
          
        </div>
        
        
        <script>
            var filho = 'Carlos';
            var pai = 'Marcos';
            if ( filho == 'Marcos'){
                console.log('Eh o filho')
            }else 
                console.log('Nao eh')
            
            switch(pai){
                case 'Carlos': console.log('Pai Carlos');
                break;
                case 'Marcos': console.log('Pai Marcos');
                break;
            default:
                console.log('nenhum');
                break
        }
            
            
        </script>
         
        
         
        
    </body>
</html>




