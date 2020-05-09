<?php
$arrays=[
    ['id'=>1,'name'=>'Поесть','href'=>'#','submenu'=>[
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
    ]],
    ['id'=>2,'name'=>'Развлечения','href'=>'#'],
    ['id'=>3,'name'=>'Красота','href'=>'#'],
    ['id'=>4,'name'=>'Услуги бытовые','href'=>'#','active'=>'active'],
    ['id'=>5,'name'=>'Шопинг','href'=>'#','submenu'=>[
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
        ['name'=>'Lorem ipsum','href'=>'#'],
    ]
    ],
    ['id'=>6,'name'=>'Шопинг','href'=>'#'],
    ['id'=>7,'name'=>'Авто','href'=>'#'],
    ['id'=>8,'name'=>'Достопримечательности и культура','href'=>'#'],
];
$subs=[

];
?>
<div id="dropdown-menu" class="container border-0 collapse text-100 py-3 justify-content-center">
    <div class="row">
        <? foreach($arrays as $array) {?>
            <div class="col-auto p-0">
                <a href="<?=$array['href']?>" class="dropdown-item text-100 py-2 px-3<?=' '.$array['active']?>"
                    <?=$array['submenu']?' data-toggle="collapse" data-target="#submenu'.$array['id'].'" aria-expanded="true" aria-controls="collapseOne"':''?>
                ><?=$array['name']?></a>
            </div>
        <? } ?>
    </div>
</div>

<? $submenu = array_filter($arrays,function ($a){return isset($a['submenu']);});
    foreach($submenu as $array){?>
        <div id="submenu<?=$array['id']?>" class="container submenu border-0 collapse text-100 pt-3  pb-3">
            <div class="row">
                <? foreach($array['submenu'] as $sub){?>
                    <div class="col-auto">
                        <a href="<?=$sub['href']?>" class="dropdown-item text-100 py-2 px-3<?=' '.$sub['active']?>"><?=$sub['name']?></a>
                    </div>
                <? } ?>
            </div>
        </div>
   <? } ?>
<script>
    $(document).ready(function(){
        $('#dropdown-menu').on('click','.dropdown-item',function () {
            if($(this).data('target')) {
                $('.submenu:not(' + $(this).data('target') + ')').removeClass('show');
            } else {
                $('.submenu').removeClass('show');
            }
        });
    });
</script>