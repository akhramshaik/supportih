@extends('support.master')
@section('content')
<div id="tg-homeslidervtwo" class="tg-homeslider tg-homeslidervtwo owl-carousel">
   <div class="item">
      <figure>
         <img src="https://s3.amazonaws.com/indian-humanists-bucket/support_babu_gogineni_banner.jpg" alt="image description">
         <figcaption>
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-push-1 col-md-10 col-lg-push-2 col-lg-8">
                     <div class="tg-slidercontent">
                        <div class="tg-description">
                           <p> Democracy needs Dialogue, not Dogma; Reason, not Ritual - 
                              <a href="{{ route('about') }}">Babu Gogineni</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </figcaption>
      </figure>
   </div>
</div>
<main id="tg-main" class="tg-main tg-haslayout">
   <section class="tg-sectionspace tg-haslayout">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-sectionheadvtwo text-center">
                  <div class="tg-sectiontitle">
                     <h2> Horoscope or <span>Telescope</span></h2>
                  </div>
                  <div class="tg-description">
                     <p style="color: black">
                        Protecting our intellectuals is not an option, it is fundamental to the progress of our society! The ongoing attack on international Humanist and Human Rights activist Babu Gogineni warrants for the strongest condemnation from all sections of our society and your voice is what we need to take this movement forward.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="tg-sectionspace tg-bgfixed tg-bgfixedfloatdonation tg-haslayout">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
               <div class="tg-sectionheadvtwo tg-colorwhite text-center">

                  <div class="tg-sectiontitle">
                     <h2>Your Vote is <span> Your Voice</span></h2>
                  </div>
                  <div class="tg-description">
                     <p>Let us put an end to the assumption that we are only a few. Make your voice heard and help us reach more. Please sign the petition by clicking support button below and share it with your friends.
                     </p>
                  </div>

               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-2 col-lg-8 col-lg-push-2">
               <div class="tg-floatdonations">
                  <div id="tg-donutchart" class="tg-donutchart"></div>
                  <ul class="tg-graphinfo">
                     <li class="tg-administration"><span>2,00,000 Our Target</span></li>
                     <li class="tg-spendcauses"><span> {{ $voteCount }} Supported</span></li>
                     <a class="tg-btn tg-btnactive bbb " href="{{ route('vote') }}"><span class="blinkme">Click to Support <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                  </a>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <style type="text/css">
      .foryou{
      padding-left: 10px;
      padding-right: 10px;
      }
   </style>
   <section class="tg-sectionspace tg-haslayout">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-sectionheadvtwo text-center">
                  <div class="tg-sectiontitle">
                     <h2>Allegations - <span> But where are the proofs? </span></h2>
                  </div>
                  <div class="tg-description">
                     <p>
                        As part of a larger conspiracy, many baseless accusations and made up stories are being circulated on the social media for the past few weeks. But, to date, NOT EVEN a SINGLE piece of evidence has been produced to support those allegations! Watch how some of our learned friends responded to the false accusations against Babu Gogineni.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="tg-educationposts">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_XnTY17HV4M?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315"  src="https://www.youtube.com/embed/Q7UC7U9vpH8?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="tg-educationposts">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5UQMGlh-7w4?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315"  src="https://www.youtube.com/embed/Yl6LR9DaPgw?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="tg-educationposts">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/CPmFwNXq1FU?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foryou">
                     <div class="tg-educationpost">
                        <iframe width="560" height="315"  src="https://www.youtube.com/embed/9HPlpgEm7I0?rel=0&autoplay=0&showinfo=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="tg-sectionspace tg-bgfixed tg-bgfixedvideo tg-haslayout">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-push-1 col-lg-10">
               <div class="tg-videobox">
                  <a class="tg-btnplayvideo" target="_blank" href="https://www.facebook.com/groups/BabuGogineni/"><img src="images/icon-01.png" alt="image description"></a>
                  <h2><em>For more updates join us on </em><a style="color: white;" target="_blank" href="https://www.facebook.com/groups/BabuGogineni/"><span>Babu Gogineni FB Group</span></a></h2>
               </div>
            </div>
         </div>
      </div>
   </section>
<!--    <section class="tg-sectionspace tg-haslayout" style="padding-bottom: 0px;">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
               <div class="tg-sectionheadvtwo text-center">
                  <div class="tg-sectiontitle">
                     <h2>What people <span>Says</span></h2>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="seprator"></div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="item active">
                                 <div class="row" style="padding: 20px">
                                    <p class="testimonial_para" style="text-align: left;">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p>
                                    <br>
                                    <div class="row">
                                       <div class="col-sm-2">
                                          <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 80px">
                                       </div>
                                       <div class="col-sm-10" style="text-align: left;">
                                          <h4><strong>Jack Andreson</strong></h4>
                                          <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                             <span>Officeal All Star Cafe</span>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="row" style="padding: 20px">
                                    <p class="testimonial_para" style="text-align: left;">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p>
                                    <br>
                                    <div class="row">
                                       <div class="col-sm-2">
                                          <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
                                       </div>
                                       <div class="col-sm-10" style="text-align: left;">
                                          <h4><strong>Kiara Andreson</strong></h4>
                                          <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                             <span>Officeal All Star Cafe</span>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="controls testimonial_control pull-right">
                           <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                              data-slide="prev"></a>
                           <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                              data-slide="next"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
</main>
@endsection