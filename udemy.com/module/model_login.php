 <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_login">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                
                <form id="form_login" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Log In to Your Udemy Account!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group fix_fg" style="background: #1a538a">
                                    <a href="#" class="btn-face m-b-10" style="color: white">
                                        <i class="fab fa-facebook "></i>&nbsp;
                                        Continue with Facebook
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg" style="box-shadow: 0px 2px 2px 0px #ddd;">
                                    <a href="#" class="btn-google m-b-10" style="color: black;">
                                        <img src="images/icons/icon-google.png" alt="GOOGLE" style="    width: 20px;">
                                        Continue with Google
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="email" placeholder="Email" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-lock"></i></span>
                                    <input name="pass" type="password" placeholder="Password" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="message_login"></div>

                                <button class="btn btn-danger form-control" id="btn_login">Log In</button>
                                
                            </div>
                        </div>
                        
                        <div class="text-center mt-2">
                            
                            <div class="mt-4">
                                <span>Don't have an account? </span>
                                <a href="#" id="not_account" data-toggle="modal" data-target="#modal_signup">Sign up</a>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                </form>
                
            </div>
        </div>
    </div>