<div class="row shadow bg-white d-flex align-items-center mb-sm-4 stocks_mb pr-sm-3 pl-0 pr-0">
    <div class="d-flex justify-content-center col-sm-3  col-12 px-0">
        <img src="<?=$e['src']?>" alt="<?=$e['alt']?>" class="w-100">
    </div>
    <div class="col-sm-9 col-12">
        <div class="row align-items-center">
            <div class="col-auto pt-3">
                <span class=" d-sm-inline-block mdi mdi-bookmark-outline mdi-24px brown-color"></span>
                <a href="<?=$e['href']?>" class="d-inline-block">
                    <<?=$e['tag']?> class="mb-0 text-100"><?=$e['title']?></<?=$e['tag']?>>
                </a>
            </div>
            <div class="col text-right">
                <? $raitting=$e['raitting']; include('blocks/raitting.php'); ?>
            </div>
        </div>
        <p class="mt-4 mb-4"><?=$e['description']?></p>
    </div>
</div>