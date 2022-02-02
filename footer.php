<footer class="main-footer">
        <div class="container footer-wrapper">
            <div class="footer-left">
                <p class="footer--offer">Сайт не является публичной офертой</p>
            </div>
            <div class="footer-center">
                <!-- <h2>Мы в социальных сетях</h2> -->
                <div class="footer--link-list">
                    <a href="https://www.instagram.com/ajp_auction/">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.svg" width="30" height="30" alt="">
                    </a>
                </div>
            </div>
            <div class="footer-right">
                <p>Разработчик: Александр Дергунов</p>
            </div>
        </div>
    </footer>
    <section class="modal modal--ask">
        <h2 class="title">Задать вопрос</h2>
        <p class="modal--subtitle">Пожалуйста, заполните представленные ниже поля</p>
        <?php echo do_shortcode('[contact-form-7 id="252" class="form" title="Форма обратной связи"]') ?>
		<p class='agree'>
				<input type='checkbox' id='ask--agree'>
				<label for='ask--agree'>Заполняя форму я подтверждаю <a href='#'>согласие</a> на обработку персональный данных</label>
			</p>
        <button class="modal--close">Закрыть</button>
    </section>

    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/script.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(86858402, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/86858402" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(87012353, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/87012353" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html>