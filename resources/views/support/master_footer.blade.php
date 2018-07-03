<footer id="tg-footer" class="tg-footer tg-footervtwo tg-haslayout">
   <div class="tg-footerbar">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <span class="tg-copyright">2018 All Rights Reserved &copy; Indian Humanists</span>
            </div>
         </div>
      </div>
   </div>
</footer>

</div>

<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/jquery-library.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/bootstrap.min.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/jgallery.min.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/scrollbar.min.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/owl.carousel.min.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/main.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/jquery.pogo-slider.js"></script>
<script src="https://s3.amazonaws.com/indian-humanists-bucket/js/canvasjs.min.js"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5afaf13d6327f847"></script>


@if(Session::has('msg_ok'))
<script type="text/javascript">
$(document).ready(function(){
$('#voted').modal('toggle');
});
</script>
@endif


@if(Session::has('user_voted'))
<script type="text/javascript">
$(document).ready(function(){
$('#again').modal('toggle');
});
</script>
@endif

<script>
  function blinker()
  {
    $('.blinkme').fadeOut(500);
    $('.blinkme').fadeIn(500);
  }

  $(document).ready(function(){
    setInterval(blinker,1000);
  });
</script>



<script>
   window.onload = function () {
       CanvasJS.addColorSet("greenShades",
           [
             
               "#ff4444",
               "#99cc00",
           ]);
       var chart = new CanvasJS.Chart("tg-donutchart", {
           animationEnabled: true,
           backgroundColor:"rgba(0,0,0,0)",
           colorSet: "greenShades",
           data: [{
               type: "doughnut",
               startAngle: 10,
               indexLabelFontSize: 17,
               dataPoints: [
                   { y: 5},
                   { y: 80}
               ]
           }]
       });
       chart.render();
   }
</script>