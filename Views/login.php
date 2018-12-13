<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 11/12/2018
 * Time: 19:31
 */
?>
<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Dental Labs</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style-login.css" type="text/css" />


    <meta name="description" content="Sistema simples para gerenciamento de clinicas dentárias" />
    <meta name="keywords" content="Clínica dentária, Gerenciamento, Sistema" />
    <meta name="author" content="Roberto Pereira David">

    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content ="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <script src="<?php echo BASE_URL?>assets/js/vue.js"></script>

</head>
<body >
<main id="login">
    {{ addErro("<?php echo $erro;?>")}}
    <div class="login-box">

        <form method="post" v-on:submit="validar" novalidate="true">

            <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="email" v-model="email" placeholder="E-mail" name="email" value="">
            </div>
            <label for="email" v-if="erremail != null">{{erremail}}</label>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" v-model="senha" placeholder="Senha" name="senha" value="">
            </div>
            <label for="senha" v-if="errsenha != null">{{errsenha}}</label>

            <input class="btn" type="submit"  value="ENTRAR">

        </form>
        {{erremail}}
        <br><br>
        {{errsenha}}
        <br><br>
        <h2 v-if="erro"> {{ erro }}   <a href="" v-on:click="close"><i class="far fa-times-circle"></i></a></h2>



    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/script-login.js"></script>
</body>
</html>
