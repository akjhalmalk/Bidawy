@if(count($errors)>0)
   <section class="info-box-fail">
        @foreach($errors->all() as $error)
          
           {{ $error }}
      
        @endforeach
   </section>
@endif
@if(Session::has('fail'))
   <section class="info-box-fail">
          
           {{ Session::get('fail') }}
   </section>
@endif
<form method="post" action="{{ route('register.create') }}" class="appointment-form">

                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="username" class="control-label">User name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="User name" name="username" id="username">
                            </div>

                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="email" class="control-label">Email <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your Email" name="email" id="email">
                            </div>
                            
                          
                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="password" class="control-label">Password <span class="required">*</span>
                              </label>
                              <input id="password" name="password" type="password" class="wp-form-control wpcf7-text" placeholder="Pass">
                            </div>
                           
                          </div>

                          </div>  
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="confirmpassword" class="control-label">Confirm Password <span class="required">*</span>
                              </label>
                              <input id="confirmpassword" name="confirmpassword" type="password" class="wp-form-control wpcf7-text" placeholder="confirm Pass">
                            </div>
                           
                          </div>

                          </div>  
                          
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Register</span></button>  
                        <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                        </form>
                    