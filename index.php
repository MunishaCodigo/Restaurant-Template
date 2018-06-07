<?php include('./header.php') ?>
    <!-- Header -->
  
   <header class="masthead">
          <div class="container">
        <div class="intro-text text-center">
          <div class="intro-lead-in white text-uppercase">Restaurant</div>
          <div class="intro-heading text-uppercase restaurant_color">Food & Drink</div>
          <div>
          <button id="makereserve" type="button" class="custom-btn buttonReservation"><span>Make your reservation</span></button>
          </div>

        </div>
        <div class="intro-top text-center">
            <a href="#food">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
     
            </a>
        </div>
        <a href="#food"><div class="text text-center">See our Sepcialities</div></a>      
        <div class="smallmobileWidth text-left">
          <a id="reservation-button" href="#"><img class="phone" src="icon/reservation-button.svg"></a>
        </div>
        <div class="mobileWidth text-right">
          <a href="tel:08425484214"><img class="phone" src="icon/phone.svg"></a>
        </div>
      </div>
    </header>
 <!-- Food with description-->
    <section id="food" class="rest-brown">
      <div class="container">
        <div class="row text-center">
          <div class="food-box">
            <img src="images/meat-food.jpg" alt="MeatFood">
          </div>
          <div class="desc-box-right text-center">
            <h2 class="section-heading">MeatFood</h2>
            <div class="section-subheading restaurant_color p-b-20">Hot Deals</div>
             <div class="section-text">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </div> 
            <div class="price-heading">Best Price</div>
            <div class="section-subheading restaurant_color">50$</div>
            <div class="menu-circle">
              <img src="icon/menu-button.svg" width="25px" height="25px">
              <div class="menu-text">Menu</div>
            </div>
          </div>
      </div>

      <div class="row text-center">
          <div class="food-box ml-14">
            <img src="images/sea-food.jpg" width="550px" height="350px">
          </div>
          <div class="desc-box-left text-center">
            <h2 class="section-heading">SeaFood</h2>
            <div class="section-subheading restaurant_color p-b-20">Hot Deals</div>
             <div class="section-text">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </div> 
            <div class="price-heading">Best Price</div>
            <div class="section-subheading restaurant_color">50$</div>
            <div class="menu-circle">
              <img src="icon/menu-button.svg" width="25px" height="25px">
              <div class="menu-text">Menu</div>
            </div>
          </div>
      </div>

        <div class="row text-center">
          <div class="food-box">
            <img src="images/vegan-food.jpg" width="550px" height="350px">
          </div>
          <div class="desc-box-right text-center">
            <h2 class="section-heading">VeganFood</h2>
            <div class="section-subheading restaurant_color p-b-20">Hot Deals</div>
             <div class="section-text">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </div> 
            <div class="price-heading">Best Price</div>
            <div class="section-subheading restaurant_color">50$</div>
            <div class="menu-circle">
              <img src="icon/menu-button.svg" width="25px" height="25px">
              <div class="menu-text">Menu</div>
            </div>
          </div>
      </div>
    </section>

     <!-- Opening Hours -->
    <section id="timings" class="bg-white">
      <div class="container text-center">
        <div>
            <h1 class="section-heading text-center">OpeningHours</h1>
            <img src="icon/open-hours.svg" class="open-hours" height="70px" width="80px">
        <div>
             <div class="list-line"></div>
            <div class="swiper-container">

            <div class="swiper-wrapper p-t-30 p-b-30">
              <div class="col-2 list-inline-item swiper-slide">
              
                  <div class="list-heading">Mon</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
            
              </div>
              <div class="col-2 list-inline-item swiper-slide">
            
                  <div class="list-heading">Tus</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
          
              </div>
              <div class="col-2 list-inline-item swiper-slide">
              
                  <div class="list-heading">Wed</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
               
              </div>
              <div class="col-2 list-inline-item swiper-slide">
              
                  <div class="list-heading">Thu</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
               
              </div>
              <div class="col-2 list-inline-item swiper-slide">
               
                  <div class="list-heading">Fri</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
               
              </div>
              <div class="col-2 list-inline-item swiper-slide">
                
                  <div class="list-heading">Sat</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
               
              </div>
              <div class="col-2 list-inline-item swiper-slide">
               
                  <div class="list-heading">Sun</div>
                  <div class="list-text">09 am</div>
                  <div class="list-text">10 pm</div>
                
              </div>
            </div>
        </div>
	<div class="list-line"></div>
            <div class="text-uppercase restaurant_color m-t-40 font-12 font-weight-bold">Reservation number : <span class="rest-brown"><a href="tel:08425484214">0842-5484214</a></span></div>
          </div>
      </div>
    </section>

    <!-- Registeration Grid -->
    <section id="resgisteration" class="register">
      <div class="container text-center">
        <span class="register-form-title">
          Reservation
        </span>
        <span class="register-form-subtitle">
          Compile this form
        </span>
      <form class="register-form flex-sb flex-w" action="register.php" method="post" >
        <div class="wrap-input rs1 validate-input" data-validate = "Name is required">
          <label for="name">Name<span class="red">*</span></label>
          <input class="input-form" id="name" type="text" name="name" required>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs1 validate-input" >
          <label for="person">Number of person</label>
          <input class="input-form" id="person" type="number" name="person" min="1" max="10">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs1 validate-input" data-validate = "Date is required">
          <label for="datepicker">Date</label>
          <input class="input-form" id="datepicker" type="text" name="date">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs1 validate-input" data-validate = "Time is required">
          <label for="time">Time</label>
          <input class="input-form" id="time" type="text" name="time">
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input rs1 validate-input" data-validate = "Phone number is required">
          <label for="number">Phone Number<span class="red">*</span></label>
          <input class="input-form" id="number" type="text" name="phone" required>
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input rs1 validate-input" data-validate = "Email is required: e@a.z">
          <label for="email">Email<span class="red">*</span></label>
          <input class="input-form" id="email" type="email" name="email" required>
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input validate-input ml-2" data-validate = "Message is required">
          <label for="message">Special request</label>
          <textarea class="input-form" id="message" name="message"></textarea>
          <span class="focus-textbox"></span>
        </div>
        <div class="text-center">
         <button type="submit" class="form-btn"><img src="icon/reservation-button.svg" ></button>
        </div>
      </form>
    </div>
    </section>

       <!-- Register Modal -->
   <div id="registerModal" class="modal">

  <!-- Modal content -->
   <div class="modal-content">
    <span class="close">&times;</span>
          <div class="container text-center">
        <span class="register-form-title">
          Reservation
        </span>
        <span class="register-form-subtitle">
          Compile this form
        </span>
      <form class="register-form flex-sb flex-w" action="register.php" method="post" >
        <div class="wrap-input rs2 validate-input" data-validate = "Name is required">
          <label for="name">Name<span class="red">*</span></label>
          <input class="input-form" id="name" type="text" name="name" required>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs2 validate-input" >
          <label for="person">Number of person</label>
          <input class="input-form" id="person" type="number" name="person" min="1" max="10">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs2 validate-input" data-validate = "Date is required">
          <label for="date">Date</label>
          <input class="input-form" id="date" type="date" name="date">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input rs2 validate-input" data-validate = "Time is required">
          <label for="time">Time</label>
          <input class="input-form" id="time" type="time" name="time">
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input rs2 validate-input" data-validate = "Phone number is required">
          <label for="number">Phone Number<span class="red">*</span></label>
          <input class="input-form" id="number" type="text" name="phone" required>
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input rs2 validate-input" data-validate = "Email is required: e@a.z">
          <label for="email">Email<span class="red">*</span></label>
          <input class="input-form" id="email" type="email" name="email" required>
          <span class="focus-input"></span>
        </div>
        
        <div class="wrap-input validate-input ml-2" data-validate = "Message is required">
          <label for="message">Special request</label>
          <textarea class="input-form" id="message" name="message"></textarea>
          <span class="focus-textbox"></span>
        </div>
        <div class="text-center">
         <button type="submit" class="form-btn"><img src="icon/reservation-button.svg" ></button>
        </div>
      </form>
    </div>
  </div>

  </div>
    <div class="modal" role="dialog" id="thankYou">
      <div class="modal-content">
    <span id="reserveClose" class="close">&times;</span>
      <div class="modal-header text-center">
          <h4 class="modal-title " id="myModalLabel">Your reservation has been made successfully.</h4>
          <p class="restaurant_color">Bon App &eacute;tit!</p>
      </div>   
    </div>
  </div>
</div>
<?php include('./footer.php') ?>