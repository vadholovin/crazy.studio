<!--start footer-->
<div id="footer">
    <div class="container">
      <div class="sixteen columns"> 
        <p class="copyright">&copy; Crazy Studio <?php the_date( 'Y' ); ?></p>
      </div>
    </div>
  </div>
<!--end footer-->

<?php wp_footer(); ?>

<script type="text/javascript">
  function moveTo(contentArea){
    var goPosition = $(contentArea).offset().top;
    $('html,body').animate({ scrollTop: goPosition}, 'slow');
  }
</script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    
    $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
    $(".contactDetails a[rel^='prettyPhoto']:first").prettyPhoto({
      custom_markup: '<div id="map_canvas" style="width:500px; height:500px"></div>',
      changepicturecallback: function(){ initialize(); }
    });
  });
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47050185 = new Ya.Metrika({
                    id:47050185,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47050185" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'Kw1C9Eckwr';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>