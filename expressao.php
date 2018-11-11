<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo </title>
    </head>
    <body>     
        <h3>Exemplo de uso de expressões regulares </h3>
        
        <div id="div">
          <p>As Expressoes regulares sao estruturas formadas por uma sequencia de caracteres 
          que especificam um padrao formal</p>
          <p>Util para:</p>
          <ul>
            <li>Validação de Campos(cpf,email etc)REGEX</li>
            <li>Extracao de Dados(PARSER)</li>
            <li>Substituição de caracteres em Texto - REGEX</li>
          </ul>
          <p>Para criar uma expressao regular em js var regExp = / < expressao regular >/</p>
        </div>
        
        
        <script>
            //var regExp = /abc/;
            var regExp = new RegExp("abc");
            console.log(regExp);
            // RegExp API
            /**
            exec: Executa a RegExp
            test: teste a RegExp
             */
            //12 PASSOS
            //passo 1 - reconhecer o numero de um telefone
            var regExp =/9999-9999/;
            var telefone = '9999-9999';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

            //passo 2 - considerar o DDD do telefone
            var regExp =/\(31\)9999-9999/;
            var telefone = '(31)9999-9999';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

             //passo 3 - considerar apenas o telefone dentro de um contexto
             /**
             ^ indica o inicio de uma expressao
             $ indica o fim de um caractere
              */
            var regExp =/^\(31\)9999-9999$/; //deve ser seguido esse modelo, iniciando e terminando conforme o ^ $ 
            var telefone = '(31)9999-9999';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

             //passo 4 - considerar todos os numeros de telefone
             /**
                [abc] = aceita qualquer caractere dentro do grupo a,b  c
                [^abc] = nao aceita qualquer caracteres dentro do grupo nesse a,b, e c.
                [0-9] =  aceita qualquer caractere entre 0 e 9
                [^0-9] = Não aceita qualquer caractere entre 0 e 9 

              */
            var regExp =/\([0-9][0-9]\)[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]/; //deve ser seguido esse modelo, iniciando e terminando conforme o ^ $ 
            var telefone = '(98)8846-5763';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

            //passo 5 - considerar todos os numeros de telefone com quantificadores
             /**
                {n} - Quantifica um numero especifico 
                {n,} - quantifica um numero minimo
                {n,m} - quantifica um numero minimo e numero maximo  

              */
            var regExp =/\([0-9]{2}\)[0-9]{4}-[0-9]{4}/; //deve ser seguido esse modelo, iniciando e terminando conforme o ^ $ 
            var telefone = '(98)8846-5763';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

            //passo 6 - telefone com 9 digitos
             /**
                {n} - Quantifica um numero especifico 
                {n,} - quantifica um numero minimo
                {n,m} - quantifica um numero minimo e numero maximo  

              */
              var regExp =/\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}/; //deve ser seguido esse modelo, iniciando e terminando conforme o ^ $ 
            var telefone = '(98)98846-5763';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

            //passo 7 - Outros quantificadores
             /**
                ? - Zero ou um
                * - Zero ou mais
                + - Um ou mais

                Metacaracteres
                . representa qualquer caractere
                \w representa o conjunto [a-zA-z0-9_]
                \W representa o conjunto [^a-zA-z0-9_]
                \d representa o conjunto [0-9]
                \D representa o conjunto [^0-9]
                \s representa um espaco em branco
                \S representa um espaco nao em branco
                \n representa uma quebra de linha
                \t representa um tab

              */
              var regExp =/\(\d{2}\)\d{4,5}-?\d{4}/; //deve ser seguido esse modelo, iniciando e terminando conforme o ^ $ 
            var telefone = '(98)988465763';
            //executando o exec
            console.log(regExp.exec(telefone))
            //executando o test
            console.log(regExp.test(telefone))

        //STRING API
        /*
            match = busca na string o intervalo procurado
            split = divide a string com base em outra 
            replace = substitui partes da string
            
            Modificadores
            i = case insensitive
            g = global matching
            m = multiline matching 
         */
        console.log(regExp.match(telefone))

        </script>
         
        
         
        
    </body>
</html>




