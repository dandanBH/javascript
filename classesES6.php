<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo </title>
    </head>
    <body>     
        <h3>Exemplo de uso de classes ES6</h3>
        
        <div id="div">
          
        </div>
        
        
        <script>
            class PessoaES6{
                constructor(nome, cpf){
                    this.nome = nome;
                    this.cpf = cpf;
                }
                
                nomeUpper(){
                    return this.nome.toUpperCase();
                }
            }

            var objPessoaES6 = new PessoaES6('Paulo','76878987877');
            var objPessoa2ES6 = new PessoaES6('Roberto','53484273948');
            console.log('NOME UPPER');
            console.log('objPessoaES6 ',objPessoaES6.nomeUpper());


            console.log("USO DO CONCEITO DE HERANÇA");
            class FuncionarioES6 extends PessoaES6{
                constructor(nome, cpf, matricula){
                    super(nome,cpf); // realiza a herança passando os parametros herdados
                    this.matricula = matricula;
                }
            }
        
            var objFuncionarioES6 = new FuncionarioES6('Paulo','76878987877','MATRICULA235');
            console.log('objFuncionarioES6 nome',objFuncionarioES6.nome);
            console.log('objFuncionarioES6 Matricula',objFuncionarioES6.matricula);

            //HOISTING em CLASSES
            /**
                Hoisting nao funciona em classes, um classe nao pode ser decladara sem q ela seja construida
             */
            const Carro = class{
                constructor(placa){
                    this.placa = placa;
                }
            }

            const CarroV2 = class extends Carro{
                constructor(tipo,placa){
                    super(tipo);
                    this.placa = placa;
                }
            }

           

            
            //CLASSES COM METODOS ESTATICOS
        

        </script>
         
        
         
        
    </body>
</html>




