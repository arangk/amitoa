<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-script-type" content="text/javascript">

	<script	src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script	src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<link rel="stylesheet" href="<?=base_url('/static/scss/main.css')?>">
	<link rel="stylesheet" href="<?=base_url('/static/scss/foundation.css')?>">

	<title>AMITOA</title>
</head>
<body>
<div class="inner">
	<div class="header">
		<div class="header_inner">
			<ul>
				<li id="home"><?=$this->lang->line('home')?></li>
				<li id="lang"><span><?=strtoupper($lang)?></span><span class="flag_<?=$lang?>"></span>
					<ul class="lang_down">
						<li id="en"><i class="fal fa-check"></i>EN<span class="flag_en"></span></li>
						<li id="nl"><i class="fal fa-check"></i>NL<span class="flag_nl"></span></li>
					</ul>
				</li>
				<li id="portfolio"><?=$this->lang->line('portfolio')?></li>
				<li id="about"><?=$this->lang->line('about')?></li>
			</ul>
		</div>
	</div>
	<script>
		(function($){
			$('.header').find('#home').click(function(){
                if($(window).scrollTop() >= 50){
                    $('html, body').animate({scrollTop: 0}, 500);
                }else{
                    location.href="<?=base_url('/')?>";
                }

			});
			$('.header').find('#lang').mouseover(function(){
				$('.lang_down').slideDown().mouseleave(function(){
					$('.lang_down').slideUp();
				});
			});

			$('.header').find('.lang_down').find('li').click(function(){
				var id = $(this).attr('id');
				location.href = "<?=base_url()?>?lang="+id;
			});

			$('.header').find('.lang_down').find('#<?=$lang?>').addClass('selected');

			/* show header*/
            $(window).scroll(function() {
                var scroll_top = $(window).scrollTop();
                if(scroll_top >= 50){
                    $('.header').slideDown();
                }else{
                    $('.header').slideUp();
                }
            });


		})(jQuery);
	</script>
