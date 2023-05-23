<?php 
/* Template Name: Política de Privacidade */

get_header();
?>

    <div class="container-fluid no-padding pos-r" style="margin-top: 70px;background:url('http://pecuariaeficiente.com.br/wp-content/uploads/2018/07/bg-politica.png');background-repeat:repeat-x; background-position:fixed; background-size:cover;">
        <div class="container">
            <div class="row spaced-title">
                <div class="col-sm-12">
<?php
$my_postid = 48;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;

?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();