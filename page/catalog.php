<div class="container catalog">
    <h2 class="mt-5 d-none d-sm-block">Каталог {{ item.name }}</h2>
    <h3 class="mt-5 d-block d-sm-none">Каталог {{ item.name }}</h3>
    <? include('blocks/sort-panel.php'); ?>
    <? include('blocks/map-pannel.php'); ?>
    <div class="row pl-0 pr-3 pl-sm-3">
        <div class="col-12 col-sm-4 sidebar pb-4 pb-sm-0"><? include('blocks/sidebar.php'); ?></div>
        <div class="col-12 col-sm-8 p-0">
            <div class="row  pl-0 pl-sm-3 pt-4  pt-sm-0">
                <div class="col ml-0  ">
                    <?
                    $comps=array(
                            array('id'=>'slider1','imgs'=>array(array('src'=>'../img/company-slider1.png','title'=>'slider1'),array('src'=>'../img/company_slider2.png','title'=>'slider2'),array('src'=>'../img/company_slider3.png','title'=>'slider3')),'title'=>'Title','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                            array('id'=>'slider2','imgs'=>array(array('src'=>'../img/company-slider1.png','title'=>'slider1'),array('src'=>'../img/company_slider2.png','title'=>'slider2'),array('src'=>'../img/company_slider3.png','title'=>'slider3')),'title'=>'Title','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                            array('id'=>'slider3','imgs'=>array(array('src'=>'../img/company-slider1.png','title'=>'slider1'),array('src'=>'../img/company_slider2.png','title'=>'slider2'),array('src'=>'../img/company_slider3.png','title'=>'slider3')),'title'=>'Title','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.','bookmark'=>1)
                    );
                    foreach ($comps as $e) {
                        include('card/company_card_mini_slider.php');
                    }
                    ?>
                </div>
            </div>
            <? $array=array('href'=>'#','alt'=>'...','src'=>'../img/banner.png');?>
            <div class="mb-3 pb-3 ml-3"><? include('card/banner.php')?></div>
            <div class="row">
                <div class="col ml-0 ml-sm-3 mt-3">
                    <h3 class="mb-3 d-none d-sm-block">{{ city.name }}: Лучшие {{ category.name }} в городе</h3>
                    <h4 class="mb-3 d-sm-none d-block">{{ city.name }}: Лучшие {{ category.name }} в городе</h4>
                </div>
            </div>
            <div class="row">
                <div class="col ml-0 ml-sm-3 mt-3">
                    <?
                    $comps=array(
                        array('id'=>'slider4','imgs'=>array(array('src'=>'../img/company-slider1.png','title'=>'slider1'),array('src'=>'../img/company_slider2.png','title'=>'slider2'),array('src'=>'../img/company_slider3.png','title'=>'slider3')),'title'=>'Title','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                    );
                    foreach ($comps as $e) {
                        include('card/company_card_mini_slider.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
