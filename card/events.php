<!--<div class="col-md events shadow text-100 px-0">-->
<!--        <img src="--><?//=$array['img']?><!--" class="w-100 h-100">-->
<!--        <div class="col position-absolute align-top">-->
<!--            <div class="row">-->
<!--                <div class="col mt-2 ml-2">-->
<!--                    --><?// $raitings=round($array['raiting']);
//                    for($i=0;$i<5;$i++){?>
<!--                        <span class="mdi mdi-star--><?//=$raitings>=$i?'':'-outline'?><!--"></span>-->
<!--                    --><?// }?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    -->
<!--    <div class="row align-items-end">-->
<!--        <div class="col-6"></div>-->
<!--        <div class="col-6"><a class="btn brown--default">Подробнее</a></div>-->
<!--    </div>-->
<!--</div>-->

<div class="card events mb-3 px-0" style="max-width: 540px;">
    <img src="<?=$array['img']?>" class="w-100 position-absolute">
    <div class="row align-items-start text-white no-gutters p-3">
        <div class="col-auto text-white">
            <? if($array['age_cens']) { ?>
            <div class="cens py-2 px-3">
                <?=$array['age_cens']?>
            </div>i
            <? } ?>
        </div>
        <div class="col-auto  ml-auto">
            <? if($array['price']) { ?>
            <div class="cens py-2 px-3">
                <?=$array['price']=='0'?'Бесплатно':$array['price']?>
            </div>
            <? } ?>
        </div>
    </div>
    <div class="row align-items-end h-75 no-gutters">
        <div class="col">
                <div class="row">
                    <div class="col text-white">
                        <h4><?=$array['text']?></h4>
                    </div>
                </div><div class="row"><div class="col-1"><a href="#" class="text-white"><span class="mdi mdi-bookmark<?=!$array['bookmark']?'-outline':''?>"></span></a> </div><div class="col-5 text-white"><span class="mdi mdi-event"></span><?=$array['date']?></div><div class="col-auto ml-auto"><a href="<?=$array['href']?>" class="text-white text-uppercase">Подробнее <span class="mdi mdi-arrow-right"></span></a></div></div>
        </div>
    </div>
</div>
