<h4 class="mt-3 mb-4"><?=$element['name']?></h4>
<select name="<?=$element['id']?>" id="<?=$element['id']?>" class="mt-2">
    <? foreach ($element['variants'] as $variant){?>
    <option value="<?=$variant['value']?>"><?=$variant['text']?></option>
    <? } ?>
</select>