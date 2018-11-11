<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Estruturas</title>
    </head>
    <body>     
        <h3>Exemplo de uso de Estruturas </h3>
        
        <div id="div">
            <ul>
                <li>for</li>
                <li>if</li>
                <li>else</li>
                <li>Continue</li>

                <li>while</li>
                <li>switch</li>
                <li>break</li>
                <li>throw</li>
                <li>try</li>
                <li>catch</li>
            </ul>
        </div>
        
        
        <script>

            var text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
           
            var toHackerCase = function(text){
                var hackerTextArray = [];
                for(var i = 0; i < text.length; i++) {
                    if (text.charArt === 'o'){
                        hackerTextArray.push(0) // se tiver no array a letra o sera colocado 
                    }else {
                        hackerTextArray.push(text.charAt[i]);
                    }
                }
                toHackerCase(text);
            };

           
        </script>

         
        
         
        
    </body>
</html>




