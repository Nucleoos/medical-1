                <h2 class="lh30 mt15 text-center">Form Validation made <b class="text-primary">Easy</b></h2>
                <p class="lead mb30 text-center">Use the Admin Forms you know and love to build the perfect form.</p>

                <div class="row">
                    <div class="col-md-9 center-block">


                        <!-- Form Wizard -->
                        <div class="admin-form theme-primary">

                            <div class="panel">
                
                                <form method="post" action="/" id="admin-form">
                                    <div class="panel-body">
                                    
                                        <div class="section-divider mb40 mt20"><span> Normal validation rules </span></div><!-- .section-divider -->
                                        
                                        <div class="section row">
                                            <div class="col-md-6">
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                                    <label for="firstname" class="field-icon"><i class="fa fa-user"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                            
                                            <div class="col-md-6">
                                                <label for="lastname" class="field prepend-icon">
                                                    <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                                    <label for="lastname" class="field-icon"><i class="fa fa-user"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                        </div><!-- end .section row section -->                                    
                                    
                                        <div class="section">
                                            <label for="useremail" class="field prepend-icon">
                                                <input type="email" name="useremail" id="useremail" class="gui-input" placeholder="Email address">
                                                <label for="useremail" class="field-icon"><i class="fa fa-envelope"></i></label>  
                                            </label>
                                        </div><!-- end section -->
                                        
                                        <div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="url" name="website" id="website" class="gui-input" placeholder="Current website url">
                                                <label for="website" class="field-icon"><i class="fa fa-globe"></i></label>  
                                            </label>
                                        </div><!-- end section -->                    
                                        
                                        <div class="section">
                                            <label class="field select">
                                                <select id="language" name="language">
                                                    <option value="">Select language...</option>
                                                    <option value="EN">English</option>
                                                    <option value="FR">French</option>
                                                    <option value="SP">Spanish</option>
                                                    <option value="CH">Chinese</option>
                                                    <option value="JP">Japanese</option>
                                                </select>
                                                <i class="arrow double"></i>                    
                                            </label>  
                                        </div><!-- end section -->                     
                                        
                                        <div class="section">
                                            <label for="file1" class="field file">
                                                <span class="button btn-primary"> Choose File </span>
                                                <input type="file" class="gui-file" name="upload1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                                <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly>
                                            </label>
                                        </div><!-- end  section -->
                                        
                                        <div class="section">
                                            <label class="field select-multiple">
                                              <select name="mobileos" id="mobileos" multiple>
                                                  <option value="0">Apple iOS </option>
                                                  <option value="1">Windows Mobile </option>
                                                  <option value="2">Google Android</option>
                                                  <option value="3">Tizen mobile OS</option>
                                                  <option value="5">Firefox OS</option>
                                                  <option value="6">Blackberry OS</option>
                                                  <option value="6">Symbian</option>
                                              </select>       
                                            </label>        
                                        </div><!-- end  section -->                     
                                        
                                        <div class="section">
                                            <label for="comment" class="field prepend-icon">
                                                <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                                                <span class="input-footer"> 
                                                    <strong>DO NOT:</strong> Be negative or off topic, we expect a great comment... 
                                                </span>   
                                            </label>
                                        </div><!-- end section --> 
                                        
                                        <div class="section-divider mv40"><span> Fill at least one  </span></div><!-- .section-divider -->                                         
                                        <div class="section row">
                                        
                                            <div class="col-md-6">
                                                <label for="mobile_phone" class="field prepend-icon">
                                                    <input type="tel" name="mobile_phone" id="mobile_phone" class="gui-input phone-group" placeholder="Mobile number">
                                                    <label for="mobile_phone" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                            
                                            <div class="col-md-6">
                                                <label for="home_phone" class="field prepend-icon">
                                                    <input type="tel" name="home_phone" id="home_phone" class="gui-input phone-group" placeholder="Home number">
                                                    <label for="home_phone" class="field-icon"><i class="fa fa-phone"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                         
                                        </div><!-- end .section row section -->

                                        <div class="section-divider mv40"><span> Equal -  Matching elements </span></div><!-- .section-divider -->                   
                                        
                                        <div class="section">
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i></label>  
                                            </label>
                                        </div><!-- end section -->
                                        
                                        <div class="section">
                                            <label for="repeatPassword" class="field prepend-icon">
                                                <input type="password" name="repeatPassword" id="repeatPassword" class="gui-input" placeholder="Repeat password">
                                                <label for="repeatPassword" class="field-icon"><i class="fa fa-unlock-alt"></i></label>  
                                            </label>
                                        </div><!-- end section -->

                                        <div class="section-divider mv40"><span>  Checkboxes + Radios Group </span></div><!-- .section-divider --> 
                                        
                                        <div class="section row">
                                        
                                            <div class="col-md-6 pad-r40 border-right">
                                                <div class="option-group field">
                                                    <label for="female" class="option option-primary block">
                                                        <input type="radio" name="gender" id="female" value="female">
                                                        <span class="radio"></span> Female specie
                                                    </label>
                                                    
                                                    <label for="male" class="option block option-primary mt10">
                                                        <input type="radio" name="gender" id="male" value="male">
                                                        <span class="radio"></span> Male specie                  
                                                    </label>                            
                                                    
                                                    <label for="other" class="option block option-primary mt10">
                                                        <input type="radio" name="gender" id="other" value="other">
                                                        <span class="radio"></span> Other specie                 
                                                    </label>
                                                    
                                                </div>
                                                                    
                                            </div><!-- end .section section -->                                
                        
                                            
                                            <div class="col-md-6 pl40">
                                                <div class="option-group field">
                                                
                                                    <label class="option block option-primary">
                                                        <input type="checkbox" name="languages" value="FR">
                                                        <span class="checkbox"></span> Fluent french            
                                                    </label>
                                              
                                                    <label class="option block option-primary mt10">
                                                        <input type="checkbox" name="languages" value="EN">
                                                        <span class="checkbox"></span> Fluent english              
                                                    </label>
                                                    
                                                    <label class="option block option-primary mt10">
                                                        <input type="checkbox" name="languages" value="CH">
                                                        <span class="checkbox"></span> Fluent chinese            
                                                    </label>                                
                                                    
                                                </div>                        
                                            </div><!-- end section -->
                                            
                                        </div> <!-- end .section row section -->
                                        
                                        
                                            <div class="section-divider mv40"><span> Custom Methods </span></div><!-- .section-divider -->
                                        
                                        <div class="section">
                                            <div class="smart-widget sm-left sml-120">
                                                <label for="verification" class="field prepend-icon">
                                                    <input type="text" name="verification" id="verification" class="gui-input" placeholder="Solve verification">
                                                    <label for="verification" class="field-icon"><i class="fa fa-shield"></i></label>  
                                                </label>
                                                <label for="verification" class="button">15 + 4 = </label>
                                            </div><!-- end .smart-widget section --> 
                                        </div><!-- end section -->
                                        
                                        
                                            <div class="section-divider mv40"><span> Conditional validation </span></div><!-- .section-divider -->
                                        
                                        <div class="section">
                                            <p class="small-text text-muted"> 1 - The applicant age must be 16 years and above </p>
                                            <p class="small-text text-muted"> 2 - For applicants above 19 years, a licence number will be required </p>
                                        </div><!-- end section -->                    
                                        
                                        <div class="section row">
                                        
                                            <div class="col-md-6">
                                                <label for="applicant_age" class="field prepend-icon">
                                                    <input type="text" name="applicant_age" id="applicant_age" class="gui-input" placeholder="Applicant age">
                                                    <label for="applicant_age" class="field-icon"><i class="fa fa-male"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                            
                                            <div class="col-md-6">
                                                <label for="licence_no" class="field prepend-icon">
                                                    <input type="text" name="licence_no" id="licence_no" class="gui-input" placeholder="Licence number">
                                                    <label for="licence_no" class="field-icon"><i class="fa fa-credit-card"></i></label>  
                                                </label>
                                            </div><!-- end section -->
                                         
                                        </div><!-- end .section row section -->
                                        
                                        <div class="spacer"></div>
                                        
                                        <div class="section">
                                            <p class="small-text text-muted"> Child name will be required when you agree / tick / check that you are a parent </p>
                                        </div><!-- end section -->                    
                                        
                                        
                                        <div class="section">
                                            <div class="option-group field">
                                            
                                                <label class="option block">
                                                    <input type="checkbox" name="parents" id="parents" value="parents">
                                                    <span class="checkbox"></span> Yes i am a parent        
                                                </label>
                                                
                                            </div><!-- end .option-group section -->             
                                        </div><!-- end section --> 
                                                            
                                        <div class="section">
                                            <label for="child_name" class="field prepend-icon">
                                                <input type="text" name="child_name" id="child_name" class="gui-input" placeholder="Enter childs name">
                                                <label for="child_name" class="field-icon"><i class="fa fa-female"></i></label>  
                                            </label>
                                        </div><!-- end section -->                   
                                        
                                    </div><!-- end .form-body section -->
                                    <div class="panel-footer text-right">
                                        <button type="submit" class="button btn-primary"> Validate Form </button>
                                        <button type="reset" class="button"> Cancel </button>
                                    </div><!-- end .form-footer section -->
                                </form>

                            </div>

                        </div>
                        <!-- end: .admin-form -->

                    </div>

                </div>