<style>
    .input-pesquisa {
        width: 300px !important;
        font-size: 20px !important;
        border-radius: 5px !important;
        border: 1px solid #515151 !important;
        opacity: 50% !important;
        margin: 0 !important;
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    
    .btn-navi {
        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .logo {
        display: none;
    }
    
    .container-lupa {
        width: 300px !important;
        display: flex !important;
        justify-content: end !important;
        position: absolute !important;
    }
    
    .lupa {
        margin-top: -25px !important;
        border-left: 2px solid #515151 !important;
        border-radius: 0px !important;
        padding-left: 4px !important;
        opacity: 100% !important;
        position: absolute !important;
        padding: 2 !important;
    }
    
    .nav-custom {
        -webkit-box-shadow: 0px 12px 39px -10px #fffafa !important;
        box-shadow: 0px 12px 39px -10px #e0e0e0 !important;
        z-index: 1000000 !important;
        background-color: #fff;
        width: 100vw;
        margin-bottom: 3rem !important;
        position: fixed;
    }
    
    .container-nave {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        flex-direction: row !important;
        padding-left: 15%;
        padding-right: 15%;
    }
    
    .container-opçoes {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-around !important;
        align-items: end !important;
        flex-wrap: nowrap;
    }
    
    .foto-user-navi {
        padding: 0 !important;
        margin-right: 0.5rem !important;
    }
    
    .nome-user-navi {
        padding: 0 !important;
        margin-bottom: 0.5rem !important;
        margin-right: 1rem !important;
        font-family: Verdana, Geneva, Tahoma, sans-serif !important;
        font-size: 15px;
        flex-wrap: nowrap;
        white-space: nowrap;
    }
    
    .chat-user-navi {
        padding: 0 !important;
        margin-bottom: 0.25rem !important;
        margin-right: 1rem !important;
    }
    
    .sair-user-navi {
        padding: 0 !important;
        margin-bottom: 0.25rem !important;
    }
    
    .margem-t {
        height: 200px !important;
        content: "" !important;
    }
    
    .container-pesquisa {
        display: flex !important;
        flex-direction: row !important;
    }

    .clicavel:hover{
        cursor: pointer;
    }
    /* Wider than desktop */
    
    @media (min-width: 1200px) {}
    /* Landscape phone to desktop */
    
    @media (max-width: 1199px) {}
    /* Landscape phone to landscape tablet */
    
    @media (max-width: 979px) {}
    /* Small desktop */
    
    @media (min-width: 980px) and (max-width: 1199px) {
        .nome-user-navi {
            display: none !important;
        }
        .foto-user-navi {
            padding: 0 !important;
            margin-right: 1rem !important;
        }
    }
    /* Portrait tablet to landscape tablet */
    
    @media (min-width: 768px) and (max-width: 979px) {
        .nome-user-navi {
            display: none !important;
        }
        .foto-user-navi {
            padding: 0 !important;
            margin-right: 1rem !important;
        }
        .container-nave {
            padding-left: 5px;
            padding-right: 5px;
        }
    }
    /* Landscape phone to portrait tablet */
    
    @media (max-width: 767px) {
        .nome-user-navi {
            display: none !important;
        }
        .container-nave {
            padding-left: 5px;
            padding-right: 5px;
        }
    }
    
    @media (max-width: 645px) {
        .logo {
            display: flex;
        }
        .imagem {
            display: none;
        }
    }
    /* Landscape phones and smaller */
    
    @media (max-width: 480px) {
        .nome-user-navi {
            display: none !important;
        }
        .foto-user-navi {
            padding: 0 !important;
            margin-right: 0rem !important;
        }
        .container-nave {
            padding-left: 0px;
            padding-right: 0px;
        }
        .input-pesquisa {
            width: 180px !important;
        }
        .container-lupa {
            width: 182px !important;
            display: flex !important;
            justify-content: end !important;
            position: absolute !important;
        }
        .chat-user-navi {
            padding: 0 !important;
            margin-bottom: 0.25rem !important;
            margin-right: 0.2rem !important;
        }
    }

</style>
<body>

    <nav class="nav-custom">
        <div class="container-nave">

            <div class="imagem clicavel" onclick="telaHome()">
                <img src="../medias/img/freelando.svg" style="margin-bottom: 1rem !important;" alt="logo" height="50px" width="200px">

            </div>


            <div class="logo clicavel" onclick="telaHome()">
                <img src="../medias/img/logo-tocha.svg" style="margin-bottom: 1rem !important;" alt="logo" height="50px" width="200px"> 
                <!-- width 50 -->

            </div>




            <div class="container-pesquisa ">
                <form action="resultado-pesquisa.php" method="POST" id="form_search">
                    <input type="text" name="pesquisa" class="input-pesquisa ">

                    <div class="container-lupa">
                        <img src="../medias/img/lupinha.svg" class="lupa" onclick="document.getElementById('form_search').submit()">
                    </div>
                </form>
            </div>


            <div class="container-opçoes">
                <?php
                if($_SESSION['tipo'] == "contratante"){
                    ?>
                        <img src="<?php echo $_SESSION['foto_perfil']; ?>" onclick="profile_contratante()" alt="usuario" width="40px" height="40px" class="btn-navi foto-user-navi rounded-circle" id="profile_photo">
                        <p class="btn-navi nome-user-navi" id="username" onclick="profile_contratante()"><?php echo $_SESSION['nome_usuario']; ?></p>
                    <?php
                }else{
                    ?>
                        <img src="<?php echo $_SESSION['foto_perfil']; ?>" onclick="profile_autonomo()" alt="usuario" width="40px" height="40px" class="btn-navi foto-user-navi rounded-circle" id="profile_photo">
                        <p class="btn-navi nome-user-navi" id="username" onclick="profile_autonomo()"><?php echo $_SESSION['nome_usuario']; ?></p>
                    <?php
                }
                ?>
                

                <a href="chat.php"><img src="../medias/img/balao-de-fala.svg" alt="balao" width="33px" height="33px" class="btn-navi chat-user-navi"></a>

                <img src="../medias/img/sair_2.png" alt="saida" width="33px" height="33px" class="btn-navi mb-1 p-0 " onclick="logoff()">
            </div>
        </div>
    </nav>

    <div class="margem-t"></div>
</body>
<script src="../scripts/scripts.js"></script>