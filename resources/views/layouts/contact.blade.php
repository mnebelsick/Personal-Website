<section class="contact" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                <div class="header-title">
                    <h1>Contact</h1>
                    <hr>
                    <p>Contact me using the form below:</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="contact-inform">
                    <h2>Get in touch</h2>
                </div>
                <div class="contact-detial">
                    <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".1s"> 
                        <span class="ci-icons"><i class="zmdi zmdi-home"></i></span> 
                            <address>419 Mallard Point Drive, North Aurora, IL 60542</address> 
                    </div>

                    <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".2s"> 
                        <span class="ci-icons"><i class="zmdi zmdi-email"></i></span> 
                            <address>mnebelsick@comcast.net</address> 
                    </div>

                    <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".3s"> 
                        <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span> 
                            <address>+1 (630) 578-1133</address> 
                    </div>

                    <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".4s"> 
                        <span class="ci-icons"><i class="zmdi zmdi-globe"></i></span> 
                            <address>mike-nebelsick.com</address> 
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="section-form">
                    <form class="contact-form" id="ajax-form" action="https://formsubmit.io/send/90a3bf58-b341-454e-ba44-97c73c505cee" method="post">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 input-field fadeIn animated wow" data-wow-delay=".1s">
                                <div class="input-field">
                                  <input class="form-control input-box" id="name2" name="name" type="text" value="">
                                  <div class="error" id="err-name" style="display:none">Please enter name</div>
                                    <label for="name2" class="input-label">Name</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 input-field fadeIn animated wow" data-wow-delay=".2s">
                                <div class="input-field">
                                  <input class="form-control input-box" id="email2" name="email" type="text" value="">
                                  <div class="error" id="err-emailvld" style="display:none">Email is not a valid format</div>
                                    <label for="email2" class="input-label">Email</label>
                                </div>
                            </div>

                            <div class="col-sm-12 input-field fadeIn animated wow" data-wow-delay=".3s">
                                <div class="input-field">
                                  <input class="form-control input-box" id="subject2" type="text" name="subject" value="">
                                  <div class="error" id="err-subject" style="display:none">Please enter subject</div>
                                    <label for="subject2" class="input-label">Subject</label>
                                </div>
                            </div>

                            <div class="col-sm-12 input-field fadeIn animated wow" data-wow-delay=".4s">
                                <div class="input-field textarea-input">
                                    <textarea class="form-control materialize-textarea" id="message2"  name="message"></textarea>
                                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                                    <label for="message2" class="input-label">Message</label>
                                    <input name="_formsubmit_id" type="text" style="display:none">
                                </div>  
                            </div>

                            <div class="col-sm-12 input-field-submit">
                            <div class="input-field-send submit-wrap clearfix fadeIn animated wow" data-wow-delay=".5s">
                                <div id="ajaxsuccess">E-mail was successfully sent.</div>
                                <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                                <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                <div class="error" id="err-state"></div>
                                <button type="submit" id="send" class="left waves-effect waves-light btn-flat brand-text submit-btn">send</button>
                            </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>    
</section>