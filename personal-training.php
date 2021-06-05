
<?php include('header.php');?>
  <main id="main">




    <section class="inner-page position-relative">
      <div class="row">
        <div class="col-md-12">
          <img src="img/banner-img/Personal-Training-Banner.jpg" class="img-fluid">
        </div>
      </div>
    </section>


    <section class="why py-5">
     <div class="container">
       <div class="row">
         <div class="col-md-6 text-left">
           <h2 class="text-left">Interested in <b><i>Personal Training</i></b><!--<span class="darktarquice d-block">Reclaim Your Life?</span>--></h2>
           <h5 class="font-18 text-left mt-2 mt-md-4">Kindly let us know your goals so that our team of teachers could help you personally under the guidance of Vikas sir </h5>

           <!-- <h4 class="mt-2 mt-md-4">We can’t wait to meet you! </h4> -->


         </div>

         <div class="col-md-6">

           <div class="form bg-white">
             <h4 class="send-us mb-0 rounded-0">Send us a message</h4>
             <div class="p-4">
              <form method="post" action="personaltranform.php" id="contactForm">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                            <div class="invalid-feedback">
                                Please type your name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" name="email" class="form-control" 
                                required>
                        </div>
                    </div>                  
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Whatsapp number</label>
                            <input name="phone" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mt-2">
                        <label for="message">Your Goals</label>
                        <textarea class="form-control" placeholder="Describe yourself here..." id="message">                        
                      </textarea>
                      </div>
                    </div>
                    <div class="col">
                        <div class="d-none alert alert-success" role="alert" data-success-message>
                            Thanks, a member of our team will be in touch shortly.
                        </div>
                        <div class="d-none alert alert-danger" role="alert" data-error-message>
                            Please fill all fields correctly.
                        </div>
                        <button type="submit" value="SEND" id="submit" name="contactSubmit" class="callnow-btn btn-secondary">
                            Submit
                        </button>                        
                    </div>
                </div>
            </form>

             </div>
           </div>
           </div>
       </div>
     </div>
      </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>




