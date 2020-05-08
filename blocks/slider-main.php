<?
$block_align =isset($array['align-text'])?'align-items-'.$array['align-text'].(isset($array['width-text'])?' '.$array['width-text']:''):'';
$text_align=!isset($array['align-text'])&&isset($array['width-text'])?$array['width-text']:'';
?>
<div id="<?=$array['id']?>" class="carousel slide flex-wrap" data-ride="carousel">
    <ol class="carousel-indicators">
        <? foreach ($array['elements'] as $k=>$e){?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?=$k?>>"<?=$k==0?' class="active"':''?>></li>
        <? } ?>
    </ol>
    <div class="carousel-inner">
        <? foreach ($array['elements'] as $k=>$e){?>
            <div class="carousel-item<?=$k==0?' active':''?>">
                <img src="<?=$e['img']?>" class="d-block w-100" alt="<?=$e['alt']?>">
                    <div class="container carousel-caption d-none d-md-block text-white <?=$block_align?>">
                        <div class="row <?=$text_align?>">
                            <<?=$e['tag']?>><?=$e['title']?></<?=$e['tag']?>>
                            <p class="text-white text-left"><?=$e['text']?></p>
                        </div>
                    </div>
            </div>
        <? } ?>
    </div>
<? if(isset($array['control-pannel'])&&$array['control-pannel']){?>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
<? } ?>
</div>