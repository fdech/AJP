<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="yandex-verification" content="b286acdd2768c990" />
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <?php wp_head();?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q7FJKN35N9"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-Q7FJKN35N9');
	</script>
	
</head>
<body>
    <div class="container nav-container">
        <nav class="main-nav main-nav--closed">
            <div class="main-nav--wrapper">
                <button class="main-nav__toggle " type="button"></button>
            </div>
            <p class="main-nav--title-mobile"><a href='https://alljp.ru/'>AJP</a></p>
            <ul class="nav-list">
                <li class="nav-item logo"><?php the_custom_logo(); ?></li>
                <li class="nav-item"><a href="http://alljp.ru/katalog-avtomobilej/">Каталог</a></li>
                <li class="nav-item"><a href="http://alljp.ru/aukczion/">Онлайн аукцион</a>
				<li class="nav-item"><a href="https://alljp.ru/kak-kupit/">Как купить</a></li>
<!--                     <ul class="subnav-menu">
                        <li class="subnav-item"><a href="http://alljp.ru/aukczion/">Калькулятор авто под полную пошлину</a></li>
                        <li class="subnav-item"><a href="http://alljp.ru/aukczion/">Калькулятор распилов и конструкторов</a></li>
                    </ul> -->
                </li>
                <li class="nav-item"><a href="http://alljp.ru/o-kompanii/">О компании</a></li>
                
                <li class="nav-item"><a href="http://alljp.ru/kontakty/">Контакты</a></li>
            </ul>
            <div class="nav-number_block">
                <p class="nav-number"> <a href="tel:84212477767">8(4212) 47-77-67</a></p>

                <p class="nav-subnumber">Контактный телефон</p>
            </div>
            <div class="nav-ask">
                <a class="ask-button" href="#">Задать вопрос</a> 
             </div>
        </nav>
    </div>