
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



    <script src="{{ asset('support/js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('support/js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
    <script src="{{ asset('support/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('support/js/jquery.pogo-slider.js') }}"></script>
    <script src="{{ asset('support/js/plotly-latest.min.js') }}"></script>
    <script src="{{ asset('support/js/backgroundstretch.js') }}"></script>
    <script src="{{ asset('support/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('support/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('support/js/scrollbar.min.js') }}"></script>
    <script src="{{ asset('support/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset('support/js/jgallery.min.js') }}"></script>
    <script src="{{ asset('support/js/numeric.min.js') }}"></script>
    <script src="{{ asset('support/js/countdown.js') }}"></script>
    <script src="{{ asset('support/js/gmap3.js') }}"></script>
    <script src="{{ asset('support/js/main.js') }}"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5afaf13d6327f847"></script>
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