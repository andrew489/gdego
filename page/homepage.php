<?
$array=array('control_panel'=>true, 'id'=>'carouselHome', 'text-width'=>'w-50',
    'elements'=>array(
        array('img'=>'/slider/slide-1.jfif','href'=>'/catalog.php','alt'=>'...','title'=>'First slide label','tag'=>'h1','text'=>'Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.'),
        array('img'=>'/slider/slide-2.jfif','href'=>'/catalog.php','alt'=>'...','title'=>'Two slide label','tag'=>'h2','text'=>'Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.'),
    )
);
include('blocks/slider-main.php');?>
<div class="mt-5 mt-md-0">
<?
include('blocks/search-pannel.php'); ?>
</div>
<div class="container">
    <div class="row">
        <?
        $arrays = array(
            array('icon'=>'silverware','text'=>'Еда','href'=>'/catalog.php'),
            array('icon'=>'cart-arrow-down','text'=>'Шопинг','href'=>'/catalog.php'),
            array('icon'=>'car-info','text'=>'Авто','href'=>'/catalog.php'),
            array('icon'=>'airballoon','text'=>'Развлечения','href'=>'/catalog.php'),
            array('icon'=>'book-open-page-variant','text'=>'Культура','href'=>'/catalog.php'),
            array('icon'=>'video-vintage','text'=>'Кинотеатры','href'=>'/catalog.php')
        );
        foreach($arrays as $array){
           include('card/services-small.php');
        }?>
    </div>
    <div class="more_places mt-3 mt-md-5 text-center text-md-right brown-color mb-3 mb-md-0>
        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Еще места
        </a>
        <div class="dropdown-menu dropdown-menu-right w-25 border-0 shadow text-justify">
            <a href="#" class="dropdown-item text-100 pt-3 pb-2"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
        </div>
    </div>
    <div class="row">
        <div class="col pl-0 text-center text-md-left">
            <h2 class="d-none d-sm-block">Рекомендации для вас</h2>
            <h3 class="d-sm-none">Рекомендации для вас</h3>
        </div>
    </div>
</div>
<ul class="mt-3 mt-md-5 "  id="cl-advice">
            <?
            $arrays = array(
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','text'=>'Сеть закусочных “DAMI”'),
                array('img'=>'/slider/coffe-3.jfif','href'=>'/product.php','raitting'=>3,'text'=>'Сеть закусочных “DAMI”','comment'=>1900,'bookmark'=>0),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
                array('img'=>'/slider/coffe-3.jfif','href'=>'/product.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1.5,'text'=>'Сеть закусочных “DAMI”','comment'=>5500,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1.5,'text'=>'Сеть закусочных “DAMI”','comment'=>5500,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
                array('img'=>'/slider/coffe-3.jfif','href'=>'/product.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
                array('img'=>'/slider/coffe-3.jfif','href'=>'/product.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
                array('img'=>'/slider/coffe-3.jfif','href'=>'/product.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
                array('img'=>'/slider/coffe-4.jfif','href'=>'/product.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
            );
            foreach($arrays as $array){
                include('card/advice.php');
            }?>
</ul>
<div class="container mt-3 mt-md-5">
    <div class="row">
        <div class="col-12 col-md-9 text-center text-md-left">
            <h2 class="d-none d-sm-block">Ближайшие события</h2>
            <h3 class="d-sm-none">Ближайшие события</h3>
        </div>
        <div class="col-12 col-md-3 text-center text-md-right align-self-center">
            <a href="/catalog.php" class="brown-color text-decoration-underline pr-4">Бесплатно</a>
            <a href="/catalog.php" class="brown-color text-decoration-underline pl-4 border-left">Все события</a>
        </div>
    </div>
</div>
<ul class="mt-3 mt-md-5" id="cl-events">
            <?
            $arrays = array(
                array('img'=>'/slider/coffe-1.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'18+','text'=>'Сеть закусочных “DAMI”'),
                array('img'=>'/slider/coffe-1.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'3+','text'=>'Выставка каникулярных программ Language Fair 2020 ','price'=>'от 1000 ₽','bookmarks'=>0),
                array('img'=>'/slider/coffe-2.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'2+','text'=>'Выставка каникулярных программ Language Fair 2020','price'=>100,'bookmarks'=>0),
                array('img'=>'/slider/coffe-1.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'2.8+','text'=>'Сеть закусочных “DAMI”','price'=>10,'bookmarks'=>1),
                array('img'=>'/slider/coffe-2.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'1+','text'=>'Выставка каникулярных программ Language Fair 2020 ','price'=>190,'bookmarks'=>0),
                array('img'=>'/slider/coffe-1.jfif','href'=>'/product.php','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'1.5+','text'=>'Сеть закусочных “DAMI”','price'=>5500,'bookmarks'=>1)
            );
            foreach($arrays as $array){
                include('card/events.php');
            }?>
</ul>
<div class="container mt-3 mt-md-5">
    <div class="row">
        <div class="col-12 pl-md-0 text-center text-md-left">
            <h2 class="d-none d-sm-block">Ближайшие события</h2>
            <h3 class="d-sm-none">Ближайшие события</h3>
        </div>
    </div>
</div>
<ul class="mt-3 mt-md-5"  id="cl-advice2">
    <?
    $arrays = array(
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','text'=>'Сеть закусочных “DAMI”'),
        array('img'=>'/slider/coffe-3.jfif','href'=>'/catalog.php','raitting'=>3,'text'=>'Сеть закусочных “DAMI”','comment'=>1900,'bookmark'=>0),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
        array('img'=>'/slider/coffe-3.jfif','href'=>'/catalog.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>1.5,'text'=>'Сеть закусочных “DAMI”','comment'=>5500,'bookmark'=>1),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>1.5,'text'=>'Сеть закусочных “DAMI”','comment'=>5500,'bookmark'=>1),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
        array('img'=>'/slider/coffe-3.jfif','href'=>'/catalog.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
        array('img'=>'/slider/coffe-3.jfif','href'=>'/catalog.php','raitting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0),
        array('img'=>'/slider/coffe-4.jfif','href'=>'/catalog.php','raitting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0),
    );
    foreach($arrays as $array){
        include('card/advice.php');
    }?>
</ul>

<link rel="stylesheet"  href="/css/homepage.css"/>
<link rel="stylesheet"  href="/css/lightslider.css"/>
<script src="/js/lightslider.js"></script>
<script>
    $(document).ready(function(){
        $('#cl-events').lightSlider({
            item:4,
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
            item:6,
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