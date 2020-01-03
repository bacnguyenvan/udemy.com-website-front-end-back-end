<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_signup">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                
                <form id="form_signup" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up and Start Learning!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    
                    <div class="modal-body">
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-user"></i></i></span>
                                    <input name="fullname" type="text" placeholder="Full Name" required="" />
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="email" placeholder="Email" required="" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-lock"></i></span>
                                    <input name="pass" type="password" placeholder="Password" required="" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    
                                    <input name="check" type="checkbox" required="" />  Yes! I want to get the most out of Udemy by receiving emails with exclusive deals, personal recommendations and learning tips!
                                    <div id="message_signup"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                
                                <button type="submit" class="btn btn-danger form-control btn_signup">Sign Up</button>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-4 text-center">
                                <small style="font-size: 70%;">By signing up, you agree to our Terms of Use and Privacy Policy.</small>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer" style="justify-content: center;">
                            
                        <span>Already have an account? </span>
                        <a id="has_account" href="#" data-toggle="modal" data-target="#modal_login">Log In</a>
                       
                    </div>
                    
                    
                   
                </form>
                
            </div>
        </div>
    </div>
    