<?
$array=array('control_panel'=>true, 'id'=>'carouselProduct',
    'align-text'=>'center',
    'width-text'=>'w-25',
    'elements'=>array(
        array('img'=>'/img/slider-product.png','alt'=>'...','title'=>'First slide label','tag'=>'h1','text'=>'Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.'),
        array('img'=>'/img/slider-product.png','alt'=>'...','title'=>'Two slide label','tag'=>'h2','text'=>'Sint nulla aute sunt irure irure ut laborum aute fugiat culpa exercitation eu et dolore. Minim exercitation mollit irure voluptate proident culpa veniam consequat culpa mollit. Cillum sit ut nulla esse exercitation aliqua nisi proident fugiat consequat dolor Lorem nostrud.'),
    )
);

include('blocks/slider-main.php'); ?>
<div class="container product">
    <? $array=array('href'=>'#','alt'=>'...','src'=>'../img/banner.png');?>
    <div class="row">
        <div class="col-8 mt-3 mb-3 d-sm-flex d-none">
                    <? include('card/banner.php')?>
        </div>
        <div class="col-4  text-sm-right mt-3 mb-3 ">
            <a href="#"><span class="mdi mdi-bookmark-outline mdi-24px brown-color"></span></a>
            <a href="#"><span class="mdi mdi-share-variant mdi-24px brown-color"></span></a>
        </div>
    </div>

    <div class="row pl-0 pl-md-3 mb-3">
        <div class="col-sm-4 sidebar"><?
            $viewpoints = array(
                    array('name'=>'Обоскалов Андрей','date'=>'08.05.2020 13:25','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ac, nunc, habitasse pulvinar nisl eu lobortis. Nunc quis placerat iaculis gravida nunc, fermentum quam mattis tellus.'),
                    array('name'=>'Обоскалов Андрей','date'=>'08.05.2020 13:25','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ac, nunc, habitasse pulvinar nisl eu lobortis. Nunc quis placerat iaculis gravida nunc, fermentum quam mattis tellus.'),
            );
            include('blocks/viewpoint.php'); ?></div>
        <div class="col-sm-8">
            <div class="row"><div class="col ml-0 ml-md-3 galery">
                    <?
                    $gallery=array(
                            'id'=>'imageGallery',
                            'elements'=>array(
                                    array('src'=>'/img/largeImage2.jpg','alt'=>'...','thumb'=>'/img/largeImage2.jpg'),
                                    array('src'=>'/img/largeImage3.jpg','alt'=>'...','thumb'=>'/img/largeImage3.jpg'),
                                    array('src'=>'/img/largeImage4.jpg','alt'=>'...','thumb'=>'/img/largeImage4.jpg'),
                                    array('src'=>'/img/largeImage6.jpg','alt'=>'...','thumb'=>'/img/largeImage6.jpg'),
                            )
                    );
                    include('blocks/gallery.php');
                    ?>
            </div>
        </div>
    </div>
