@extends('support.master')
@section('content')

<main id="tg-main" class="tg-main tg-haslayout">
   <div class="container">
      <div class="row">
         <div id="tg-twocolumns" class="tg-twocolumns">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right ">
               <div id="tg-content" class="tg-content">
                  <div class="tg-donatenow">

@if(Session::has('msg_ok'))
<div class="alert alert-success">
Thank you for support. Help us in sharing this and lets make this campain successful together. 
</div>
@endif


@if(Session::has('user_voted'))
<div class="alert alert-danger">
This email or Mobile number als  make this campain successful together. 
</div>
@endif


@if(Session::has('chk_msg'))
<div class="alert alert-danger">
Sorry... Something went wrong. Please try again later.
</div>
@endif


                     <div class="tg-sectiontitle">
                        <h2>Support now</h2>
                     </div>
                     <form class="tg-themeform tg-formdonation" action="{{ route('voteprocess') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <fieldset>

                           <div class="tg-donationstep">
                              <div class="tg-steptitle">
                                 <p>This is just to show my own interest to support bg...a </p>
                              </div>
                              <div class="tg-fieldgroup">
                                 <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" required="" placeholder="Full Name">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="occupation" class="form-control" required="" placeholder="Occupation ">
                                 </div>
                                 <div class="form-group">
                                    <input type="email" name="emailid" class="form-control" required="" placeholder="Email ID">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="phone" class="form-control" required="" placeholder="Phone">
                                 </div>
                                 <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message ( Optional )"></textarea>
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

@endsection