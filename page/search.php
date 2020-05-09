<section class="search pt-5">
    <div class="container pt-4">
        <h2 class="d-none d-sm-block">Результаты поиска</h2>
        <h3 class="d-block d-sm-none mt-3" >Результаты поиска</h3>
        <p class="mb-4">Поиск по {{ запрос / тег }} {{ item.search }}  pariatur ex ipsum sit cillum eiusmod exercitation exercitation velit deserunt excepteur veniam nostrud.</p>
        <ul id="tags" class="row pr-0 pl-0 pl-0 pr-0" style="list-style: none">
            <?
            $tags=array(
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
              array('href'=>'/search.php','name'=>'tagName'),
            );
            foreach ($tags as $e){
                include('card/tag.php');
            }
            ?>
        </ul>
        <div class="mt-sm-3">
            <? $search=array(
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
            );?>

            <? foreach ($search as $e){
                include('card/company_row.php');
            }?>
        </div>
    </div> <!-- container -->
</section>
<link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
<script src="/js/lightslider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        if($(document).width()<540) {
            $("#tags").lightSlider({
                item: 3,
                autoWidth: true,
                slideMove: 2, // slidemove will be 1 if loop is true
                slideMargin: 10,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 400, //ms'
                auto: false,
                loop: false,
                slideEndAnimation: true,
                pause: 2000,

                keyPress: false,
                controls: false,
                prevHtml: '',
                nextHtml: '',

                rtl: false,
                adaptiveHeight: false,

                vertical: false,
                verticalHeight: 500,
                vThumbWidth: 100,

                thumbItem: 10,
                pager: false,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',

                enableTouch: true,
                enableDrag: true,
                freeMove: true,
                swipeThreshold: 40,

                responsive: [],
            });
        }
    });
    </script>