@extends('layouts.master')

@section('content')
 <!-- Start Sound -->
    <audio autoplay>
      <source src="audio/Sound of Ringing bell - 128K MP3.wav" type="audio/mpeg">
      Your browser does not support the audio tag.
    </audio>
    <!-- End Sound -->

  <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="vendor/images/01.jpg" alt="estmated">
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="vendor/images/02.jpg" alt="">
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="vendor/images/03.jpg" alt="">
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="vendor/images/04.png" alt="">
          </div>
        </div>
        <!-- End Fourth slide -->


      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->


    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-bolt"></span>
              <h3>Hint</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              <p> Lorem ipsum dolor sit amet, consectetuerh</p>
              <div class="readmore_area">
                <a href="#" data-hover="Read More"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>

        
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Happy Hours</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
              <ul class="opening-table">
                <li>
                  <span>Monday - Friday</span>
                  <div class="value">8.00 - 16.00</div>
                </li>
                <li>
                  <span>Saturday</span>
                  <div class="value">9.30 - 15.30</div>
                </li>
                <li>
                  <span>Sunday</span>
                  <div class="value">9.30 - 17.00</div>
                </li>
              </ul>              
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
@if($state == false)
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-calendar"></span> 
            

              <h3>Login / Signup</h3>
              @if(session('status'))
                  {{ session('status') }}
                @endif
                @foreach($errors as $error )
                  {{ $error }}
                @endforeach
                <form class="appointment-form" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="login">
                    <label for="email">Email</label>
                    <input  placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                      @endif

                    <br>
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control">
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <br>
                    <input type="submit" value="Login">
                </div>
     <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
          </form>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Signup"><span>Signup</span></a>    
              </div>
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Registration Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                        

 <form class="appointment-form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="username" class="control-label">Your name <span class="required">*</span>
                              </label>
                              <input id="username" type="text"  name="username" value="{{ old('username') }}"  class="wp-form-control wpcf7-text" placeholder="Your name" required autofocus>
                               @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label for="email" class="control-label">Your Email <span class="required">*</span>
                              </label>
                              <input type="email" id="email"  class="wp-form-control wpcf7-email" name="email" placeholder="Email address" value="{{ old('email') }}" required>  
                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                         
                          
                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="password" class="control-label">PassWord <span class="required">*</span>
                              </label>
                              <input type="password" class="wp-form-control wpcf7-text" id="password" name="password" placeholder="Password" required>
                              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label for="password-confirm" class="control-label">PassWord <span class="required">*</span>
                              </label>
                              <input type="password" id="password-confirm" name="password-confirmation" class="wp-form-control wpcf7-text" placeholder="Password-Confirm">  
                            </div>
                          </div>

                          </div>   
                          
                         <button class="wpcf7-submit button--itzel" type="submit">Regist</button>  
                        </form>



                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->

    
    @endif

   

@if($state==true)

                <!--======================== When LOGIN============================-->


              
                 <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-bolt"></span>
              <h3>Hint(when login)</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              <p> Lorem ipsum dolor sit amet, consectetuerh</p>
              <div class="readmore_area">
                <a href="#" data-hover="Read More"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>

                           <!-- start modal window -->
              
          
                 <!--======================== When LOGIN END============================-->
                 @endif
<!--=========== BEGAIN Verified SECTION ================-->
    <section id="meetVerified">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="meetVerified-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Products</h2>
                <div class="line"></div>
              </div>
              <div class="Verified-area">
                <ul class="Verified-nav">
                  <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>   
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                   <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Start 2th Row -->
              <div class="Verified-area">
                <ul class="Verified-nav">
                  <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>   
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                   <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- End 2th Row -->
              <!-- Start 3thRow -->
              <div class="Verified-area">
                <ul class="Verified-nav">
                  <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>   
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                   <li>
                    <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-Verified">
                      <div class="single-Verified">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="vendor/images/gallery/phone6.png" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                              <h2>Name</h2>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-Verified-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- End 3th Row -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Verified SECTION ================-->


    <!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Services</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-user service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="#">Register</a></h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-money service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="#">Buy or Bid</a></h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-bell service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="#">Submit a Bid</a></h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->

    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Why Choose Us</h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
                    <div class="whychoose-singleslide">
                      <img src="vendor/images/03.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="vendor/images/04.png" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="vendor/images/05.png" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-calendar"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Great Infrastructure</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-thumbs-up"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Trusted</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-asterisk"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Safer</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <section id="counterSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                    2000
                  </div>
                  <div class="counter-label">Product</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    2500
                  </div>
                  <div class="counter-label">Cuctomer</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    350
                  </div>
                  <div class="counter-label">Awards</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    1000
                  </div>
                  <div class="counter-label">Bid</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Counter SECTION ================-->

    <!--=========== BEGAIN Home Blog SECTION ================-->
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>News From Blog</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="vendor/images/06.png" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Name</a></li>
                            <li>In <a href="#">Bid</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>There are many variations of passage</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="vendor/images/06.png" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Name</a></li>
                            <li>In <a href="#">Bid</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>There are many variations of passages</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="vendor/images/06.png" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Name</a></li>
                            <li>In <a href="#">Bid</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>There are many variations of passages</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Home Blog SECTION ================-->

@endsection