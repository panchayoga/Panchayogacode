
   <?php include('header.php');?>
 <main id="main">




    <section class="inner-page position-relative">
      <div class="row">
        <div class="col-md-12">
          <picture>
            <source srcset="img/banner-img/faq-400.jpg" media="(max-width: 360px)">
            <source srcset="img/banner-img/faq-500.jpg" media="(max-width: 480px)">
            <source srcset="img/banner-img/faq-800.jpg" media="(max-width: 767px)">
            <source srcset="img/banner-img/faq.jpg" media="(min-width: 768px)">
            <img srcset="img/banner-img/faq.jpg" max-width="1920" max-height="815" class="img-fluid">
          </picture>

          <!--<img src="img/banner-img/faq.jpg" class="img-fluid">-->
        </div>
      </div>
    </section>


    <section class="why py-5">
     <div class="container">
       <div class="row faq-text">
       <div class="col-md-6 offset-md-3 text-center" >
       <h5 >Please use the form below to send us your queries & we’ll get back to you with an answer at the earliest</h5>
       </div>      

       </div>


       <div class="row mb-4 d-flex align-items-center justify-content-center">
<div class="col-md-9 mx-0 mt-2 mt-md-5">
  <div class="signup-form">
    <form method="post" action="faqmail.php" id="contactForm"m>
      <div class="form-row">
        <!-- <div class="form-group col-md-6">
          <label for="inputEmail4">YOUR NAME</label>
          <input type="text" name="name" class="form-control" required>      
        </div> -->
        <div class="form-group col-md-6">
          <label>Full Name</label>
          <input type="text" name="name" class="form-control" required>
          <div class="invalid-feedback">
              Please type your name.
          </div>
        </div>

        <div class="form-group col-md-6">
          <label>Email Address *</label>
          <input type="email" name="email" class="form-control"
              required>
      </div>

        <!-- <div class="form-group col-md-6">
          <label for="inputPassword4">YOUR E-MAIL</label>
          <input type="email" class="form-control" id="inputPassword4">
        </div> -->
      </div>
      <div class="form-group">
        <label for="inputAddress">YOUR QUESTION</label>
        <textarea class="form-control" id="message" placeholder=""></textarea>
      </div>

      <div class="mt-4 text-right submit-btns1">
        <button type="submit" value="SEND" id="submit" name="contactSubmit" class="btn-secondary text-uppercase">Submit your Question</button>
        <!-- <button class="btn-secondary text-uppercase">Cancel</button> -->
      </div>
    </form>
  </div>
</div>
       </div>






     </div>
      </section>


    









  </main><!-- End #main -->

  <?php include('footer.php');?>