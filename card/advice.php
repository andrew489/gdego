<li class="advice shadow text-100 owl-item">
    <div class="align-items-start">
        <img src="<?=$array['img']?>" class="w-100">
        <div class="col">
            <p class="mt-3 mb-2"><?=$array['text']?></p>
            <div class="row mt-1">
                <div class="col-7 raiting pr-0">
                    <? $raitings=round($array['raiting']);
                    for($i=0;$i<5;$i++){?>
                        <span class="mdi mdi-star<?=$raitings>=$i?'':'-outline'?>"></span>
                    <? }?>
                </div>
                <div class="col-5 text-small text-60 text-right pl-0">
                    <?=$array['comment']??'0'?> отзывов
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-end no-gutters">
        <div class="col-1"><a href="#" class="brown-color"><span class="mdi mdi-bookmark<?=!$array['bookmark']?'-outline':''?> mdi-24px"></span></a> </div>
        <div class="col-auto ml-auto"><a class="btn brown--default text-white">Подробнее</a></div>
    </div>
</li>
