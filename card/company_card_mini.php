<!--../img/company-slider1.png-->
<div class="card mb-3 pb-3 company_card_mini">
    <div id="<?=$e['id']?>" class="card-img-left">
        <img src="<?=$e['src']?>" class="d-block w-100" alt="<?=$e['title']?>">
    </div>
    <div class="card-body">
        <span class="mdi-24px brown-color mdi mdi-bookmark<?=!$e['bookmark']?'-outline':''?>  d-inline-block mr-3"></span> <a href="#"><h3 class="d-inline-block card-title brown-color"><?=$e['title']?></h3></a>
        <p class="card-text mt-3"><?=$e['description']?></p>
    </div>
</div>