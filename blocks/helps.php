<<?=$e['tag']?> class="mb-4"><?=$e['title']?></<?=$e['tag']?>>
<? foreach ($e['elements'] as $ee){?>
    <? include('card/collapse.php');?>
<?}?>