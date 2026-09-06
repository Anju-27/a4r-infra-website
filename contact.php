<!DOCTYPE html>
<html lang="zxx" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A4R INFRA :: Contact Us</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <?php include('inc/css.php') ?>
</head>

<body data-spy="scroll" data-offset="70">
    <?php include('inc/header.php') ?>
    <div class="braeamcode" style="background-image:url('./assets/img/banner/cont.jpg')">
        <div class="overlay">
            <div class="container">

                <!-- Heading + Subheading -->
                  <div class="explore-heading">
          <h1 class="text-white" style="font-weight: 900; margin-left:30px;">Contact Us</h1>
        </div>
 
            </div>
        </div>
    </div>
    <section id="contact-enquiry" class="py-5">
        <div class="container">
            <div class="row">

                <!-- Left Contact Info -->
                <div class="col-md-6 bg-light p-4">
                    <h5>Address</h5>
                    <p style="text-align: justify;"> 220, 2nd floor Star Tower Sector 30 Gurgoan Haryana - 122001</p>

                    <h5>Email :-</h5>
                    <p>info@a4rinfra.com</p>

                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6668.136144688547!2d77.051825!3d28.4608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1857181fd263%3A0xa53895b2b4443c3b!2sStar%20Tower!5e1!3m2!1sen!2sin!4v1755682970648!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Right Enquiry Form -->
                <div class="col-md-6 p-4 bg-white border-start">
                    <h2 class="mb-4"><b>Contact Us</b></h2>
                  
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control bg-light" placeholder="First name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control bg-light" placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control bg-light" placeholder="Enter Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control bg-light" placeholder="Enter Your Number" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control bg-light" placeholder="Enter Your Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control bg-light" rows="10"
                                placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="let-contact-btn">
                                <button type="submit" class="main-default-btn  "
                                    style="pointer-events: all; cursor: pointer; " name="submit" value="Send">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section>
  <div class="container">
    <div class="row align-items-center">

      <!-- Left Column: India Map -->
      <div class="col-lg-8 mb-4 mb-lg-0 text-center">
        <img src="assets\img\map\map2.png" alt="India Map" class="img-fluid map-image">
      </div>

      <!-- Right Column: Unit Info -->
      <div class="col-lg-4">
        <!-- Unit 1 -->
        <div class="mb-4">
          <h6 class="text-warning mb-1 text-dark">
            <i class="bi bi-geo-alt-fill me-2 custom-blue-icon"></i><b>Unit 1</b>
          </h6>
          <h5> NCR, 220, Star Tower Sector 30 Gurugram, Haryana</h5>
          <p></p>
          <hr>
        </div>

        <!-- Unit 2 -->
        <div class="mb-4">
          <h6 class="text-warning mb-1 text-dark">
            <i class="bi bi-geo-alt-fill me-2 custom-blue-icon"></i><b>Unit 2</b>
          </h6>
          <h5>Manoharpur- Dausa Highway, Jaipur Rajasthan</h5>
          <p></p>
          <hr>
        </div>

        <!-- Unit 3 -->
        <div class="mb-4">
          <h6 class="text-warning mb-1 text-dark">
            <i class="bi bi-geo-alt-fill me-2 custom-blue-icon"></i><b>Unit 3</b>
          </h6>
          <h5>Hyderabad-Dindi Highway, Hyderabad, Telangana</h5>
          <p></p>
          <hr>
        </div>

        <!-- Unit 4 -->
        <div>
          <h6 class="text-warning mb-1 text-dark">
            <i class="bi bi-geo-alt-fill me-2 custom-blue-icon"></i><b>Unit 4</b>
          </h6>
          <h5>Jetpur- Somnath Highway, Junagarh, Gujarat</h5>
          <p></p>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>


    <?php include('inc/footer.php') ?>
</body>

</html>