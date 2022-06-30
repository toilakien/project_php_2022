
<?php
    include_once('db/connect.php');
    include_once('models/categories.php');
    include_once('models/slider.php');
    include_once('models/products.php');
    include_once('utils/utility.php');
    require_once('db/dbhelper.php');
  if(!empty($_POST)) {
    $firstname = getPost('firstname');
    $lastname = getPost('lastname');
    $email = getPost('email');
    $phone = getPost('phone');
    $subject = getPost('subject');
    $note = getPost('note');
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $created_at = $updated_at = date('Y-m-d H:i:s');
  
    $sql = "INSERT INTO feedback(firstname, lastname, email, phone, subject, note, status, created_at, updated_at) VALUES ('$firstname', '$lastname', '$email', '$phone', '$subject', '$note', 0, '$created_at', '$updated_at')";
    execute($sql);
    header('Location: contact_complete.php');
  }
?>
<head>
    <title>Contact</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/logo-hanu.png"/>
</head>
  <body>
<?php include('./inc/header.php');?>
<main>

<div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="slider-area">
              <div
                class="
                  slider-height2 slider-bg7
                  d-flex
                  align-items-center
                  justify-content-center
                "
              >
                <div class="hero-caption hero-caption2">
                  <h2>Contact</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



  <section class="contact-section">
      <div class="container">

          <div>
            <iframe src="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+H%C3%A0+N%E1%BB%99i/@20.9889776,105.7924895,17z/data=!3m1!4b1!4m5!3m4!1s0x3135adb29ed54487:0xbe22035eae87b5d7!8m2!3d20.9889776!4d105.7946782?hl=vi" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="row">
              <div class="col-12">
                  <h2 class="contact-title">Get in Touch</h2>
              </div>
              <div class="col-lg-8">
              <form action="contact.php" method="post">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <textarea class="form-control w-100" name="note" cols="30"
                                              rows="9" placeholder="Enter Message" style="border-radius: 15px"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-sm-6" >
                                      <div class="form-group" >
                                          <input class="form-control valid" name="firstname" type="text" placeholder="First name" style="border-radius: 15px">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <input class="form-control valid" name="lastname" type="text" placeholder="Last name" style="border-radius: 15px">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input class="form-control valid" name="email" type="email" placeholder="Email" style="border-radius: 15px">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input class="form-control valid" name="phone" type="text" placeholder="Phone number" style="border-radius: 15px">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input class="form-control" name="subject" type="text"
                                              placeholder="Subject" style="border-radius: 15px">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mt-3">
                                  <button type="submit" class="button button-contactForm boxed-btn" style="border-radius: 15px">Send</button>
                              </div>
                </form>
              </div>
              <div class="col-lg-3 offset-lg-1">
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-home"></i></span>
                      <div class="media-body">
                          <h3>Km 9 Đ. Nguyễn Trãi, P. Văn Quán, Hà Đông, Hà Nội, Việt Nam</h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                      <div class="media-body">
                          <h3>+02436231732</h3>
                          <p>Mở cửa: Thứ 2 đến Thứ 7 (9:00 - 21:00)</p>
                      </div>
                  </div>
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-email"></i></span>
                      <div class="media-body">
                          <h3>kienle17042001@gmail.com</h3>
                          <p>Gửi cho chúng tôi câu hỏi của bạn bất cứ lúc nào!</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

</main>
        <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js+bootstrap.min.js.pagespeed.jc.RMqsw48A_a.js"></script>
    <script>
      eval(mod_pagespeed_usVz_HYIFh);
    </script>
    <script>
      eval(mod_pagespeed_64J4x1U9Lt);
    </script>

    <script src="assets/js/owl.carousel.min.js+slick.min.js.pagespeed.jc.8p3VYxlcxb.js"></script>
    <script>
      eval(mod_pagespeed_2b_kILWYuf);
    </script>
    <script>
      eval(mod_pagespeed_YcgqpOO3k2);
    </script>
    <script src="assets/js/jquery.slicknav.min.js+wow.min.js+jquery.magnific-popup.js+jquery.nice-select.min.js+jquery.counterup.min.js+waypoints.min.js.pagespeed.jc.gxrxPo5MLt.js"></script>
    <script>
      eval(mod_pagespeed_W070UA44Fy);
    </script>

    <script>
      eval(mod_pagespeed_HHFEHFyfva);
    </script>
    <script>
      eval(mod_pagespeed_He4JmNoJSL);
    </script>
    <script>
      eval(mod_pagespeed_Vq55GYBaD4);
    </script>
    <script>
      eval(mod_pagespeed_urzCQ$ljEK);
    </script>
    <script>
      eval(mod_pagespeed_yBL9chaY8Z);
    </script>
    <script src="assets/js/price_rangs.js+contact.js.pagespeed.jc.JVG_0UpWoX.js"></script>
    <script>
      eval(mod_pagespeed_6gHvth7EP8);
    </script>

    <script>
      eval(mod_pagespeed_gVyWNPnP1a);
    </script>
    <script src="assets/js/jquery.form.js+jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.FlL1_wvPXx.js"></script>
    <script>
      eval(mod_pagespeed_WxueWYkioV);
    </script>
    <script>
      eval(mod_pagespeed_JeTX5oy9W7);
    </script>
    <script>
      eval(mod_pagespeed_Dfx$DMKuSV);
    </script>
    <script>
      eval(mod_pagespeed_In2a_xtXil);
    </script>

    <script>
      eval(mod_pagespeed_ADDajFRwXo);
    </script>
    <script>
      eval(mod_pagespeed_R473QNJAOB);
    </script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js"
      data-cf-beacon='{"rayId":"6ae19aba2e676e2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php include('./inc/footer.php') ?>
