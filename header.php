<header <? if($_SERVER['SCRIPT_NAME']=='/index.php') echo 'class="homepage"'; ?>>
    <div class="topnav">
        <div class="container">
            <div class="row align-items-center topnav">
                <div class="col-sm-12 col-md-3 logo">
                    GDE<span>GO</span>
                </div>
                <div class="col-md-4 col-sm-12">
                        <span class="mdi mdi-magnify search-icon"></span>
                        <input name="search" type="text" class="search col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <? include('login-pannel.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-menu">
        <div class="container">
            <div class="row align-items-center  topbar">
                <div class="col-sm-12 col-md-3 select-city">
                    <span class="mdi mdi-map-marker local"></span>
                    Санкт-Петербург
                    <span class="mdi mdi-chevron-down select"></span>
                </div>
                <div class="col-md-5 col-sm-12 menu">
                    <div class="btn-group" role="group">
                        <a id="btnGroupDrop1" href="#" type="button" class="btn" data-toggle="collapse" data-target="#dropdown-menu" aria-expanded="true" aria-controls="collapseOne">
                            <svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6H21V8H3V6ZM3 11H17V13H3V11ZM3 16H14V18H3V16Z" fill="#847768"/>
                            </svg>
                            Меню
                        </a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12 contacts px-0">
                    <span class="email pr-4">
                        example@gdego.ru
                        <span class="mdi mdi-email-open email-icon"></span>
                    </span>
                    <span class="phone">
                        +7 (225) 555-0118
                        <span class="mdi mdi-cellphone-iphone phone-icon"></span>
                    </span>
                </div>
            </div>
            <? include('blocks/menu.php') ?>
        </div>
    </div>
</header>