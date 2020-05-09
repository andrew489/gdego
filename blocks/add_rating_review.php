<div class="rating_review">
    <h3 class="mb-4">Оценки и отзывы</h3>
    <div class="row mb-4">
        <div class="col-5">
            <div class="row">
                <div class="col">
                    <input type="radio" name="raitting" value="5" id="rating5" checked><label type="radio" for="rating5" class="text-60"><span class="pl-1">Отлично</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="raitting" value="4" id="rating4"><label type="radio" for="rating4" class="text-60"><span class="pl-1">Очень хорошо</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="raitting" value="3" id="rating3"><label type="radio" for="rating3" class="text-60"><span class="pl-1">Неплохо</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="raitting" value="2" id="rating2"><label type="radio" for="rating2" class="text-60"><span class="pl-1">Плохо</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" name="raitting" value="1" id="rating1"><label type="radio" for="rating1" class="text-60"><span class="pl-1">Ужасно</span></label>
                </div>
            </div>
            <? $raitting=4; include('blocks/raitting.php'); ?>
        </div>
        <div class="col-7">
            <img src="/img/rca.png" class="w-100" />
        </div>
    </div>
</div>
<script>
    function setStars(index){
        $('.rating_review .raitting input').val(index+1);
    }
    function fillStart(index){
        const element = '.rating_review .raitting span';
        $(element).each(function (i,r) {
            if(i<=index) {
                $(this).addClass('mdi-star');
                if($(this).hasClass('mdi-star-outline')) {
                    $(this).removeClass('mdi-star-outline')
                }
            } else {
                $(this).addClass('mdi-star-outline');
                if($(this).hasClass('mdi-star')) {
                    $(this).removeClass('mdi-star')
                }
            }
        });
    }
    $(document).ready(function () {
        var index=$('.rating_review .raitting input').val()-1;
        $('.rating_review').on('mouseover','.raitting span',function () {
            index=$(this).index();
            fillStart(index);
        });
        $('.rating_review').on('mouseover','.raitting',function () {
            fillStart(index);
        });
        $('.rating_review').on('click','.raitting span',function () {
            index=$(this).index();
            fillStart(index);
            setStars(index);
        });
        $('.rating_review .raitting').mouseout(function () {
            var index=$('.rating_review .raitting input').val()-1;
            fillStart(index);
        });

    });
</script>