 <section id="content">

     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="about-logo">
                     <h3>We're Here for You
                     </h3>
                     <p>We are here to help you with any questions or support you might need. Whether you are a job
                         seeker looking for guidance, an employer seeking recruitment solutions, or simply have a query
                         about our services, feel free to reach out to us. Our dedicated support team is available to
                         assist you with prompt and professional responses. You can contact us via email, phone, or
                         through our website’s contact form. We value your feedback and are committed to providing you
                         with the best possible experience on our platform. Don’t hesitate to get in touch – we’re here
                         to make your job search and hiring process as smooth and effective as possible.</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6">

                 <!-- Form itself -->
                 <form name="sentMessage" id="contactForm" novalidate>
                     <h3>Contact us</h3>
                     <div class="control-group">
                         <div class="controls">
                             <input type="text" class="form-control" placeholder="Full Name" id="name" required
                                 data-validation-required-message="Please enter your name" />
                             <p class="help-block"></p>
                         </div>
                     </div>
                     <div class="control-group">
                         <div class="controls">
                             <input type="email" class="form-control" placeholder="Email" id="email" required
                                 data-validation-required-message="Please enter your email" />
                         </div>
                     </div>

                     <div class="control-group">
                         <div class="controls">
                             <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message"
                                 required data-validation-required-message="Please enter your message" minlength="5"
                                 data-validation-minlength-message="Min 5 characters" maxlength="999"
                                 style="resize:none"></textarea>
                         </div>
                     </div>
                     <div id="success"> </div> <!-- For success/fail messages -->
                     <button type="submit" class="btn btn-primary pull-right">Send</button><br />
                 </form>
             </div>

         </div>
     </div>

 </section>