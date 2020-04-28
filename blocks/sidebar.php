<!-- $arr=; -->
<!-- $radio=; -->
<? $sidebar=array(
    array('type'=>'select','id'=>'city_filter','name'=>'Город','variants'=>array(array('value'=>'cena','text'=>'По цене'),array('value'=>'name','text'=>'По имени'))),
    array('type'=>'radio','id'=>'name_institution','name'=>'Название заведения','variants'=>array(array('value'=>'1','text'=>'Кафе'),array('value'=>'2','text'=>'Кальянная'),array('value'=>'3','text'=>'Ресторан'))),
    array('type'=>'checkbox','id'=>'name_institution','name'=>'Название заведения','variants'=>array(array('value'=>'1','text'=>'Кафе'),array('value'=>'2','text'=>'Кальянная'),array('value'=>'3','text'=>'Ресторан'))),
);
?>
<div class="row">
    <div class="col">
        <? foreach ($sidebar as $element) {?>
            <? if($element['type']=='select'){
                include('blocks/filter/select.php');
            }  else {
                include('blocks/filter/radiogroup.php');
            }
        } ?>
    </div>
</div>