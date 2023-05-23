
jQuery(document).ready(function ($) {

   $(".media.media-video").click(function (e) {
       var attr = $(this).attr("data-videoID");
       var title = $(this).children('.media-body.pos-r').children('h5').html();
       var subtitle = $(this).children('.media-body.pos-r').children('span').not('.time').html();
       var iframe = undefined;
       
       $(".media.media-video").removeClass('active');
       $(this).addClass('active');
       
       $(this).parent().parent().parent().parent().children().each(function(i, el) {
           if ($(el).children().children('iframe').length > 0) {
               iframe = $(el).children().children('iframe');
                $(iframe).attr('src',"https://www.youtube.com/embed/" + attr);
                $('#modulo1 iframe').attr('src',"https://www.youtube.com/embed/" + attr + "?rel=0");
           }
           if ($(el).children('.description-video').length > 0) {
               $(el).children('.description-video').children('h4').text(title);
               $('#modulo1 h4').text(title);
               $(el).children('.description-video').children('p').text(subtitle);
           }
       });
       
       if($(window).width() < 768) {
        $('#modulo1').modal('show');
       }
       
   });
   
   $('#submit_form').html('<i class="glyphicon glyphicon-menu-right"></i>ENVIAR');

});