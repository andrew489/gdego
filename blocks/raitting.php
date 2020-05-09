<div class="raitting">
    <? $raitting=round($raitting);
    for($i=0;$i<5;$i++){?>
        <span class="mdi mdi-star<?=$raitting>=$i?'':'-outline'?>"></span>
    <? }?>
    <input type="hidden" name="raitting_star" value="<?=$raitting?>" />
</div>

