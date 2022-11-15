@extends('layouts.logged-navbar')

@section('content')
<div style="background-color: #3E6D81;">
    <div class="container-fluid pb-5">
        <div class="row p-5">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="assets/images/header-img.png" class="flex" width="80%" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="display: flex; align-items: center">
                <div class="wrap">
                    <div class="row" style="color: white;">
                        <br><br>
                        <h1 style="font-size: 50px;"><b>Smart EngTest</b></h1>
                        <p>Smart EngTest is a website that can generate English test questions <br> only from an article or text saved in .txt format. Smart EngTest also <br> provides CBT services to facilitate the English exam process</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content mt-3 mb-4">
                        <span class="text-color-secondary">
                            Error
                        </span>
                        <span style="color: grey;">
                            Identification
                        </span>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content mt-3 mb-4">
                        <span class="text-color-secondary">
                            Vocabulary
                        </span>
                        <span style="color: grey;">
                            Question
                        </span>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content mt-3 mb-4">
                        <span class="text-color-secondary">
                            Sentence
                        </span>
                        <span style="color: grey;">
                            Completion
                        </span>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content mt-3 mb-4">
                        <span class="text-color-secondary">
                            Summary
                        </span>
                        <span style="color: grey;">
                            Question
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" style="margin-left: 100px;"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </section>
</div>

<div style="margin-top: 10%; margin-bottom: 10%">
    <div class="container pt-5 pb-5">
        <h1 class="text-center pt-5">
            <b style="color: #3E6D81">
                ESL <span style="color: #CA6035;">TEST</span>
            </b>
        </h1>
        <p class="text-center pt-4 pb-4">
            <i>
                “ The English as a second language (ESL) test plays an important role as it is often used to make important decisions such as admission to universities. Some examples of ESL Tests that are widely used are Cambridge Certificate Exams, International English Language Testing System (IELTS), and Test of English as a Foreign Language (TOEFL). “
            </i>
        </p>
    </div>
</div>

<div class="box p-5" style="background-color: #F1F1F1;">
    <h1 class="text-center">
        <b style="color: #CA6035;">
            Our Feature
        </b>
    </h1>
    <div class="container mx-auto">
        <div class="row pt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <p style="color: #CA6035; font-size:x-large;">Generate Question</p>
                <p>
                    Question Generation aims to generate valid and fluent questions according to <br>
                    the given passage and targeted answers from several sentences or texts entered. <br>
                    Questions can be used in many scenarios, such as automated tutoring systems, <br>
                    improving the performance of the Question Answerer model, enabling chatbots <br>
                    to lead conversations, and generating test questions.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <img src="assets/images/generate.png" class="flex" width="100%" alt="">
            </div>
        </div>
        <div class="row pt-5 mt-5 row pt-5 d-flex justify-content-center align">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <img src="assets/images/cbt.png" class="flex" width="100%" alt="">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 ps-5">
                <p style="color: #CA6035; font-size:x-large;">Computer Based Test</p>
                <p>
                    CBT or Computer Based Test is a test with an implementation system using a<br>
                    computer as a medium for conducting tests. The presentation and selection <br>
                    of Computer CBT questions is done computerized so that each participant <br>
                    who takes the test gets a different package of questions. The CBT system <br>
                    will reduce implementation costs because of course there is no need to print <br>
                    questions and answer sheets with paper, distribute questions, and reduce the <br>
                    cost of correcting exam results by scanning LJK and scoring which takes longer.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 10%; padding-bottom: 10%;">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col ps-5">
                    <h1 style="color: #CA6035;" class="pt-5">
                        <b>
                            Upgrade to premium
                        </b>
                    </h1>
                    <p>
                        Get the most out of SmartEngTest now!
                    </p>
                    <a href="<?= url('upgrade-account') ?>">
                        <button class="btn mt-2" style="background-color: #3E6D81; color: white; width: 30%">Upgrade Account</button>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="assets/images/saly-1.png" width="50%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="foooter" style="background-color: #F1F1F1;">
    <div class="row m-5 mb-0 mt-3">
        <div class="col-lg-8 col-md-8 col-sm-12 p-5">
            <div class="row pb-2 pt-3">
                <div class=" col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="user_guide" style="text-decoration: none; color: black; font-size: 14px">About SmartEngTest</a> <br><br>
                    <a href="index.php" style="text-decoration: none; color: black; font-size: 14px">Upgrade Account</a> <br><br>
                    <a href="user_guide" style="text-decoration: none; color: black; font-size: 14px">User Guide</a> <br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Computer Based Test</a> <br><br>
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Generate Question</a> <br><br>
                    <a href="user_guide" style="text-decoration: none; color: black; font-size: 14px">Demo</a> <br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Question Collection</a> <br><br>
                    <a href="#faq" style="text-decoration: none; color: black; font-size: 14px">Test Collection</a> <br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-5" style="display: flex; align-items: center">
            <img src="{{ asset('assets/images/logo-light.png')}}" width="70%" alt="">
        </div>
    </div>
    <div class="fooooter" style="background-color: white;">
        <p class="p-3 mb-0 text-center" style="font-size: 13px">
            © 2022 Smart EngTest. All Rights Reserved.
        </p>
    </div>
</div>
@endsection