</div>
    <div class="list-group list-group-horizontal mt-4 mb-4" id="list-product" role="tablist">
        <a class="btn list-group-item-action active w-auto" data-toggle="list" href="#home" role="tab"><h3>О нас</h3></a>
        <a class="btn list-group-item-action w-auto" data-toggle="list" href="#profile" role="tab"><h3>Оценки и отзывы</h3></a>
    </div>
    <hr class="my-0">
    <div class="row">
        <div class="col-12 py-4">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home" role="tabpanel">
                    <p>Enim in ad exercitation Lorem ipsum Lorem mollit voluptate laboris ut do commodo eu officia. Nostrud cillum mollit nostrud Lorem duis laborum duis est labore est mollit amet officia nisi. Lorem ea ad cupidatat veniam adipisicing ut consectetur. Magna do minim nulla sint enim nostrud qui laboris non proident. Do in amet tempor mollit ad tempor laboris consequat. Nulla labore dolor qui eiusmod ullamco aliqua Lorem deserunt amet irure id ut. Laboris nostrud est dolor in duis sit.</p>
                    <p>Reprehenderit qui aliquip elit esse ut sit cupidatat adipisicing aute veniam in. Sint nulla proident ea enim deserunt consectetur tempor ullamco laboris et. Sit exercitation nulla velit irure cillum et eu incididunt culpa veniam veniam ad. Excepteur voluptate ut elit non. Quis id mollit minim quis. Irure excepteur non occaecat in laboris ullamco Lorem dolor enim occaecat veniam ex labore et. Ullamco adipisicing proident incididunt minim enim ea cupidatat reprehenderit cillum non adipisicing id.
                        Ut reprehenderit sunt enim ex pariatur magna nostrud Lorem dolore eu. Quis mollit dolore do elit non proident id non do. Laborum minim tempor ut occaecat amet et labore.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <? include('blocks/add_rating_review.php'); ?>
                            <? include('blocks/add_review.php');
                            $comments = array(
                            array('name'=>'Обоскалов Андрей','date'=>'08.05.2020 13:25','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ac, nunc, habitasse pulvinar nisl eu lobortis. Nunc quis placerat iaculis gravida nunc, fermentum quam mattis tellus. Lectus cursus et diam praesent enim. Magnis rhoncus neque, sed vel. Enim orci, eget dictum diam a a. Eget phasellus vitae sapien nisi est aliquam sed enim, erat. Eget ullamcorper eget luctus morbi sapien mattis. Lorem nulla integer dui mauris urna nibh diam. Pharetra quis aliquet massa, sit viverra platea molestie. Molestie sit cras semper et. Arcu faucibus integer augue venenatis auctor facilisi pulvinar volutpat enim. Leo pharetra bibendum posuere quisque amet sit porttitor et. Montes, in nisi donec volutpat. Convallis fermentum scelerisque scelerisque neque.
Sem enim consectetur etiam quam sed arcu, nisl. At pellentesque fringilla duis a posuere rhoncus in duis. Facilisis morbi ut vitae ut. Magna leo, metus porttitor blandit cras. Quisque massa faucibus aliquam vitae id egestas odio. Egestas cursus libero amet sed amet mauris sit. Netus cursus viverra in condimentum. Ut senectus aliquam duis leo gravida leo egestas. Neque sed risus sit mus.'),
                            array('name'=>'Обоскалов Андрей','date'=>'08.05.2020 13:25','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ac, nunc, habitasse pulvinar nisl eu lobortis. Nunc quis placerat iaculis gravida nunc, fermentum quam mattis tellus.'),
                            );
                            foreach ($comments as $v){?>
                                <div class="py-4">
                               <? include('card/comment.php'); ?>
                                </div>
                            <?
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 col-md-6"><? include('blocks/map-pannel.php'); ?></div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-12 mb-2">
                    <span class="mdi mdi-home text-60 mdi-24px mr-2"></span><span>2496 Miller Ave undefined Lansing, Illinois 67658 United States</span>
                </div>
                <div class="col-12 mt-1 mb-2">
                    <span class="mdi mdi-email-open text-60 mdi-24px mr-2"></span><span>dolores.chambers@example.com</span>
                </div>
                <div class="col-12 mt-1 mb-2">
                    <span class="mdi mdi-phone-in-talk text-60 mdi-24px mr-2"></span><span>2496 Miller Ave undefined Lansing, Illinois 67658 United States</span>
                </div>
                <div class="col-12 mt-1 mb-2">
                    <span class="mdi mdi-badge-account text-60 mdi-24px mr-2"></span><span>2496 Miller Ave undefined Lansing, Illinois 67658 United States</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12"><h2>Что есть поблизости?</h2></div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <? include('blocks/map-pannel.php');?>
        </div>
    </div>
<? $array_figura= array(
        array('a_text'=>'Все места','a_href'=>'#','title'=>'Зоопарки','tag'=>'h3',
            'elements'=>array(
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_2.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_3.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
            ),

        ),
        array('a_text'=>'Все места','a_href'=>'#','title'=>'Зоопарки','tag'=>'h3',
            'elements'=>array(
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_2.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_3.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
            ),

        ),
        array('a_text'=>'Все места','a_href'=>'#','title'=>'Зоопарки','tag'=>'h3',
            'elements'=>array(
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_2.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_3.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
                array('tag'=>'h3','title'=>'Title','src'=>'/img/figura/figura_1.png','alt'=>'...','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet morbi auctor turpis mattis mattis suscipit ipsum volutpat.'),
            ),

        ),
);
    include('card/figura_card_mini.php'); ?>

    <script>
        $(function () {
            $('#myList a:last-child').tab('show')
        })
    </script>
    <link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
    <script src="/js/lightslider.js"></script>

</div>