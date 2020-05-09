<section class="profile">
    <div class="container">
        <h2 class="d-none d-sm-block">Добро пожаловать в личный кабинет</h2>
        <h3 class="d-block d-sm-none">Добро пожаловать в личный кабинет</h3>
        <p class="mb-sm-4 pb-3">Pariatur ex ipsum sit cillum eiusmod exercitation exercitation velit deserunt excepteur veniam nostrud.</p>
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