<? if(isset($gallery['id'])){?>
<ul id="<?=$gallery['id']?>">
    <? foreach ($gallery['elements'] as $k=>$e){?>
                        <li data-thumb="<?=isset($e['thumb'])?$e['thumb']:$e['src']?>">
                            <img src="<?=$e['src']?>" alt="<?=$e['alt']?>"  class="w-100 shadow rounded"/>
                        </li>
    <? } ?>
</ul>
<script>
    $(document).ready(function() {
        $('#<?=$gallery['id']?>').lightSlider({
                gallery: true,
                auto:true,
                item: 1,
                loop:true,
                adaptiveHeight:true,
                controls:true,
                slideMargin: 0,
                thumbItem: 3
            });
        });
    </script>
    <? } ?>
