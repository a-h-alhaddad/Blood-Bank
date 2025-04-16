<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css2/animate.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.css" />
    <link rel="stylesheet" href="css2/bootstrap2.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css2/style.css">
    <!--    Font    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <title>الصفحة الرئيسية</title>

    <style>
    
    
    </style>

</head>
<body>

    <!--        البار          -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
      <div class="container px-5">
          <a class="navbar-brand fw-bold" href="#page-top"><img src="Images/default.png" alt="" width="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="bi-list"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                  <li class="nav-item"><a class="nav-link me-lg-3" href="#features">الصفحة الرئيسية</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="#features">فصائل الدم</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="#download">الفوائد الصحيه للتبرع</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="#download">معلومات مفيدة</a></li>
                  <li class="nav-item"><a class="nav-link me-lg-3" href="#download">تواصل </a></li>
              </ul>
              <a href="{{ route('login') }}" class="nav-button rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                  <span class="d-flex align-items-center">
                      <i class="bi-chat-text-fill"></i>
                      <span class="small person"><img src="icons/person.svg" alt=""></span>
                  </span>
                </a>
          </div>
      </div>
  </nav>

    <!--        اول قسم          -->

    <section class="sec-1 mt-5">
        <div class="row justify-content-center">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-lg-right text-md-right mt-5">
                <h2 class="wow fadeInRight">تبرعك بالدم قد ينقذ حياة </br>شخص ما!</h2> 
                <p class="mt-4 wow fadeInRight">التبرع بالدم يساعد في إنقاذ مليون شخص كل عام، لأن هذا التبرع يشمل أيضََا  </br> الصفائح الدموية والبلازما وحتى دم المشيمة. .</p>
                <a class="button2 mt-2" href="{{ route('login') }}" role="button">تسجيل دخول</a>
                <a class="button shadow-lg wow fadeInRight mb-5 " href="{{ route('register.user') }}">تسجيل</a>
               </div>
            <div class="image wow fadeInLeft col-12 col-lg-4 col-md-12 col-sm-12 text-md-center text-sm-center">
                <img src="images/home.png" width="350px" height="385px" />      <!--    لتعديل الصوره ضع المسار ونوع الصوره في src="هنا"    -->
            </div>
        </div>
    </section>

     <!--        فصائل الدم         -->

     <section class="sec-2" id="about">
        <div class="container">
            <h2 class="about text-center wow fadeIn mb-3" style="color:#D81B60;">فصائل الدم</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center wow fadeInRight mt-5">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">معطي</th>
                            <th scope="col">مستقبل</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>AB+</td>
                            <td>All</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>AB-</td>
                            <td>AB- , A- , B- , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>A+</td>
                            <td>A+ , A- , O+ , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>A-</td>
                            <td>A- , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>B+</td>
                            <td>B+ , B- , O+ , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>B-</td>
                            <td>B- , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>O+</td>
                            <td>O+ , O-</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>O-</td>
                            <td>O-</td>
                          </tr>
                        </tbody>
                      </table>
                
                
                
        </div>
    </section>

