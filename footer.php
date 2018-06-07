    <!-- Get In touch -->

     <section class="rest-grey">
     <div class="container text-center col-12">
        <div class="list-inline-item col-4 footer-box text-uppercase m-t-20">
           <div class="rest-brown footer-lead-in">Restaurant</div>
           <div class="restaurant_color lead-in-heading">Food & Drink</div>
           <div>
            <ul class="ml-4 list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook rest-brown fa-2x"></i></a>
              </li> 
              <li class="list-inline-item ">
                <a href="#"><i class="fa fa-twitter rest-brown fa-2x"></i></a>
              </li> 
              <li class="list-inline-item ">
                <a href="#"><i class="fa fa-linkedin rest-brown fa-2x"></i></a>
              </li>
	      <li class="list-inline-item ">
                <a href="http://www.globuzzer.com/"><embed src="icon/globuzzer.svg" width="30" height="30"></a>
              </li>		
            <ul>
          </div>
        </div>
        <div class="list-inline-item footer-box col-4 m-t-20">
           <div class="rest-brown footer-heading">Get in touch</div>
           <div class="restaurant_color footer-sub-heading">Restaurant, to consequat ipsum nec sagittis sem.</div>
           <div class="rest-brown footer-text">
            <div>Restaurant, STOCKHOLM 1258, Sweden</div>
            <div class="font-weight-bold"><a href="tel:08425484214">0842-5484214</a></div>
            <div>info@restaurant.com</div>
          </div>
        </div>        
        <div class="list-inline-item footer-box col-4 m-t-20">
           <div class="rest-brown footer-heading"><img src="images/logo-gb.svg" width="250px" height="25px"></div>
           <div class="restaurant_color footer-sub-heading">Restaurant, to consequat ipsum nec sagittis sem.</div>
           <div class="rest-brown ">
            <p class="footer-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->

    <footer class="bg-white">

      <div class="container">

        <div class="col-12 ">

           <div class="col-6 list-inline mr-6">

             <ul class="list-inline">

              <li class="list-inline-footer">

                <a href="index.php">

                  <div class="list-text-footer text-uppercase">Home</div>

                </a>

              </li>

              <li class="list-inline-footer">

                <a href="about.php">

                  <div class="list-text-footer text-uppercase">About</div>

                </a>

              </li>

              <li class="list-inline-footer">

                <a href="menu.php">

                  <div class="list-text-footer text-uppercase">Menu</div>

                </a>

              </li>

              <li class="list-inline-footer">

                <a href="services.php">

                  <div class="list-text-footer text-uppercase">Services</div>

                </a>

              </li>

              <li class="list-inline-footer">

                <a href="contact.php">

                  <div class="list-text-footer text-uppercase">Contacts</div>

                </a>

              </li>

            </ul>

          </div>



           <div class="col-5 list-inline">

            <span class="copyright font-italic">Copyright &copy;2018 RESTAURANT, All rights reserved</span>

        </div>

        </div>

      </div>

    </footer>
	


    <!-- Plugin JavaScript -->



    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Scripts for this form validation -->
    <script src="js/jquery.validate.js"></script>

    <!-- Swiper JS -->

     <script src="dist/js/swiper.js"></script>

    <!-- Custom scripts for this template -->

    <script src="js/agency.js"></script>
    <script src="js/jquery.easyPaginate.js"></script>
    <script src="js/pikaday.js"></script>
    <script type="text/javascript">

      //Datepicker
    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        firstDay: 1,
        minDate: new Date(),
        maxDate: new Date(2050, 12, 31),
        yearRange: [2000,2050],
    });
      //scrolling with button click

      $("#makereserve").on('click', function(event) {
        console.log("go down");
      $('html,body').animate({
        scrollTop: $("#resgisteration").offset().top},
        1200);
        });

      //Collapsing Navbar
      function buttontoggle() {
        var x = document.getElementById("navbarResponsive");
        if (x.className === "collapse navbar-collapse") {
            x.className = "show"+" navbar-collapse";
        }
        else {
          x.className = "collapse"+" navbar-collapse";
        }
        }

        var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
        });
      $('#breakfast-box').easyPaginate({
          paginateElement: '.burger-box',
          elementsPerPage: 6
      });
     $('#lunch-box').easyPaginate({
          paginateElement: 'div',
          elementsPerPage: 6
      });
      $('#dinner-box').easyPaginate({
          paginateElement: 'div',
          elementsPerPage: 6
      });

    var modalContact = document.getElementById('contactModal');
    var modalThank = document.getElementById('thankYou');
    var url = window.location.href;

    // Get the modal
    var modal = document.getElementById('registerModal');

    // Get the button that opens the modal
    var btn = document.getElementById("reservation-button");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var contactClose = document.getElementById("closeConatct");
    var reserveClose = document.getElementById("reserveClose");
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal

      if(url.indexOf('success') != -1)
    {
        modalContact.style.display = "block";
        contactClose.onclick = function() {
        modalContact.style.display = "none";
    }
    }
     else if(url.indexOf('reserved') != -1)
    {
        modalThank.style.display = "block";
        reserveClose.onclick = function() {
        modalThank.style.display = "none";
    }
    }
    else{
       span.onclick = function() {
       modal.style.display = "none";
    }
    }
   
  // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if ((event.target == modal)){
        modal.style.display = "none";
    }
       else if (event.target == modalContact){
        modalContact.style.display = "none";
     
    }
       else if (event.target == modalThank){
        modalThank.style.display = "none";
    }
  }
    </script>
  </body>

</html>
