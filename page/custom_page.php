<section class="custom_page">
    <div class="container">
        <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-12 d-inline-block pr-3 pb-3 mb-3">
                <h4 for="name" class="mt-5 mb-0">Company name <span class="mdi mdi-help rounded-circle text-white"></span></h4> 
                <input type="text" class="form-control col-10 d-inline-block mt-4" name="name" id="name" placeholder="Autocomplete Company name"> <span class="mdi mdi-border-color mdi-24px  d-inline-block align-middle"></span>
            </div>
        </div> <!--row-->

        <div class="row pl-3 pr-3">
            <div class="col-sm-12 text-center text-60 pl-0 pr-0">
                <form id="upload" class="border_upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id="drop">
                        <h1 class="mb-5 d-none d-sm-block">Перетащите файл</h1>
                        <h2 class="mb-5 d-block d-sm-none mt-3">Перетащите файл</h2>
                        <h4 class="mb-3">или выберите файл</h4>
                        <p><input type="file" name="upl" multiple /></p>
                        <p class="mb-0">(1600×1200 or larger recommended, up to 10MB each)</p>
                    </div>

                </form>
            </div>
        </div><!--row-->
        
        <div class="row pl-3 mb-3 pb-3">
            <div class="form-group pr-3 pl-0">
                <h4 for="name" class="mb-3 pb-3 mt-3 pt-3 ">Additional pictures <span class="mdi mdi-help rounded-circle text-white"></span> </h4> 
                <div class="row ">
                    <div class="col-sm-6 col-md-6 col-xl-3 col-12 mt-2">
                        <img src="../img/additional_pictures1.png" alt="">
                    </div>

                    <div class="col-sm-6 col-md-6 col-xl-3 col-12 mt-2">
                        <div class="border_img text-60" alt=""> 
                            
                            <ul>
                                <!-- загрузки будут показаны здесь -->
                            </ul>
                            
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-xl-3 col-12 mt-2">
                        <div class="border_img text-60" alt=""> 
                            <ul>
                            <!-- загрузки будут показаны здесь -->
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-xl-3 col-12 text-center mt-2">
                        <div class="row no-gutters border_img text-60 pro no-gue" id="pro">
                            <div class="col-12 align-self-center"><h3>Go PRO</h3></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> <!--row-->
        <div class="d-none" id="popover">
            <h3> Pro </h3> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus donec vestibulum tincidunt pretium nunc tristique sit augue. Eu eget viverra nec aliquam in. Dictum phasellus facilisis eget amet, curabitur. In lectus pharetra et, et mattis.</p> <a  class="btn bg-danger shadow text-white float-right mb-3">GO PRO TO UNLOCK</a>
        </div>
        <div class="row pl-3">
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-12 d-inline-block pr-3 pl-0 pb-3 mb-3">
                <h4 for="tags" class="mb-4 d-inline-block">Tags <span class="mdi mdi-help rounded-circle text-white"></span></h4> 
                <input type="text" class="form-control" name="tags" id="tags" placeholder="Food, meal"> 
            </div>
        </div> <!--row-->

        <div class="row pl-3 ">
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-12 d-inline-block pr-3 pl-0 mb-3 pb-3">
                <h4 for="name" class="mb-4 d-inline-block">SUGGESTED TAGS <span class="mdi mdi-help rounded-circle text-white"></span></h4> 
                <p class="">Lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, amet, Lorem, dolor, sit, consectetur, adipiscing, elit, ipsum, 
