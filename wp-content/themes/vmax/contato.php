<?php 
/* Template Name: Contato */

get_header();
?>

<div class="container-fluid no-padding contato pos-r" style="margin-top: 150px;">
        <div class="container">
        <div class="spaced-title clearfix">
            <div class="col-sm-5">
                <h2>
                    <span class="font-light-italic text-uppercase color-brow">Chegou a hora de entrar</span><br>
                    <span class="font-light-italic text-uppercase color-brow">em uma</span> <span class="font-light-italic text-uppercase">nova era</span><br>
                    <span class="font-light-italic text-uppercase color-brow">da pecuária.</span>
                    <p class="font-light-italic spaced-title">Entre em contato com a gente e agende uma visita. </p>
                    <p class="font-light-italic">Vamos estudar todos os detalhes da sua propriedade e mostrar onde e como V-MAX<sup>®</sup> pode te ajudar a alcançar melhores resultados.</p>
                    <p class="">SAC: 0800 722 8011</p>
                </h2>
            </div>
            <div class="col-sm-offset-1 col-sm-6">
                <div class="row">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]')?>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php
get_footer();