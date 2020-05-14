<? foreach ($array_figura as $figura){?>
    <div class="row mb-4">
        <div class="col-<?=isset($figura['a_text'])?'7':'12'?>"><<?=$figura['tag']?>><?=$figura['title']?></<?=$figura['tag']?>></div>
        <? if(isset($figura['a_text'])){?><div class="col-5"><a href="<?=$figura['a_href']?>" class="brown-color float-right text-decoration-underline"><?=$figura['a_text']?></a></div><? } ?>
    </div>
    <div class="row mb-4">
        <? foreach ($figura['elements'] as $e) {?>
            <div class="col-12 col-sm-6 col-lg-3  mt-5 mt-lg-0 mx-auto block_figura_card">
                <figure class="figure">
                   <div class=" position-absolute d-flex flex-column justify-content-around  pl-2 h-100 mr-3 mr-xl-0 ">
                        <span class=" position-relative  bookmark  mdi mdi-bookmark-outline mdi-24px brown-color"></span>
                        <figcaption class="position-relative  shadow"><<?=$e['tag']?>><?=$e['title']?></<?=$e['tag']?>><?=$e['text']?></figcaption>
                    </div>
                    <img src="<?=$e['src']?>" alt="<?=$e['alt']?>" class="figure-img img-fluid rounded ">
                </figure>
            </div>
        <? } ?>
    </div>
<? } ?>