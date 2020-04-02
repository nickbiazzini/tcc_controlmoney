<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico">

        <title>Control Money</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>

        <?php
        include_once("menu.php");
        if (isset($_GET["link"])) {
            $link = $_GET["link"];
        }
        $pag[1] = "bem_vindo.php";
        $pag[2] = "cad_despesas.php";
        $pag[3] = "listar_despesas.php";
        $pag[4] = "cad_recebimentos.php";
        $pag[5] = "listar_recebimentos.php";
        $pag[6] = "cad_metas.php";
        $pag[7] = "listar_metas.php";
        $pag[8] = "cad_contab.php";
        $pag[9] = "listar_contab.php";
        $pag[10] = "cad_cartoes.php";
        $pag[11] = "listar_cartoes.php";
        $pag[12] = "cad_categorias.php";
        $pag[13] = "listar_categorias.php";
        $pag[14] = "editar_despesas.php";
        $pag[15] = "editar_recebimentos.php";
        $pag[16] = "editar_metas.php";
        $pag[17] = "editar_contab.php";
        $pag[18] = "editar_cartoes.php";
        $pag[19] = "visual_despesas.php";
        $pag[20] = "visual_recebimentos.php";
        $pag[21] = "visual_metas.php";
        $pag[22] = "visual_contab.php";
        $pag[23] = "visual_cartoes.php";
        $pag[24] = "cad_categorias.php";
        $pag[25] = "listar_categorias.php";
        $pag[26] = "editar_categorias.php";
        $pag[27] = "visual_categorias.php";
        
        
        if (!empty($link)) {
            if (file_exists($pag[$link])) {
                include $pag[$link];
            } else {
                include "bem_vindo.php";
            }
        } else {
            include "bem_vindo.php";
        }
        ?>
        
        <!--        <div class="container theme-showcase" role="main">
        
                     Main jumbotron for a primary marketing message or call to action 
                    <div class="jumbotron">
                        <h1>Bem-Vindo ao Control Money</h1>
                        <h2 align="center">Resumo</h2>
        
                    </div>
        
                </div>  /container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
