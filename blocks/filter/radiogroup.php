<h4 class="mt-4"><?=$element['name']?></h4>
<div class="radio-group" id="<?=$element['id']?>">
    <? foreach ($element['variants'] as $k=>$variant){?>
        <div class="row">
            <div class="col">
                <input type="<?=$element['type']?>" name="<?=$element['id']?><? if($element['type']=='checkbox') {?>[]<? } ?>" id="<?=$element['type']?>_<?=$element['id']?>_<?=$k?>" value="<?=$variant['value']?>"><label  type="<?=$element['type']?>" class="text-60" for="<?=$element['type']?>_<?=$element['id']?>_<?=$k?>"><span><?=$variant['text']?></span></label>
            </div>
        </div>
    <? } ?>
</div>