<!--        donation benfiets          -->

    <section id="bloodDonationBenefitsSectino" class="bloodDonationBenefitsSectino">
        <div class="container" data-aos="fade-up">
            <header class="section-header" style="padding-top: 10%;">
                <h1 style="color:#D81B60;">الفوائد الصحية عند التبرع بالدم</h1>
                <p>لا يؤدي التبرع بالدم الى تحسين حياة الملتقي فحسب , بل يساعد المتبرع ايضا على البقاء بصحة جيدة</p>
            </header>
    
            <div class="row">
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center mb-lg-5">
                    <img src="images/bloodDonatinIllustration.svg" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
    
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>تقليل مخازن الحديد الضارة</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>تقليل مخاطر الاصابة بسرطان</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>الحفاظ على صحة القلب والاوعية الدموية</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>يساعد الكبد على البقاء بصحة بجيدة</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>تقليل مخاطر الاصابة بنوبات قلبية</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <img class="wow fadeInUp ml-2" src="images/checkmark,png.png" width="20px" height="20px" style="text-align: center; filter: invert(15%) sepia(93%) saturate(4349%) hue-rotate(330deg) brightness(90%) contrast(86%); "/>
                                <h3>نمو خلايا دم جديدة</h3>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    
   

    

    <!--       معلومات عن التبرع بالدم          -->

    <section class="sec-3" id="service">
        <div class="container">
            <h2 class="about text-center wow fadeIn mb-5" style="color:#D81B60;">بعض المعلومات المفيدة عن التبرع بالدم</h2>
            <div class="row">
                <div class="accordion col-12 col-md-6 col-sm-12" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            الشروط التي تجعلك مؤهلََا للتبرع بالدم
                          </button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            - يجب ألا يقل عمرك عن 17 عامًا. </br>
                            - يجب أن يكون وزنك 50 كجم أو أكثر. </br>
                            - يجب أن تكون نسبة الهيموجلوبين مناسبة للتبرع. </br>
                            - النساء الحوامل غير مؤهلات للتبرع ، انتظري 6 أسابيع بعد الولادة. </br>
                            - أن يكون المتبرع خالياً من بعض الأمراض التي تمنع التبرع.
                        </div>
                      </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              مالذي يجب فعله قبل التبرع
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                            - احصل على قسط كافٍ من النوم ، 5 ساعات على الأقل. </br>
- تناول وجبة قبل التبرع.</br>
- إحضار بطاقة الهوية.
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3 mb-3">
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              امور تمنعك من التبرع
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                            - تبرعت خلال الأشهر الثلاثة الماضية. </br>
                            - خضعت لأي عملية جراحية حديثا. </br>
                            - تعاني من أحد الأمراض التالية: ضغط الدم، السكري، الملاريا لمدة عامين على الأقل، الفشل الكلوي، تضخم الكبد، 
                            أمراض الصدر، الحمى الروماتيزمية، أمراض الغدة الدرقية، النزيف الوراثي. </br>
                            - الحوامل غير مؤهلين للتبرع ، انتظري 6 أسابيع بعد الولادة.
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="accordion col-12 col-md-6 col-sm-12" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              كم من الوقت تستغرق عملية التبرع
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            في العادة، 20 دقيقة.
                             الفترة التي يجب فصلها بين كل تبرع والآخر لنفس الشخص هي 3 أشهر لأنها الفترة المثالية لتكاثر خلايا الدم.
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              بعض التوصيات لما بعد عملية التبرع
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            - إسترح لمدة 10 دقائق. </br>
                            - لا تبذل مجهودًا بدنيًا خلال ساعتين من بعد التبرع. </br>
                            - إشرب أكبر كمية ممكنة من السوائل.
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-header" id="headingSix">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              لماذا يجب ان اكون متبرع بالدم
                            </button>
                          </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                          <div class="card-body">
                            - كل ثلاث ثوان شخص ما في العالم يحتاج الى دم. </br>
                            - تبرعك الواحد يمكن ان ينقذ 3 اشخاص. </br>
                            - عملية التبرع بالدم تعيد النشاط والحيويه للجسم من خلال تجديد خلايا الدم.
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
                  
                  
            </div>
        </div>
    </section>

    <section class="sec-7" id="contact">
      <div class="container">
          <h2 class="about text-center wow fadeIn mb-3" style="color: #D81B60;">تواصل</h2>
          <p class="text-center wow fadeIn mt-4" style="font-size:15px; color:#979797">للإستفسار او البحث عن مساعدة تواصل معنا</p>
          <div class="row mt-5">
              <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="icon-txt wow fadeInRight">
                      <h6>العنوان:</h6>  
                      <p><img src="icons/home-outline.svg" height="20px" width="20px" /><span> فوة, ابن سينا</span></p>  <!--         لتغيير العنوان          -->
                  </div>
                  <div class="icon-txt wow fadeInRight" data-wow-delay="0.1s">
                      <h6>التليفون:</h6>
                      <p><img src="icons/call-outline.svg" height="20px" width="20px" /><span>(+642) 245 356 432</span></p>  <!--         لتغيير التليفون          -->
                  </div>
                  <div class="icon-txt wow fadeInRight" data-wow-delay="0.2s">
                      <h6>مركز المساعدة :</h6>
                      <p><img src="icons/mail-outline.svg" height="20px" width="20px" /><span>hellosuppot@gmail.com</span></p>  <!--         لتغيير الايميل          -->
                  </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
              <form>
                  <div class="form-group wow fadeInLeft">
                      <label for="exampleInputEmail1">الاسم</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسمك">
                      <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group wow fadeInLeft" data-wow-delay="0.1s">
                      <label for="exampleInputPassword1">البريد الالكتروني</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="بريدك الالكتروني">
                  </div>
                  <div class="form-group wow fadeInLeft"data-wow-delay="0.2s">
                      <label for="exampleInputPassword1">الموضوع</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="موضوع الرسالة">
                  </div>
                  <div class="form-group wow fadeInLeft" data-wow-delay="0.3s">
                      <label for="exampleInputPassword1">الرسالة</label>
                      <textarea class="form-control" placeholder="الرسالة"></textarea>
                  </div>
                  
                  <a class="button2 wow fadeInLeft mb-5 shadow" data-wow-delay="0.4s" href="#">ارسال</a>
              </form>
          </div>
      </div>
  </section>

    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <span>© جميع الحقوق محفوظة 2022  </span>
  </div>

</footer>
  













    <!-- Optional JavaScript -->
    <script src="js2/jquery-3.6.0.min.js"></script>
    <script src="js2/wow.min.js"></script>
    <script src="js2/popper.min.js"></script>    
    <script src="js2/popper.min2.js"></script>    
    <script src="js2/bootstrap.js"></script>
    <script src="js2/bootstrap2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
  
        new WOW().init();


    </script>


</body>
</html>