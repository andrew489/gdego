<ul class="mt-3 " id="cl-events" styles="background:#F1F3F5;">
            <?
            $arrays = array(                
                array('img'=>'/img/eat-2.png','href'=>'/product.php'),
                array('img'=>'/img/eat-3.png','href'=>'/product.php'),
                array('img'=>'/img/eat-1.png','href'=>'/product.php'),
                array('img'=>'/img/eat-2.png','href'=>'/product.php'),
                array('img'=>'/img/eat-1.png','href'=>'/product.php'),
                array('img'=>'/img/eat-2.png','href'=>'/product.php'),
                array('img'=>'/img/eat-3.png','href'=>'/product.php'),
            );
            foreach($arrays as $array){
                include('card/menu_kitchen_slide.php');
            }?>
</ul>

<div class="container menu_page">
    <div class="mt-3 mb-2">
	    <h2>Titel</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus aliquet faucibus at sollicitudin. Dolor vestibulum pellentesque sit a viverra nam at integer vestibulum. Purus condimentum sem non nulla sollicitudin pharetra turpis massa. Facilisi bibendum consequat, donec neque magnis a senectus id purus. Sed blandit cursus ac sit pellentesque. Dui tellus placerat enim, facilisis morbi morbi neque, integer morbi. Condimentum massa quis est ac eget velit. Interdum nisl cras non eget suspendisse facilisis pellentesque quis. Faucibus ac sed orci, a dui turpis. Ut quisque dignissim magna diam consectetur. Sollicitudin lectus enim sit suspendisse velit massa. Quam facilisis ipsum risus tortor at semper a faucibus.</p>
    </div>  
</div>


<link rel="stylesheet"  href="/css/lightslider.css"/>
<script src="/js/lightslider.js"></script>
<script>
    $(document).ready(function(){
        $('#cl-events').lightSlider({
            item:3,
            loop:true,
            controls:false,
            slideMove:2,
            currentPagerPosition:'middle',
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                    }
                }
            ]
        });
        $("#cl-advice, #cl-advice2").lightSlider({
            item:5,
            loop:true,
            controls:false,
            autoWidth:true,
            slideMargin:15,
            currentPagerPosition:'middle',
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                    }
                }
            ]
        });

    });
</script>



