<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo Hover</title>
        <style>
            tbody tr:hover{
                background-color: #ccc;
            }
        </style>
    </head>
    <body>    
        <a href="#" id="links">
        <h3>Exemplo de uso do Hover </h3>
        </a>
        
        <table style="width: 100%">
            <thead>
                <th align ="left">Nome</th>
                <th align ="left">Idade</th>  
            </thead>
            <tbody>
                <tr class="trs">
                    <td style="height: 30px;">Alien</td>
                    <td style="height: 30px;">2000</td>
                </tr>
                <tr class="trs">
                    <td style="height: 30px;">Bicho Papão</td>
                    <td style="height: 30px;">1000</td>
                </tr>
            </tbody>
            
        </table>
        
        
        <script>
            var link = document.getElementById("links");
            var trs = document.getElementsByClassName("trs");
            link.addEventListener("mouseover",function(){
                alert("Passou");
            })
       
        </script>
         
        
         
        
    </body>
</html>




