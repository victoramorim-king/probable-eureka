<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>
	
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/mini-icon.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="http://pecuariaeficiente.com.br/wp-content/uploads/2018/04/icone-pecuaria.png">
        <link rel="icon" sizes="192x192" href="http://pecuariaeficiente.com.br/wp-content/uploads/2018/04/icone-pecuaria.png">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <!-- Font face Google -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700i,900i" rel="stylesheet">

    </head>

<!-- OneTrust Cookies Consent Notice start for pecuariaeficiente.com.br -->

<script type="text/javascript" src="https://cdn.cookielaw.org/consent/0f0ab619-66dd-4577-b381-e44f33080e98/OtAutoBlock.js" ></script>

<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="0f0ab619-66dd-4577-b381-e44f33080e98" ></script>

<script type="text/javascript">

function OptanonWrapper() { }

</script>

<style>

     .optanon-alert-box-wrapper a {

            background-color: transparent;

            color: white;

            text-decoration: underline;

            margin-left: 5px;

            font-weight: bold;

        }

 </style>

<!-- OneTrust Cookies Consent Notice end for pecuariaeficiente.com.br -->
    
<body <?php body_class(); ?>>
        <?php 
        global $post;
        $c_slug = $post->post_name;
    ?>
        <!-- Header-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url() ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/logo.png" /></a>
                    <span class="featured hidden-xs <?php echo $c_slug == "conceito" ? "active" : ""?>"><a href="<?php echo home_url() ?>/conceito/">Conceito</a></span>
                    <div class="spaced-links hidden-xs">
                        <span class="color-brow font-medium">V-MAX<sup>®</sup> no BOI 7-7-7</span>
                        <ul class="list-inline links-top">
                            <li class="<?php echo $c_slug == "cria" ? "active" : ""?>"><a href="<?php echo home_url() ?>/cria/">Cria</a> </li>
                            <li class="<?php echo $c_slug == "recria" ? "active" : ""?>"><a href="<?php echo home_url() ?>/recria/">Recria</a> </li>
                            <li class="<?php echo $c_slug == "terminacao" ? "active" : ""?>"><a href="<?php echo home_url() ?>/terminacao/">Terminação</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <span class="featured visible-xs <?php echo $c_slug == "conceito" ? "active" : ""?>"><a href="<?php echo home_url() ?>/conceito/">Conceito</a></span>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown visible-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">V-MAX<sup>®</sup> no BOI 7-7-7 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="<?php echo $c_slug == "cria" ? "active" : ""?>"> <a href="<?php echo home_url() ?>/cria/">Cria</a> </li>
                                <li class="<?php echo $c_slug == "recria" ? "active" : ""?>"><a href="<?php echo home_url() ?>/recria/">Recria</a> </li>
                                <li class="<?php echo $c_slug == "terminacao" ? "active" : ""?>"><a href="<?php echo home_url() ?>/terminacao/">Terminação</a> </li>
                            </ul>
                        </li>
                        <li class="<?php echo $c_slug == "videos" ? "active" : ""?>"><a href="<?php echo home_url() ?>/videos/">Vídeos<span class="sr-only">(current)</span></a></li>
                        <li class="<?php echo $c_slug == "download" ? "active" : ""?>"><a href="<?php echo home_url() ?>/download/">Downloads</a></li>
                        <li class="<?php echo $c_slug == "produtos" ? "active" : ""?>"><a href="<?php echo home_url() ?>/produtos/">Produtos</a></li>
                        <li class="<?php echo $c_slug == "quem-somos" ? "active" : ""?>"><a href="<?php echo home_url() ?>/quem-somos/">Quem somos</a></li>
                        <li class="<?php echo $c_slug == "contato" ? "active" : ""?>"><a href="<?php echo home_url() ?>/contato/">Contato</a></li>
                        <li><a class="logo-vmax"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/v-max.png" /></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End Header-->
