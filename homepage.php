<div id="carouselHome" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/slider/slide-1.jfif" class="d-block w-100" alt="...">
            <div class="container carousel-caption d-none d-md-block ml-0">
                <div class="row">
                    <h1>First slide label</h1>
                    <p>Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/slider/slide-2.jfif" class="d-block w-100" alt="...">
            <div class="container carousel-caption d-none d-md-block ml-0">
                <h3>Second slide label</h3>
                <p>Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.</p>
            </div>
        </div>
    </div>
<!--    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">-->
<!--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">-->
<!--        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Next</span>-->
<!--    </a>-->
</div>
<? include('search-pannel.php'); ?>

<div class="container">
    <div class="row">
        <?
        $arrays = [['icon'=>'silverware','text'=>'Еда','href'=>'#'],['icon'=>'cart-arrow-down','text'=>'Шопинг','href'=>'#'],['icon'=>'car-info','text'=>'Авто','href'=>'#'],['icon'=>'airballoon','text'=>'Развлечения','href'=>'#'],['icon'=>'book-open-page-variant','text'=>'Культура','href'=>'#'],['icon'=>'video-vintage','text'=>'Кинотеатры','href'=>'#']];
        foreach($arrays as $array){
           include('card/services-small.php');
        }?>
    </div>
    <div class="more_places mt-5 brown-color>
        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Еще места
        </a>
        <div class="dropdown-menu dropdown-menu-right w-25 border-0 shadow text-justify">
            <a href="#" class="dropdown-item text-100 pt-3 pb-2" type="button"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2" type="button"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2" type="button"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2" type="button"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
            <a href="#"  class="dropdown-item text-100 pt-1 pb-2" type="button"><span class="mdi mdi-view-dashboard-outline mdi-24px pr-2 mb-2"></span>Lorem ipsum</a>
        </div>
    </div>
    <div class="row">
        <div class="col"><h2>Рекомендации для вас</h2></div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <?
        $arrays = [
            ['img'=>'/slider/coffe-4.jfif','text'=>'Сеть закусочных “DAMI”'],
            ['img'=>'/slider/coffe-3.jfif','raiting'=>3,'text'=>'Сеть закусочных “DAMI”','comment'=>1900,'bookmark'=>0],
            ['img'=>'/slider/coffe-4.jfif','raiting'=>2,'text'=>'Сеть закусочных “DAMI”','comment'=>100,'bookmark'=>0],
            ['img'=>'/slider/coffe-3.jfif','raiting'=>2.8,'text'=>'Сеть закусочных “DAMI”','comment'=>10,'bookmark'=>1],
            ['img'=>'/slider/coffe-4.jfif','raiting'=>1,'text'=>'Сеть закусочных “DAMI”','comment'=>190,'bookmark'=>0],
            ['img'=>'/slider/coffe-4.jfif','raiting'=>1.5,'text'=>'Сеть закусочных “DAMI”','comment'=>5500,'bookmark'=>1]];
        foreach($arrays as $array){
            include('card/advice.php');
        }?>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-9"><h2>Ближайшие события</h2></div><div class="col-3 align-self-center"><a href="#" class="brown-color text-decoration-underline pr-4">Бесплатно</a><a href="#" class="brown-color text-decoration-underline pl-4 border-left">Все события</a></div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <?
        $arrays = [
            ['img'=>'/slider/coffe-1.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'18+','text'=>'Сеть закусочных “DAMI”'],
            ['img'=>'/slider/coffe-1.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'3+','text'=>'Выставка каникулярных программ Language Fair 2020 ','price'=>'от 1000 ₽','bookmarks'=>0],
            ['img'=>'/slider/coffe-2.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'2+','text'=>'Выставка каникулярных программ Language Fair 2020','price'=>100,'bookmarks'=>0],
            ['img'=>'/slider/coffe-1.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'2.8+','text'=>'Сеть закусочных “DAMI”','price'=>10,'bookmarks'=>1],
            ['img'=>'/slider/coffe-2.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>0,'age_cens'=>'1+','text'=>'Выставка каникулярных программ Language Fair 2020 ','price'=>190,'bookmarks'=>0],
            ['img'=>'/slider/coffe-1.jfif','href'=>'#','date'=>'5–6 марта 11:00–20:00','bookmark'=>1,'age_cens'=>'1.5+','text'=>'Сеть закусочных “DAMI”','price'=>5500,'bookmarks'=>1]];
        foreach($arrays as $array){
            include('card/events.php');
        }?>
    </div>
</div>
<link rel="stylesheet" href="/css/homepage.css" />
