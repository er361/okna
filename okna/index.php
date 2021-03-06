<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/extra/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
		<link rel="stylesheet" type="text/css" href="public/css/media.css">
		
		<script type="text/javascript" src="public/js/jquery.js"></script>
		<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="public/js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="public/js/owl.carousel.js"></script>
		<script type="text/javascript" src="public/js/script.js"></script>
		<script type="text/javascript" src="public/js/scrolling-nav.js"></script>
		
		<title>Окна</title>
	</head>
	
	<body id="page-top">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top"><img src="public/img/logo.png" alt=""></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden"> <a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="#page-top">Главная <span class="sr-only">(current)</span></a></li>
						<li><a class="page-scroll" href="#jobs">Как мы работаем</a></li>
						<li><a class="page-scroll" href="#advice">Советы</a></li>
						<li><a class="page-scroll" href="#mypartners">Партнеры</a></li>
						<li><a class="page-scroll" href="#sertificate">Сертификаты</a></li>
						<li><a class="page-scroll" href="#contt">Контакты</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
        
		<script>
			function zsheight(div) { $(function() {
				var h = 0;
				$(div).each(function() {
					if ($(this).height() > h) {
						h = $(this).height();
					} });
					$(div).height(h);
			}); }
		</script>
		
        <div class="slider">
        	<div class="contacts hidden-xs">
                <div class="cont--contacts">
                    <div class="left--contacts">
                        <div class="heading--contacts">Наши контакты</div>
                        <div class="ss--contacts">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
						</div>
					</div>
                    <div class="right--contacts">
                        <div class="right1--contacts">
                            <div class="unit--contacts">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>abcdef@gmail.com
							</div>
                            <div class="unit--contacts">
                                <i class="fa fa-phone" aria-hidden="true"></i>+7 777 123 45 46
							</div>
						</div>
                        <div class="right2--contacts">
                            <div class="unit--contacts">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>г. Астана, ул. Пушкина 33/3
							</div>
                            <div class="unit--contacts">
                                <a href="#">Оставить заявку</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="controls--slider">
            	<a href="#prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a href="#next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
        	<div class="right--slider">
            	<div>Уникальное торговое предложение</div>
			</div>
        	<div id="slider" class="owl-carousel">
        		<div class="page--slider"><img src="public/img/slider.jpg" alt=""></div>
                <div class="page--slider"><img src="public/img/slider.jpg" alt=""></div>
                <div class="page--slider"><img src="public/img/slider.jpg" alt=""></div>
			</div>
		</div>
		
		<section class="new-items">
			<div class="heading--section">
				<h2>Новое поступление</h2>
				<div class="subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, assumenda, quibusdam, doloremque</div>
			</div>
			<div class="container-fluid"><div class="row">
				<div class="col-md-3">
					<div class="item--new">
						<div class="img--new">
							<img width="100%" src="/img/w1.jpg" alt="">
						</div>
						<div class="text--new">Окна в Астане выбрать не легко. На рынке очень много производителей и много рекламы вводящей в заблуждение. Поэтому мы рекомендуем довериться специалистам в сфере светопрозрачных конструкций.<br><br>
							
							Во время замены окон в квартире, возникают множество вопросов. Какой профиль, стеклопакет и фурнитуру выбрать? <br><br>
							
							Мы поможем подобрать удобную и эффективную комплектацию для Вашего окна.
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item--new">
						<div class="img--new">
							<img width="100%" src="/img/w2.jpg"" alt="">
							</div>
							<div class="text--new">Микроклимат в частном доме собственным отоплением, часто отличается от  многоквартирных домов с центральным отоплением.<br><br>  
							
							Система отопления, индивидуальное строение, система вытяжки и проветривания, а так же толщина стен, все это влияет на микроклимат в доме. Отсюда и подход к светопрозрачным конструкциям должен быть другой.<br>
							
							Мы дадим несколько советов и решение для выбора окон в частный дом.
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item--new">
						<div class="img--new">
							<img width="100%" src="/img/w3.jpg"" alt="">
							</div>
							<div class="text--new">Чтоб оградить холодный балкон от отапливаемого жилого помещения, используют несколько вариантов конструкций:<br><br>
							
							Классический вариант — металлопластиковая дверь с окном;<br>
							PSK-Portal- Параллельно-сдвижная система. 
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item--new">
						<div class="img--new">
							<img width="100%" src="/img/w4.jpg"" alt="">
							</div>
							<div class="text--new">В последнее время становится актуальным вопрос безопасности жилых помещений. Этот вопрос не обходит стороной и светопрозрачные конструкции.<br><br>
							
							Что мы можем сделать, чтоб повысить уровень безопасности Ваших окон?
						</div>
					</div>
				</div>            
			</div></div>
		</section>
		
		<div id="jobs" class="container-fluid our-work">
			<div class="row">
				<div class="heading--section">
					<h2>Как мы работаем</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work1.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work2.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work3.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work4.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work5.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work6.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work7.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work8.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work9.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 our-wok-body">
					<div class="img--work">
						<img src="public/img/work10.png" alt="">
					</div>
					<div class="text--work">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cupiditate quo aut quod suscipit distinctio sapiente temporibus inventore consequatur incidunt.</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				zsheight('.our-wok-body');
			});
		</script>
		<section class="advice grey">
			<div class="container-fluid"><div class="row">
				<div class="col-md-6">
					<div class="cont-video--advice">
						<iframe width="100%" height="400px" src="https://www.youtube.com/embed/eQit9AkVKDo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6 right">
					<div class="heading-half" id="advice">Полезные советы</div>
					<div class="descr-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, quam facilis neque sequi molestiae doloremque perferendis blanditiis repellendus ipsum asperiores eligendi quidem quas magni aspernatur fugit nihil expedita voluptas dolores!</div>
				</div>
			</div></div>
		</section>
		
		<section class="partners">
			<div class="container-fluid"><div class="row">
				<div class="col-md-6">
					<div class="heading-half" id="mypartners">Наши партнеры</div>
					<div class="descr-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, quam facilis neque sequi molestiae doloremque perferendis blanditiis repellendus ipsum asperiores eligendi quidem quas magni aspernatur fugit nihil expedita voluptas dolores!</div>
				</div>
				<div class="col-md-6">
					<div class="cont--partners">
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
						<div class="logo--partner"><img src="public/img/partner.png" alt=""></div>
					</div>
				</div>
			</div></div>
		</section>
		
		<section class="cert grey">
			<div class="container-fluid"><div class="row">
				<div class="col-md-6 right">
					<div class="heading-half" id="sertificate">Наши сертификаты</div>
					<div class="descr-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, quam facilis neque sequi molestiae doloremque perferendis blanditiis repellendus ipsum asperiores eligendi quidem quas magni aspernatur fugit nihil expedita voluptas dolores!</div>
				</div>
				<div class="col-md-6">
					<div class="cont--partners">
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
						<div class="photo--cert"><img src="public/img/cert.jpg" alt=""></div>
					</div>
				</div>
			</div></div>
		</section>
		
		<footer id="contt">
			<div class="cont--footer">
				<div class="col-md-6">
					<div class="logo--footer"><img src="public/img/logo.png" alt=""></div>
					<div class="p--footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, aperiam, corrupti veritatis perferendis vero ratione cumque possimus ullam veniam molestiae molestias repellendus debitis facilis rerum excepturi quam adipisci repellat quaerat?</div>
				</div>
				<div class="col-md-6">
					<div class="text--footer">
						<div class="heading--footer"><span>Контакты</span></div>
						<div class="contacts--footer">
							<div><b>Адрес:</b> г.Астана, ул. Пушкина</div>
							<div><b>Телефон:</b> +7 777 777 77 77</div>
							<div><b>E-mail:</b> abcdef@gmail.com</div>
							<div><b>Вконтакте:</b> <a href="#">Armada Win</a></div>
							<div><b>Instagram:</b> <a href="#">Armada Win</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(document).on('click','.navbar-collapse.in',function(e) {
				if( $(e.target).is('a') ) {
					$(this).collapse('hide');
				}
			});
		</script>	
	</body>
</html>
