<? foreach ($array_figura as $figura){?>
    <div class="row mb-4">
        <div class="col-<?=isset($figura['a_text'])?'7':'12'?>"><<?=$figura['tag']?>><?=$figura['title']?></<?=$figura['tag']?>></div>
        <? if(isset($figura['a_text'])){?><div class="col-5"><a href="<?=$figura['a_href']?>" class="brown-color float-right text-decoration-underline"><?=$figura['a_text']?></a></div><? } ?>
    </div>
    <div class="row mb-4">
        <? foreach ($figura['elements'] as $e) {?>
            <div class="col-3 text-center">
                <figure class="figure position-relative">
                    <img src="<?=$e['src']?>" alt="<?=$e['alt']?>" class="figure-img img-fluid rounded">
                    <figcaption class="align-items-center top shadow"><<?=$e['tag']?>><?=$e['title']?></<?=$e['tag']?>><?=$e['text']?></figcaption>
                </figure>
            </div>
        <? } ?>
    </div>
<? } ?>