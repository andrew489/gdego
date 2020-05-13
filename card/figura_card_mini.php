<? foreach ($array_figura as $figura){?>
    <div class="row mb-4">
        <div class="col-<?=isset($figura['a_text'])?'7':'12'?>"><<?=$figura['tag']?>><?=$figura['title']?></<?=$figura['tag']?>></div>
        <? if(isset($figura['a_text'])){?><div class="col-5"><a href="<?=$figura['a_href']?>" class="brown-color float-right text-decoration-underline"><?=$figura['a_text']?></a></div><? } ?>
    </div>
    <div class="row mb-4">
        <? foreach ($figura['elements'] as $e) {?>
            <div class="col-3 block_figura_card">
                <figure class="figure">
                   <div></div>
                    <img src="<?=$e['src']?>" alt="<?=$e['alt']?>" class="figure-img img-fluid rounded position-absolute">
                    <span class=" position-relative  bookmark  mb-5 mt-4 ml-3 mt-4 mdi mdi-bookmark-outline mdi-24px brown-color"></span>
                    <figcaption class="position-relative mt-5 shadow"><<?=$e['tag']?>><?=$e['title']?></<?=$e['tag']?>><?=$e['text']?></figcaption>
                </figure>
            </div>
        <? } ?>
    </div>
<? } ?>