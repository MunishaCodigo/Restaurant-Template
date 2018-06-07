<?php include('./header.php') 
?>

    <!-- Header -->

      <header class="contact-header">
      <div class="container">
        <div class="intro-service-text text-center contact">
          <div class="intro-service-in restaurant_color text-center">Contact Us</div>
          <div class="intro-service-heading white text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
          <div class="restaurant_color font-weight-bold text-center">CONTACT INFO</div>
          <div class="intro-service-heading font-weight-bold text-center"><a class="white" href="tel:08425484214">0842-5484214</a></div>
        </div>
      </div>
    </header>

  <div class="modal" role="dialog" id="contactModal">
      <div class="modal-content">
    <span id="closeConatct" class="close">&times;</span>
      <div class="modal-header text-center">
          <h4 class="modal-title " id="myModalLabel">Your message has been sent successfully.</h4>
          <p class="restaurant_color">We ll get back to you soon!</p>
      </div>   
    </div>
  </div>
</div>

      <div class="container">
        <div class="contact-form ">
          <form class="flex-sb flex-w rest-grey" id="contactForm" method="post" action="sendEmail.php">
            <h1 class="contact-heading">Get in touch</h1>
            <div class="section-subheading restaurant_color p-b-10 text-center">Dine and lunch with us</div>
            <div class="contact-register-form">
              <div class="wrap-input rs2 validate-input" data-validate = "Name is required">
                <label id="nameLabel" for="name">Name<span class="red">*</span></label>
                <input class="input-form alert-validate" id="name" type="text" name="name" required>
                <span class="focus-input"></span>
              </div>
        
              <div class="wrap-input rs2 validate-input" data-validate = "Email is required: e@a.z">
                <label for="email">Email<span class="red">*</span></label>
                <input class="input-form alert-validate" id="email" type="email" name="email" required>
                <span class="focus-input"></span>
              </div>
        
              <div class="wrap-input validate-input ml-2" data-validate = "Message is required">
                <label for="message">Message<span class="red">*</span></label>
                <textarea class="input-form alert-validate" id="message" name="message" required></textarea>
                <span class="focus-textbox"></span>
              </div>
              <div class="text-center">
                <button type="submit" class="submit send-btn"><img src="icon/send.svg" ></a></button>
              </div>
            </div>
          </form>
        </div>        
      </div>
        
	<div class="smallmobileWidth text-left">
          <a id="reservation-button" href="#"><img class="phone" src="icon/reservation-button.svg"></a>
        </div>
        <div class="mobileWidth text-right">
          <a href="tel:08425484214"><img class="phone" src="icon/phone.svg"></a>
        </div>
      </div>    <!-- Google Map-->
     <section id="map">
<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://my.ctrlq.org/maps/#roadmap|17|59.3501893683747|18.068488969033865"></iframe>
    </section>


<?php include('./footer.php') ?>