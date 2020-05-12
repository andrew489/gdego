<!--../img/company-slider1.png-->
<div class="card mb-3 pb-3 company_card_mini">
    <div id="<?=$e['id']?>" class="card-img-top carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <? foreach ($e['imgs'] as $k=>$img){?>
                <div class="carousel-item <?=$k==0?'active':''?>">
                    <img id="carousel-catalog" src="<?=$img['src']?>" class="d-block w-100" style="height:112px"  alt="<?=$img['title']?>">
                </div>
            <? } ?>
        </div>
        <? if(count($e['imgs'])>1) { ?>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <? } ?>
    </div>
    <div class="card-body">
        <span class="mdi-24px  d-inline-block  mr-3 brown-color mdi mdi-bookmark<?=!$e['bookmark']?'-outline':''?>"></span> <a href="#"><h3 class="d-inline-block card-title brown-color"><?=$e['title']?></h3></a>
        <p class="card-text mt-3"><?=$e['description']?></p>
    </div>
</div>
<? if($e['id']&&count($e['imgs'])>1){?>
<script>
    $(document).ready(function() {

        var car<?=$e['id']?> = $('#<?=$e['id']?>').carousel({
            interval: 2000
        });
        $('#<?=$e['id']?>').on('click','.carousel-control-prev', function () {
            $('#<?=$e['id']?>').carousel('prev');
        });
        $('#<?=$e['id']?>').on('click','.carousel-control-next', function () {
            $('#<?=$e['id']?>').carousel('next');
        });
    });
</script>
<? } ?>