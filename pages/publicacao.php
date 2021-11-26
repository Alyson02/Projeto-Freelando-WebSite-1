<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../medias/img/Group.svg" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-5.1.3/dist/css/bootstrap.css">

    <link rel="stylesheet" href="../css/styles_publicacao.css">



    <title>Freelando</title>
</head>


<body>


    <?php include "nav.html" ;?>

    <section class="hero">
        <div class="container">
            <div class="row flex-wrap no">




                <div class="col-lg-6 offset-lg-1 publicacao shadow-lg bg-white">

                    <div class="cardbox ">

                        <div class="cardbox-heading">

                            <!--/ dropdown -->
                            <div class="media m-0">
                                <div class="d-flex mr-3">
                                    <a href=""><img class="img-fluid rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></a>
                                </div>

                                <div class="media-body">
                                    <p class="m-0">João Franco</p>
                                    <small><span><i class="icon ion-md-time"></i> 10 horas atrás</span></small>
                                </div>

                                <div class="d-flex mr-3">
                                    <a href=""><img class="img-fluid link" src="../medias/img/link-2.svg" alt="User"></a>
                                </div>


                            </div>



                            <!--/ media -->
                        </div>
                        <!--/ cardbox-heading -->

                        <div class="cardbox-item">
                            <img class="img-fluid cardbox-img" src="../medias/img/eletrica.png" alt="Image">
                        </div>
                        <!--/ cardbox-item -->
                        <div class="cardbox-base">
                            <ul class="d-flex align-items-center">

                                <li>
                                    <a href=""><img class="img-fluid" src="../medias/img/like.png" alt="User"></a>
                                </li>

                                <li>
                                    <a href=""><img class="img-fluid" src="../medias/img/comentarios.png" alt="User"></a>
                                </li>



                            </ul>

                        </div>



                    </div>

                </div>
                <!--/ col-lg-6 -->


                <div class="col-lg-1 mesgs shadow-lg bg-white ">

                    <button class="fechar-botao" type="button">
                        <img class="fa fa-search form-control-feedback img" src="../medias/img/btnclose.svg" alt="mão"
                            id="enviar" onclick="enviar()">
                    </button>


                    <div class="msg_history">
                        <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Test which is a new approach to have all solutions
                                    </p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>

                        <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Test, which is a new approach to have</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>

                        <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img class="rounded-circle user_img" src="../medias/img/user-sla.png" alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Coé! Quanto fica pra arrumar um chuveiro queimado?</p>
                                    <span class="time_date"> 10:58 AM | Hoje</span>
                                </div>
                            </div>
                        </div>

                        <div class="incoming_msg">
                            <div class="incoming_msg_img "> <img class="rounded-circle user_img" src="../medias/img/user-dv.png" alt="sunil">
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Meu mestre pode ajudar vc com geração de energia.</p>
                                    <span class="time_date"> 11:01 AM | Hoje</span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">

                            <button class="enviar-botao" type="button">
                                <img class="fa fa-search form-control-feedback img" src="../medias/img/contratp.png"
                                    alt="mão" id="enviar" onclick="enviar()">
                            </button>

                            <input type="text" class="write_msg" placeholder="Escreva um comentário...">

                            <button class="msg_send_btn" type="button">
                                <img src="../medias/img/enviar.png" alt="icone">
                            </button>

                        </div>
                    </div>
                </div>
                <!--/ col-lg-3 -->

            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="../bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>