<section class="stocks mt-md-4 mt-3">
    <div class="container">
        <h2>Акции и скидки</h2>
        <p class="mb-sm-4 pb-3">Pariatur ex ipsum sit cillum eiusmod exercitation exercitation velit deserunt excepteur veniam nostrud.</p>
        <div class="d-flex justify-content-center mb-sm-3 pb-sm-3 mb-0 pb-0" >
        <a href="#" class="banner d-none d-sm-block"><img src="../img/stocks_banner.png" alt="banner"></a>
        </div>
        <? $stoks=array(
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
                array('title'=>'Title','src'=>'/img/stocks_img1.png', 'alt'=>'...', 'tag'=>'h3','href'=>'/product.php','raitting'=>4,'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare vulputate sed imperdiet nec purus. Ullamcorper tortor nisi, sed viverra pulvinar feugiat ante. Bibendum cum erat libero aliquet ipsum porta in amet, feugiat. Mattis placerat integer donec pharetra dictum. Egestas senectus eget vitae, id viverra purus rhoncus. Quis viverra dui magna in ut.'),
        );?>

        <? foreach ($stoks as $e){
            include('card/company_row.php');
        }?>
    </div>
</section>