sit, Lorem, ipsum, dolor, amet, consectetur</p>
            </div>
        </div> <!--row-->

        <div class="row pl-3">
            <form action=""class="col-12 pl-0" >
                <h4 class="mb-4">About company</h4>
                <div class="pl-0 pr-0 mb-3 pb-3">
                    <textarea name="" id="" class="col-sm-12 col-12 " cols="140" rows="9" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis semper vitae, rhoncus accumsan lacus, sit. Integer parturient metus, in aliquam nisl praesent tempus donec pellentesque. Quis praesent nunc in a, consectetur ultrices mauris. Velit neque a cras odio eu sed pulvinar cum ut. Accumsan posuere tellus egestas sed. Praesent enim tellus lobortis consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis semper vitae, rhoncus accumsan lacus, sit. Integer parturient metus, in aliquam nisl praesent tempus donec pellentesque. Quis praesent nunc in a, consectetur ultrices mauris. Velit neque a cras odio eu sed pulvinar cum ut. Accumsan posuere tellus egestas sed. Praesent enim tellus lobortis consectetur.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis semper vitae, rhoncus accumsan lacus, sit. Integer parturient metus, in aliquam nisl praesent tempus donec pellentesque. Quis praesent nunc in a, consectetur ultrices mauris. Velit neque a cras odio eu sed pulvinar cum ut. Accumsan posuere tellus egestas sed. Praesent enim tellus lobortis consectetur."></textarea>   
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12 pr-0 pr-sm-3">
                        
                        <div class="form-group pr-3 pl-0 mb-3 pb-3">
                            <h4 for="address" class="mb-4 d-inline-block">Address</h4> 
                            <input type="text" class="form-control" name="address" id="address" placeholder="Autocomplete">
                        </div>
                        
                        <div class="form-group pr-3 pl-0 mb-3 pb-3">
                            <h4 for="email" class="mb-4 d-inline-block">Email</h4> 
                            <input type="text" class="form-control" name="email" id="email" placeholder="Autocomplete">
                        </div>
                        <div class="form-group pr-3 pl-0 mb-3 pb-3">
                            <h4 for="contact_phone" class="mb-4 d-inline-block">Contact phone</h4> 
                            <input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Autocomplete">
                        </div>
                        <div class="form-group pr-3 pl-0 mb-4">
                            <h4 for="social_links" class="mb-4 d-inline-block">Social links</h4> 
                            <input type="text" class="form-control" name="social_links" id="social_links" placeholder="Enter URL (https://) ">
                        </div>
                        <div class="form-group pr-3 pl-0">
                            <p for="social_links" class="mb-4 d-inline-block text-100">Extra Features</p> <p class="bg-danger text-white d-inline-block pl-3 pr-3 pb-1 pt-1 ml-3 shadow">PRO</p>
                            <input type="text" class="form-control mb-4" name="social_links" id="social_links" placeholder="Enter URL (https://) ">
                            <input type="text" class="form-control mb-4" name="social_links" id="social_links" placeholder="Enter URL (https://) ">
                            <input type="text" class="form-control mb-4" name="social_links" id="social_links" placeholder="Enter URL (https://) ">
                        </div>
                    </div> <!--col-6-->

                    <div class="col-sm-6 col-12">
                        <div class="map-pannel mt-sm-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17474.23191279465!2d60.609323885234!3d56.80684376871794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1587905649302!5m2!1sru!2sru"
                            width="540" height="448" frameborder="0" class="w-100 border-0" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                        </div>
                    </div> <!--col-6-->
                </div> <!--form row-->
            </form>
        </div><!--row-->

    </div> <!--container-->
</section>
<script src="assets/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="../js/jquery.ui.widget.js"></script>
<script src="../js/jquery.iframe-transport.js"></script>
<script src="../js/jquery.fileupload.js"></script>

<!-- main JS file -->
<script src="../js/script.js"></script>
<script>

   $(document).ready(function(){
       var pop=0;
    $('.pro').popover({
            content:$('#popover').html(),
            placement:'bottom',
            trigger:'manual',
            html:true
    });      
        $('.custom_page').on('mouseover','.pro', ()=>{
            $('.pro').popover('show');
            pop=1;
        });
        $('body').on('click','.custom_page:not(.pro), .custom_page:not(.popover)', ()=>{
            if(pop) $('.pro').popover('hide');
        }); 
    });
</script>