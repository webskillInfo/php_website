<?php include 'header.php';?>
      <!-- Breadcrumb Section - Start
        ================================================== -->
      <section class="breadcrumb_section text-center"
        style="background-image: url(assets/images/backgrounds/bg_6.jpg);">
        <div class="container">
          <h1 class="page_title text-uppercase">Contact</h1>
          <ul class="breadcrumb_nav ul_li_center text-uppercase">
            <li><a href="index.html">HOME</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </section>
      <!-- Breadcrumb Section - End
        ================================================== -->

      <!-- Contact Section - Start
        ================================================== -->
      <section class="contact_section">
        <div class="container">
          <div class="contact_wrapper">
            <div class="row">
              <div class="col col-lg-6">
                <div class="content_wrap">
                  <h2>
                    Contact Directly With Our Agents
                  </h2>
                  <p>
                   India's 1st Professional Computer AMC. IT Helpdesk & Technology support for Businesses.
                  </p>
                  <ul class="contact_info_iconbox ul_li_block">
                    <li>
                      <span>
                        <i class="far fa-phone"></i>
                      </span>
                      <strong>
                        Phone
                        <small><a href="tel:+919999966914">+91 999 996 6914</a></small>
                        <small><a href="tel:+919911126287">+91 991 112 6287</a></small>
                        <small><a href="tel:+919718880446">+91 971 888 0446</a></small>
                        <small><a href="tel:+919718880447">+91 971 888 0447</a></small>
                      </strong>
                    </li>
                    <li>
                      <span>
                        <i class="far fa-envelope"></i>
                      </span>
                      <strong>
                        Email
                        <small><a href="#">info@saninfotech.in</a></small>
                      </strong>
                    </li>
                    <li>
                      <span>
                        <i class="far fa-map-marker-alt"></i>
                      </span>
                      <strong>
                        Location
                        <small>Corporate Office: 768/33, 2nd Floor, Main Road, Patel Nagar, New Delhi-110008</small><br>
                        <small> NCR Office: 521, 5th Floor, JMD Megapolish, Sohna Road, Gurugram- 122018</small>
                        <br>
                        <small> D173, EPIP Export Zone, UPSIDC, Kasana Greater Noida- 201310</small>
                      </strong>
                    </li>
                  </ul>
                  
                </div>
              </div>

              <div class="col col-lg-6">
              <form action="mail.php" name="contactus" method="POST">
                <div class="form_wrap">
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form_item">
                        <h4 class="form_item_title">Name*</h4>
                        <input type="text" name="name">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item">
                        <h4 class="form_item_title">Phone*</h4>
                        <input type="tel" name="phone">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item">
                        <h4 class="form_item_title">Email*</h4>
                        <input type="email" name="email">
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="form_item">
                        <h4 class="form_item_title">Address*</h4>
                        <input type="text" name="address">
                      </div>
                    </div>
                  </div>

                  <div class="form_item">
                    <h4 class="form_item_title">Message*</h4>
                    <textarea name="message"></textarea>
                  </div>

                  <div class="checkbox_item">
                    <input id="save" type="checkbox">
                    <label for="save" data-text-color="#000323">Save my info for further contact</label>
                  </div>

                  <button type="submit"name="submit" class="btn btn_danger">Submit</button>
                </div>
</form>
              </div>
              
            </div>
          </div>
        </div>

        <div class="contact_map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14005.358428440073!2d77.15730283199343!3d28.649548418575467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02eb04bcfd33%3A0xce3a30ca732fb5da!2sSAN%20Infotech!5e0!3m2!1sen!2sin!4v1647086612745!5m2!1sen!2sin"></iframe>
        </div>
      </section>
      <!-- Contact Section - End
        ================================================== -->

    </main>
    <!-- Main Body - End
      ================================================== -->


       <!-- Footer Section - Start
      ================================================== -->
      <?php include 'footer.php';?>