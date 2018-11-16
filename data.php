<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de Datas </title>
    </head>
    <body>     
        <h3>Exemplo de uso das Datas </h3>
        
        <div id="div">
          <p>Inicio da era UNIX 1 de janeiro de 1970</p>
        </div>
        
        
        <script>
        var d = new Date();
        // new Date(ano,mes,dia,hora,minuto,segundo,milisegundo)
        console.log(d);
        console.log(d.toUTCString());
        console.log(d.toDateString());
        console.log(d.getDate()); // retornar o dia atual
        d.setDate(17);
        console.log(d.getDate());
        console.log(d.getDay());

        console.log(new Date("10/11/2018"))
        console.log(new Date(2018,01,30)) // passando parametro

        
        
        // verificar date api
        function formataData(data = new Date()){
            var dia = data.getDate();
            var mes = data.getMonth()+1;
            var ano = data.getFullYear();

            if (dia.toString().length ==1)dia = '0'.dia;
            if (mes.toString().length ==1)mes = '0'.mes;
            
            return dia + '/' + mes + '/' + ano;
        }
        formataData();


        let agora = new Date();
        console.log('DATA AGORA '+agora.toLocaleDateString("pt-BR"));
        
        </script>
         
        
         
        
    </body>
</html>




