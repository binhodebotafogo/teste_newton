<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newton</title>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/235113527b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="container justify-content-end pt-4 pb-4">
                    <div class="menu_nav">
                        <ul class="nav">
                            <li class="nav-item"><a href="#" class="nav-link">Quem somos</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Equipe</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Espaço</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div>
            <div id="carousel_1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active bg-secondary">
                        <img src="imagens/foto1.png" alt="first-slide" class="img-fluid formatacao-imagem" style="background-color: rgba(0, 0, 0, 0.5)">

                        <div class="carousel-caption d-md-block" style="padding-bottom: 20%;">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>   

                    </div>

                    <div class="carousel-item bg-secondary">
                        <img src="imagens/foto2.jpg" class="img-fluid formatacao-imagem" style="background-color: rgba(0, 0, 0, 0.5)">

                        <div class="carousel-caption d-md-block "  style="padding-bottom: 20%;">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div> 

                    </div>

                </div>

                <div id="carousel_1">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel_2" data-slide-to="0"><i class="fa-solid fa-circle p-3"></i></li>
                        <li data-target="#carousel_2" data-slide-to="1"><i class="fa-solid fa-circle p-3"></i></li>
                    </ol>
                </div>

                <a href="#carousel_1" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a href="#carousel_1" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>
        </div>
        <section id="quem-somos">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 mb-8">
                        <img src="imagens/container1.png" class="img-fluid"/>
                    </div>
                
                    <div class="col-md-6 mb-8" style="padding-left: 50px; padding-top: 50px;">
                        <h2 >Quem somos <span style="font-size: 40px;">–</span></h2>
                        <br>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Duis luctus bibendum scelerisque. 
                            Duis ornare et risus id faucibus. 
                            Fusce tincidunt leo elit. 
                            Suspendisse potenti. 
                            Nunc vestibulum dolor et risus viverra mattis. 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec a ex quis sapien laoreet eleifend.
                            <br><br><br>
                        <a href="#" class="btn btn-danger button">Saiba mais</a>

                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-5">
            <div class="row">                            
                <div class="col-md-6 mt-5" style="padding-right: 50px; padding-top: 50px;">
                    <h2>Nossa equipe <span style="font-size: 40px;">–</span></h2>
                    <br>
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Duis luctus bibendum scelerisque. 
                        Duis ornare et risus id faucibus. 
                        Fusce tincidunt leo elit. 
                        Suspendisse potenti. 
                        Nunc vestibulum dolor et risus viverra mattis. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec a ex quis sapien laoreet eleifend.
                        <br><br><br>
                </div>

                <div class="col-md-6">
                    <img src="imagens/container2.png" class="img-fluid ms-4"/>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 150px;">
            <img src="imagens/caminho.png" class="caminho_img">
            <div class="row">                            
                <div class="col-md-6 mt-5 caixa">
                    <h2>Nosso espaço <span style="font-size: 40px;">–</span></h2>
                    <br>
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Duis luctus bibendum scelerisque. 
                        Duis ornare et risus id faucibus. 
                        Fusce tincidunt leo elit. 
                        Suspendisse potenti. 
                        Nunc vestibulum dolor et risus viverra mattis. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec a ex quis sapien laoreet eleifend.
                        <br><br><br>
                </div>

                <div class="col-md-6">
                    <div class="d-inline-block" style="padding-left: 23px; padding-bottom: 5px;">
                        <a href=""><i class="fa-regular fa-square-caret-left" style="padding-right: 40px; font-size: 30px; color:#666666;"></i></a>
                        <a href=""><i class="fa-regular fa-square-caret-right" style="font-size: 30px; color:#666666;"></i></a>
                    </div>
                    
                    <img src="imagens/img3.png" class="img-fluid ms-4"/>

                    <a href=""><i class="fa-regular fa-square-plus btn_plus"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center text-center">
                 <div class="col-md-12 mt-5 pt-5">
                     <h1>Fale conosco</h1>
                    <br>
                    <p>
                        Quer conversar com a Health Clinic? Basta<br> 
                        preencher o formulário abaixo e nós entraremos<br> 
                        em contato assim que possível!
                    </p>
                    <br>
                    <!--<div style="background: #FBFBFB 0% 0% no-repeat padding-box; border-radius: 10px; opacity: 1; width: 148px; height: 50px;">                
                        <div class="col-md-2">
                        <img src="imagens/telefone.png" class="mt-3" style="width:20px; position: absolute;"/> 
                        </div>
                        <div class="col-md-2" style="display:inline-block;">
                        <h6 class="m-12" style="color: #E42313; position: relative; margin-top: 15px;"> Telefone </h6>
                        </div>
                    </div>

                    <div style="background: #FBFBFB 0% 0% no-repeat padding-box; border-radius: 10px; opacity: 1; width: 148px; height: 50px;">                
                        <div class="col-md-2">
                        <img src="imagens/whatsapp.png" class="mt-3" style="width:20px; position: absolute;"/> 
                        </div>
                        <div class="col-md-2" style="display:inline-block;">
                        <h6 class="m-12" style="color: #E42313; position: relative; margin-top: 15px;"> Whatsapp </h6>
                        </div>
                    </div>

                    <div style="background: #FBFBFB 0% 0% no-repeat padding-box; border-radius: 10px; opacity: 1; width: 148px; height: 50px;">                
                        <div class="col-md-2">
                        <img src="imagens/wechat.png" class="mt-3" style="width:20px; position: absolute;"/> 
                        </div>
                        <div class="col-md-2" style="display:inline-block;">
                        <h6 style="color: #E42313; position: relative; margin-top: 15px;"> Wechat </h6>
                        </div>
                    </div>-->

                    <div class="text-center">
                        <img src="https://i.postimg.cc/xd4prFL7/zap.jpg" class="responsive" alt="">  
                    </div>
                 </div>                            
            </div>
        </div>


        <div class="container mt-5 pb-5">
            <div class="row"> 
                <form action="dados_do_formulario.php" method="POST" enctype="multipart/form-data">                          
                    <div class="corpo_form">

                        <div class="col-md-6 p-5">
                            <input type="text" name="nome" class="form-control item_form" id="nome" placeholder="Nome">
                            <br>
                            <input type="email" name="email" class="form-control item_form" id="email" placeholder="E-mail">
                            <br>
                            <select class="form-control item_form" name="selecionado" id="select">
                                <option>Selecione o assunto</option>
                                <option>Orçamento</option>
                                <option>Elogiar</option>
                                <option>Reclamar</option>
                            </select>
                        </div>

                        <div class="col-md-6 p-5">
                            <input type="textarea" name="mensagem" class="form-control textarea_form" id="mensagem" placeholder="Mensagem">
                            <button type="submit" class="btn text-light mt-3 btn_form">Enviar</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>

        <footer class="border border-dark">
            
            <nav class="navbar">

                <div class="redes_sociais">
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>

                <div class="container justify-content-center pt-4 pb-4" style="border-bottom: 1px solid white;">
                    <div class="menu_nav">
                        <ul class="nav" >
                            <li class="nav-item"><a href="#" class="nav-link text-white">Quem somos</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">Especialidades</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">Contato</a></li>
                        </ul>
                    </div>
                </div>
                
            </nav>

            <p class="text-white text-center pt-4 pb-3">Health Clinic São Paulo - Todos os Direitos Reservados.</p>

        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>