<div class="row mt-4">
    <div class="col-2"><?=isset($v['img'])?$v['img']:'<span class="mdi mdi-account-circle mdi-48px grey"></span>'?>
    </div>
    <div class="col-10">
        <div class="row">
            <div class="col-12">
                <h4><?=$v['name']?></h4>
            </div>
            <div class="col-12">
                <p><?=$v['date']?></p>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12"><?=$v['text']?></div>
</div>