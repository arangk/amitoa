<div class="container">
	<div class="container_main">
        <div class="container_main_bg">
            <div class="container_main_star"></div>
            <div class="container_main_tree"></div>
        </div>
		<div class="main_txt">
			<p id="name">Arang Kim</p>
			<p id="occupation"><?=$this->lang->line('occupation')?></p>
            <div class="down_btn"><i class="far fa-angle-double-down" data-scroll-target="container_about"></i></div>
		</div>
	</div>
	<div class="container_about">
		<div class="about_txt">
			<p><?=$this->lang->line('greeting')?></p>
			<p><?=$this->lang->line('welcome')?></p>
		</div>
		<div class="detail_btn">-></div>
	</div>
</div>
<script>
    (function($){
        /* background star rotating */
        var angle = 0;
        setInterval(function(){
            angle+=0.5;
            var angle_txt = 'rotate('+angle+'deg)';
            $('.container_main_star').css('transform', angle_txt);
        },100);

        /* click the main scroll down */
        $('.down_btn').find('i').click(function(e){
            var target = $(e.currentTarget);
            main_scroll_down(target);
        });

        /* main mousewheel */
        $('.container_main').on('mousewheel DOMMouseScroll', function(){
            var target = $('.down_btn').find('i');
            main_scroll_down(target);
        });

        /* main scroll function */
        function main_scroll_down(target){
            var body = $('html, body'),
                top_div = target.data('scroll-target'),
                top_po = $('.'+top_div).offset().top - body.offset().top + body.scrollTop();
            console.log(top_po);
            body.animate({scrollTop: top_po-50}, '500');
        }

    })(jQuery);
</script>
