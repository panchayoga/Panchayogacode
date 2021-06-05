<?php include('header.php');?>

  <main id="main">




    <section class="inner-page position-relative">
      <div class="row">
        <div class="col-md-12">
          <img src="img/contact-us.jpg" class="img-fluid">
        </div>
      </div>
    </section>


    <section class="why py-5">
     <div class="container">
       <div class="row">
         <div class="col-md-6 text-left">
           <h2 class="text-left">Ready To <b><i>Reclaim Your Life?</i></b><!--<span class="darktarquice d-block">Reclaim Your Life?</span>--></h2>
           <h5 class="font-18 text-left mt-2 mt-md-4">Reach out to us using the form and
             tell us what you’re looking for.Together,
             we’ll create a roadmap tailored to your needs and
             help you achieve your goals — one step at a time. </h5>

           <h4 class="mt-2 mt-md-4">We can’t wait to meet you! </h4>


         </div>

         <div class="col-md-6">

           <div class="form bg-white">
             <h4 class="send-us mb-0 rounded-0">Send us a message</h4>
             <div class="p-4">
               <!-- <form action="mail_handler.php" method="post">
               <div class="form-row">
                 <div class="col-md-12">
                   <label for="fname">Full Name</label>
                   <div class="d-flex">
                     <div class="mr-1">
                       <input type="email" class="form-control" id="fname">

                     </div>
                   </div>
                 </div>

               </div>

               <div class="form-group mt-2">
                 <label for="emailId">Email</label>
                 <input type="text" class="form-control" id="emailId">
               </div>
               <div class="form-group mt-2">
                 <label for="hearAboutUs">How did you hear about us ?</label>
                 <input type="text" class="form-control" id="hearAboutUs">
               </div>

               <div class="form-group mt-2">
                 <label for="message">Message</label>
                 <textarea class="form-control" id="message">
                  </textarea>
               </div>
               <button class="callnow-btn btn-secondary" id="call-me-back-btn">Submit</button>
              </form> -->

            
              <!-- <form method="post" action="process.php" id="contactForm">
                <input type="text" placeholder="Name" name="name" />
                <input type="text" placeholder="Email" name="email" />
                <input type="text" placeholder="Phone #" name="phone" />
                <input type="text" placeholder="Message" name="comments" />
                <input type="submit" value="SEND" id="submit" name="contactSubmit" />
              </form> -->

              <form method="post" action="process.php" id="contactForm">
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
                            <label>How did you hear about us ?</label>
                            <input name="text" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mt-2">
                        <label for="message">Message</label>                        
                         <textarea class="form-control" id="message" placeholder=""></textarea>
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

              
              <!-- <form action="mail-form.php" method="post">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input name="contact-company" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>How did you hear about us ?</label>
                            <input name="text" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mt-2">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message">
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
                        <button type="submit" name="submit" value="Send" class="callnow-btn btn-secondary">
                            Send
                        </button>
                    </div>
                </div>
            </form> -->

             </div>
           </div>
           </div>
       </div>
     </div>
      </section>


  </main><!-- End #main -->

  <?php include('footer.php');?>