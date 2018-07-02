@extends('support.master')
@section('content')

<main id="tg-main" class="tg-main tg-haslayout">
   <div class="container">
      <div class="row">
         <div id="tg-twocolumns" class="tg-twocolumns">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right ">
               <div id="tg-content" class="tg-content">
                  <div class="tg-donatenow">


                     @if(Session::has('chk_msg'))
                     <div class="alert alert-danger">
                        Sorry... Something went wrong. Please try again later.
                     </div>
                     @endif


                     <div id="voted" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 125px;">
                           <?php 
                              $title=urlencode("I Support Babu Gogineni. Lets bring up the voice of humanism.");
                              $url=urlencode("http://13.127.18.176/we-support-babu-gogineni");
                              $summary=urlencode("Learn how to create a custom Facebook 'Share' button, complete with a custom counter, for your website!");
                              $image=urlencode("http://13.127.18.176/images/slider/img-06.jpg");
                              ?>
                           <div class="modal-content">
                              <div class="modal-header" style="border: none;">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body" style="padding-top: 0px;">
                                 <center>
                                    <i class="fa fa-smile-o fa-4x" style="color: #4CAF50" aria-hidden="true"></i>
                                    <p>Thanks for your Support.</p>
                                 </center>
                                 <h3>Caption here to shareee...</h3>
                                 <center>
                                    <a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"> 
                                    <button style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button></a>
                                 </center>
                              </div>
                              <div class="modal-footer">
                              </div>
                           </div>
                        </div>
                     </div>


                     <div id="again" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 125px;">
                           <?php 
                              $title=urlencode("I Support Babu Gogineni. Lets bring up the voice of humanism.");
                              $url=urlencode("http://13.127.18.176/we-support-babu-gogineni");
                              $summary=urlencode("Learn how to create a custom Facebook 'Share' button, complete with a custom counter, for your website!");
                              $image=urlencode("http://13.127.18.176/images/slider/img-06.jpg");
                              ?>
                           <div class="modal-content">
                              <div class="modal-header" style="border: none;">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body" style="padding-top: 0px;">
                                 <center>
                                    <i class="fa fa-smile-o fa-4x" style="color: #4CAF50" aria-hidden="true"></i>
                                    <p>Hay.. This Email or Mobile is already used for supporting Babu Gogineni.</p>
                                 </center>
                                 <h3>Caption here to shareee...</h3>
                                 <center>
                                    <a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"> 
                                    <button style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button></a>
                                 </center>
                              </div>
                              <div class="modal-footer">
                              </div>
                           </div>
                        </div>
                     </div>


                     <div class="tg-sectiontitle">
                        <h2>Support now</h2>
                     </div>

                     <form  class="tg-themeform tg-formdonation" action="{{ route('voteprocess') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <fieldset>
                           <div class="tg-donationstep">
                              <div class="tg-steptitle">
                                 <p>This is just to show my own interest to support bg...a </p>
                              </div>
                              <div class="tg-fieldgroup">
                                 <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" required="" autocomplete="off" placeholder="Full Name">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="occupation" class="form-control" required="" autocomplete="off" placeholder="Occupation ">
                                 </div>
                                 <div class="form-group">
                                    <input type="email" name="emailid" class="form-control" required="" autocomplete="off" placeholder="Email ID">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="phone" class="form-control" required="" autocomplete="off" placeholder="Phone">
                                 </div>
                                 <div class="form-group">
                                    <textarea name="message" class="form-control" autocomplete="off" placeholder="Message ( Optional )"></textarea>
                                 </div>



                              </div>
                              <input type="hidden" id="csrf-token" value="{{csrf_token()}}" name="_token">
                              <button class="tg-btn" type="submit">Submit</button>
                           </div>
                           <p style="color: #e87e7e;font-size: 10px;"> * Information collected here is completely for non commertial use and no where realted to babu gogineni...this information is seccured and safe using encrypted algorithms under high secured environmnet</p>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<input type="hidden" id="tg-donutchart" name="">

@endsection