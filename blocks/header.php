<header <? if($_SERVER['SCRIPT_NAME']=='/index.php') echo 'class="homepage"'; ?>>
    <div class="topnav">
        <div class="fixed-top">
        <div class="container">
            <div class="row align-items-center topnav">
                <div class="col-auto menu d-inline-block d-md-none">
                    <div class="btn-group" role="group">
                        <a id="btnGroupDrop1" href="#" class="btn open-header-menu" data-toggle="collapse" data-target="#dropdown-menu" aria-expanded="true" aria-controls="collapseOne">
                            <span class="mdi mdi-menu"></span>
                        </a>
                    </div>
                </div>
                <a class="col col-md-3 logo d-inline-block text-center px-1 px-md-3" href="/">
                    GDE<span>GO</span>
                </a>
                <? include('blocks/login-pannel-mini.php'); ?>
                <div class="col-md-4 col-sm-12">
                        <span class="mdi mdi-magnify search-icon"></span>
                        <input name="search" type="text" class="search col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12 ">
                    <? include('blocks/login-pannel.php'); ?>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="panel-menu">
        <div class="container">
            <div class="row align-items-center  topbar  d-none d-md-flex">
                <div class="col-sm-12 col-md-3 p-0 select-city">
                    <span class="mdi mdi-map-marker local"></span>
                    Санкт-Петербург
                    <span class="mdi mdi-chevron-down select"></span>
                </div>
                <div class="col-md-3 col-sm-12 menu d-none d-sm-inline-block">
                    <div class="btn-group" role="group">
                        <a id="btnGroupDrop1" href="#" class="btn open-header-menu" data-toggle="collapse" data-target="#dropdown-menu" aria-expanded="true" aria-controls="collapseOne">
                            <svg class="menu-icon brown-color" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6H21V8H3V6ZM3 11H17V13H3V11ZM3 16H14V18H3V16Z" fill="#847768"/>
                            </svg>
                            Меню
                        </a>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 contacts px-0">
                    <span class="email d-none pr-2 d-sm-inline-block">
                        example@gdego.ru
                        <span class="mdi mdi-email-open email-icon brown-color"></span>
                    </span>
                    <span class="phone d-none d-sm-inline-block">
                        +7 (225) 555-0118
                        <span class="mdi mdi-cellphone-iphone phone-icon brown-color"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <? include('blocks/menu.php') ?>
    </div>
</header>