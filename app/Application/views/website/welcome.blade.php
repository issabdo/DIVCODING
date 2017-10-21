@extends('layouts.app')

@section('content')
<!--  Home   -->
<section id='home'>
       <div id='home-cover' class="bg-parallax animated fadeIn">
         <!-- particles.js container -->
         <div id="particles-bg" class="full-screen">
             <div id="particles-js"></div> <!-- /.particles div -->
           </div>
         <div id='home-content-box'>
            <div id='home-content-box-inner' class="text-center">

              <div id='home-heading' class="animated zoomIn">
                <h3>{{ adminTrans('website' , 'look') }}<br>{{ adminTrans('website' , 'thesite') }}</h3>
              </div>
            <!--   <div id="home-btn" class="animated zoomIn">
                <a href="#Work" class="btn btn-lg btn-general btn-white" role="button" title="View Our Work" >View Our Work</a>
              </div> -->

            </div><!--End home content box inner   -->
         </div><!-- End home content box   -->
       </div><!-- End home cover   -->

   </section><!-- End Home   -->

<!-- Services  -->
<section id="services">
     <div class="content-box">

       <div class="content-title wow animated fadeInDown" data-wow-duration='1s' data-wow-delay='.5s'>
         <h3>{{ adminTrans('website' , 'service') }}</h3>
         <div class="content-title-underline"></div>
       </div><!-- End content-title  -->

       <div class="container">
         <div class="row">
            <!-- Item 1  -->
            <div class="col-md-4 col-sm-6 wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='.2s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-paint-brush fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'webdesign') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'webdesign-d') }}</p>
                </div>
              </div>
            </div>
            <!-- Item 2  -->
            <div class="col-md-4 col-sm-6 wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='.4s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-laptop fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'webdev') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'webdev-d') }}</p>
                </div>
              </div>
            </div>
            <!-- Item 3  -->
            <div class="col-md-4 col-sm-6 wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='.6s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-tablet fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'mobile') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'mobile-d') }}</p>
                </div>
              </div>
            </div>
            <!-- Item 4  -->
            <div class="col-md-4 col-sm-6 wow  animated fadeInUp" data-wow-duration='1s' data-wow-delay='.8s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-search fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'seo') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'seo-d') }}</p>
                </div>
              </div>
            </div>
            <!-- Item 5  -->
            <div class="col-md-4 col-sm-6 wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='1s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-edit fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'ux') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'ux-d') }}</p>
                </div>
              </div>
            </div>
            <!-- Item 6  -->
            <div class="col-md-4 col-sm-6 wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='1.2s'>
              <div class="service-item">
                <div class="service-item-icon">
                  <i class="fa fa-paint-brush fa-3x"></i>
                </div>
                <div class="service-item-title">
                  <h3>{{ adminTrans('website' , 'support') }}</h3>
                </div>
                <div class="service-item-desc">
                  <p>{{ adminTrans('website' , 'support-d') }}</p>
                </div>
              </div>
            </div>

        </div>
      </div><!-- End container  -->
     </div><!-- End content-box  -->
   </section><!-- End Services  -->

<!-- About  -->
  <section id="about">
  <!-- About right side with content  -->
  <div  id="about-bg-diagonal" class="bg-parallax">
  </div>

  <!-- About left side with content  -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div id="about-content-box">
          <div id="about-content-box-outer">
            <div id="about-content-box-inner">

              <div class="content-title wow animated fadeInDown" data-wow-duration='1s' data-wow-delay='.5s'>
                <h3>{{ adminTrans('website' , 'about') }} {{getSetting('siteTitle')}}</h3>
                <div class="content-title-underline"></div>
              </div><!-- End content-title  -->

              <div id="about-desc" class="wow animated fadeInDown" data-wow-duration='1s' data-wow-delay='.5s'>
                <p>{{ adminTrans('website' , 'about-1') }}</p>
              </div>

           <!--    <div id="about-btn" class="wow animated fadeInUp" data-wow-duration='1s' data-wow-delay='.5s'>
                <a href="#" class="btn btn-lg btn-general btn-blue ">Our work</a>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>



<!-- Team  -->
<section id='team'>
      <div class="content-box">

        <div class="content-title wow animated fadeInDown" data-wow-duration='1s' data-wow-delay='.5s'>
          <h3>{{ adminTrans('website' , 'ourteam') }}</h3>
          <div class="content-title-underline"></div>
        </div><!-- End content-title  -->

        <div class="container">
          <div class="row">
            <div class='col-md-6 col-md-offset-3'>
                <div id="team-members" class="owl-carousel owl-theme">

            @foreach ($teams as $team)
                  
                  <div class="team-member">
                    <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$team->image) }}" class="img-responsive"  alt="">
                    <div class="team-member-info text-center">
                      <h4 class="team-member-name">{{ $team->name}}</h4>
                      <h4 class="team-member-designation">{{ $team->profile}}</h4>
                        <ul class="social-list">
                          <li><a href="{{ $team->fb}}" class="social-icon icon-gray"><i class='fa fa-facebook'></i></a></li>
                          <li><a href="{{ $team->linkedin}}" class="social-icon icon-gray"><i class='fa fa-linkedin'></i></a></li>
                        </ul>
                         <h5 class="team-member-name">{{ $team->email}}</h5>
                    </div>
                  </div>
                 
             @endforeach

                </div>
            </div>
          </div>
        </div>

      </div>
    </section>


@endsection
