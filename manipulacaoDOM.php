<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>
        <header><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3>Form com HTML Simples</h3>
                    <h2>Cadastro de Cliente</h2>
                    <form method="POST" action="/" id="formHtml">
                        <div>
                            <label for="formHtml">Nome</label>
                            <input type="text" id="nomeHtml" name="nomeHtml"/>
                        </div>
                        <div>
                            <label for="emailHtml">Email</label>
                            <input type="email" id="emailHtml" placeholder="Informe seu Email">
                        </div>
                        <div> 
                            <input type="checkbox" id="emailPromocionalHtml" placeholder="Informe seu Email">
                            <label for="emailPromocionalHtml">Receber Email Promocional</label>
                        </div>
                        <div>
                            <label for="fomarContatoTelefoneRadioHtml">Contato por Telefone</label>
                            <input type="radio" id="fomarContatoTelefoneRadioHtml" name="fomarContatoRadioHtml" placeholder="Informe seu Email">
                            <label for="fomarContatoEmailRadioHtml">Contato por Email</label>
                            <input type="radio" id="fomarContatpoEmailRadioHtml" name="fomarContatoRadioHtml" placeholder="Informe seu Email">

                        </div>
                        <div>
                            <select name="estadoSelectHtml" id="estadoSelectHtml">
                                <option selected>Selecione um estado</option>
                                <option value="MG">MG</option>
                                <option value="RJ">RJ</option>
                                <option value="SP">SP</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm">
                    <h3>Form com HTML Simples</h3>
                    <h2>Cadastro de Cliente</h2>
                    <form method="POST" action = "/" id="formBoot">
                        <div class="form-group">
                            <label for="nomeBoot">Nome</label>
                            <input type="text" class="form-control" id="nomeBoot" placeholder="Informe seu nome">
                        </div>
                        <div class="form-group">
                            <label for="emailBoot">Email</label>
                            <input type="text" class="form-control" id="emailBoot" placeholder="Informe seu email">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="emailPromocionalBoot" placeholder="Informe seu Email">

                            <label class="custom-control-label" for="emailPromocionalBoot">Receber Email Promocional</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="fomarContatoTelefoneRadioBoot" name="formaContatoBoot" class="custom-control-input">
                            <label class="custom-control-label" for="fomarContatoTelefoneRadioBoot">Contato por Telefone</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="fomarContatpoEmailRadioBoot" name="formaContatoBoot" class="custom-control-input">
                            <label class="custom-control-label" for="fomarContatpoEmailRadioBoot">Contato por E-mail</label>
                        </div>
                        <br />
                        
                            <select class="custom-select" name="estadoSelectBoot" id="estadoSelectBoot">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        <br />
                        <br />
                        <div>
                            <button type="button" class="btn btn-primary">Primary</button>
                        </div>
                        <br />
                    </form>

                </div>

            </div>
        </div>
            <footer>
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="js/js.js"></script>

    </body>
</html>
