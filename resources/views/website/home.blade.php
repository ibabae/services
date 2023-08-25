@extends('website.master')
@section('main')

    <!--==============================
Hero Area
==============================-->
<div class="themeholy-hero-wrapper hero-2" id="hero">
    <div class="hero-slider-2 themeholy-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1">
        <div class="themeholy-hero-slide">
            <div class="themeholy-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_2_1.jpg')}}">
                <img src="{{asset('assets/img/hero/hero_overlay_2.png')}}" alt="Overlay">
            </div>
            <div class="container">
                <div class="hero-style1 hero-style2">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.1s"><img class="spin"
                            src="{{asset('assets/img/theme-img/title_shape_2.svg')}}" alt="shape">ارائه خدمات </span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">هوای خنک و لذت بخش
                    </h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">سرویس کولر و تهویه
                        <span>منزل و دفتر کار شما</span>توسط متخصص
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">تیم مجرب ما
                        متخصصان می توانند در هر کاری به شما کمک کنند، از نصب یک سیستم تهویه مطبوع جدید گرفته تا
                        تعمیر و نگهداری تجهیزات شما.</p>
                    <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.9s">
                        <a href="contact.html" class="themeholy-btn">درخواست تکنسین</a>
                        <a href="service.html" class="themeholy-btn style4">خدمات ما</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="themeholy-hero-slide">
            <div class="themeholy-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_2_2.jpg')}}">
                <img src="{{asset('assets/img/hero/hero_overlay_2.png')}}" alt="Overlay">
            </div>
            <div class="container">
                <div class="hero-style1 hero-style2">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.1s"><img class="spin"
                            src="{{asset('assets/img/theme-img/title_shape_2.svg')}}" alt="shape">ارائه خدمات </span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">هوای فوق العاده خنک</h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">در یک چشم برهم زدن
                        <span></span>
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">تیم مجرب ما
                        متخصصان می توانند در هر کاری به شما کمک کنند، از نصب یک سیستم تهویه مطبوع جدید گرفته تا
                        تعمیر و نگهداری تجهیزات شما.</p>
                    <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.9s">
                        <a href="contact.html" class="themeholy-btn">درخواست تکنسین</a>
                        <a href="service.html" class="themeholy-btn style4">خدمات ما</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="themeholy-hero-slide">
            <div class="themeholy-hero-bg" data-bg-src="{{asset('assets/img/hero/hero_bg_2_3.jpg')}}">
                <img src="{{asset('assets/img/hero/hero_overlay_2.png')}}" alt="Overlay">
            </div>
            <div class="container">
                <div class="hero-style1 hero-style2">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.1s"><img class="spin"
                            src="{{asset('assets/img/theme-img/title_shape_2.svg')}}" alt="shape">ارائه خدمات </span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">تیم متخصص برای</h1>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">سرویس <span>خنک کننده</span>
                    </h1>
                    <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">تیم مجرب ما
                        متخصصان می توانند در هر کاری به شما کمک کنند، از نصب یک سیستم تهویه مطبوع جدید گرفته تا
                        تعمیر و نگهداری تجهیزات شما.</p>
                    <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.9s">
                        <a href="contact.html" class="themeholy-btn">درخواست تکنسین</a>
                        <a href="service.html" class="themeholy-btn style4">خدمات ما</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-box-wrap">
        <div class="container position-relative">
            <div class="icon-box has-right-line">
                <button data-slick-prev=".hero-slider-2" class="slick-arrow default"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slick-next=".hero-slider-2" class="slick-arrow default"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Feature Area
==============================-->
<section class="space">
    <div class="shape-mockup spin" data-top="18px" data-left="21px"><img src="{{asset('assets/img/shape/fan_1.png')}}"
            alt="shape"></div>
    <div class="shape-mockup" data-top="0" data-left="0"><img src="{{asset('assets/img/shape/fan_circle.png')}}" alt="shape">
    </div>
    <div class="shape-mockup move" data-bottom="0" data-left="0"><img src="{{asset('assets/img/shape/man_shape_3.png')}}"
            alt="shape"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}" alt="shape">ما
                ویژگی ها</span>
            <h2 class="sec-title">جدیدترین مقالات و مقالات ما</h2>
        </div>
        <div class="row gx-0 gy-40">
            <div class="col-lg-4">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{asset('assets/img/icon/feature_card_1.svg')}}" alt="icon">
                    </div>
                    <h3 class="box-title">تعمیر فضای داخلی</h3>
                    <p class="feature-card_text">کار تعمیرات داخلی می تواند پیچیده باشد و اغلب نیاز به تخصص دارد
                        مهارت ها و تجهیزات بسته به ماهیت و دامنه کار تعمیر، ممکن است
                        لازم است.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{asset('assets/img/icon/feature_card_2.svg')}}" alt="icon">
                    </div>
                    <h3 class="box-title">بدون پرداخت اولیه</h3>
                    <p class="feature-card_text">این خط‌مشی پرداخت اغلب در صنایعی استفاده می‌شود که در آنها وجود
                        دارد
                        خطر تقلب یا جایی که مشتریان ممکن است در پیش پرداخت مردد باشند، مانند بازسازی خانه.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{asset('assets/img/icon/feature_card_3.svg')}}" alt="icon">
                    </div>
                    <h3 class="box-title">تعمیر و نصب</h3>
                    <p class="feature-card_text">کار تعمیر و نصب می‌تواند پیچیده باشد و اغلب به آن نیاز دارد
                        مهارت ها و دانش تخصصی بسته به ماهیت و دامنه کار، ممکن است
                        لازم است.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
About Area
==============================-->
<div class="overflow-hidden bg-smoke space" id="about-sec">
    <div class="shape-mockup jump-reverse" data-bottom="0" data-right="0"><img
            src="{{asset('assets/img/shape/line_shape_5.png')}}" alt="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box3">
                    <div class="img1">
                        <img src="{{asset('assets/img/normal/about_2_1.jpg')}}" alt="About">
                    </div>
                    <div class="img2">
                        <img src="{{asset('assets/img/normal/about_2_2.jpg')}}" alt="About">
                    </div>
                    <div class="choose-box">
                        <div class="choose-box_number">24</div>
                        <span class="choose-box_text">سالها تجربه <br> خدمات تعمیر و نگهداری</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-30">
                    <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                            alt="shape">درباره شرکت ما</span>
                    <h2 class="sec-title">به شرکت تعمیر و نصب تهویه مطبوع خوش آمدید</h2>
                </div>
                <p class="mt-n2 mb-30">ما یک شرکت تعمیر و نصب تهویه مطبوع حرفه ای هستیم،
                    ارائه خدمات با کیفیت بالا به مشتریان مسکونی و تجاری. تیم ما از
                    تکنسین های با تجربه مجهز به دانش و ابزار لازم برای رسیدگی هستند.</p>
                <div class="about-feature-wrap">
                    <div class="about-feature">
                        <div class="about-feature_icon">
                            <img src="{{asset('assets/img/icon/about_feature_1.svg')}}" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h3 class="about-feature_title">بهبود کیفیت</h3>
                            <p class="about-feature_text">به طور تعاملی بر بهترین شیوه های خارج از جعبه غالب است.
                            </p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature_icon">
                            <img src="{{asset('assets/img/icon/about_feature_2.svg')}}" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h3 class="about-feature_title">مشتری راضی است</h3>
                            <p class="about-feature_text">به طور یکنواخت بر ارزش نسل بعدی غالب است و.</p>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <a href="about.html" class="themeholy-btn">درباره بیشتر</a>
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn popup-video">
                        <div class="play-btn">
                            <i class="fas fa-play"></i>
                        </div>
                        <span class="btn-text">داستان ما را تماشا کنید</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Counter Area
==============================-->
<div class="" data-bg-src="{{asset('assets/img/bg/counter_bg_1.jpg')}}">
    <div class="container">
        <div class="counter-card-wrap">
            <div class="counter-card style2">
                <h2 class="counter-card_number"><span class="counter-number">1025</span>+</h2>
                <span class="counter-card_text">پروژه های موفق</span>
            </div>
            <div class="counter-card style2">
                <h2 class="counter-card_number"><span class="counter-number">1024</span></h2>
                <span class="counter-card_text">مشتری راضی</span>
            </div>
            <div class="counter-card style2">
                <h2 class="counter-card_number"><span class="counter-number">250</span>+</h2>
                <span class="counter-card_text">متخصص تهویه و کولینگ</span>
            </div>
            <div class="counter-card style2">
                <h2 class="counter-card_number"><span class="counter-number">100</span>%</h2>
                <span class="counter-card_text">محصولات با کیفیت</span>
            </div>
        </div>
    </div>
</div>
<!--==============================
Service Area
==============================-->
<section class="overflow-hidden space" id="service-sec">
    <div class="shape-mockup" data-top="10%" data-left="7%"><img src="{{asset('assets/img/shape/home_fan.svg')}}" alt="shape">
    </div>
    <div class="shape-mockup spin" data-bottom="6%" data-right="3%"><img src="{{asset('assets/img/shape/shape_icon_1.svg')}}"
            alt="shape"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-8 text-center text-xl-start">
                <div class="title-area mb-30">
                    <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                            alt="shape">خدمات ما</span>
                    <h2 class="sec-title">ما خدمات AC ارائه می دهیم</h2>
                </div>
                <p class="mt-n2 mb-30">در شرکت ما متعهد به ارائه خدمات عالی به مشتریان هستیم،
                    قیمت گذاری شفاف، و اهمیت نگهداری خدمات سریع و قابل اعتماد.</p>
                <div class="icon-box has-right-line">
                    <button data-slick-prev="#serviceSlide2" class="slick-arrow default"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slick-next="#serviceSlide2" class="slick-arrow default"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-xl-9 mt-40 mt-xl-0">
                <div class="service-box-slide">
                    <div class="row slider-shadow themeholy-carousel" id="serviceSlide2" data-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1">
                        <div class="col-md-6 col-lg-4">
                            <div class="service-box" data-bg-src="{{asset('assets/img/service/service_box_1.jpg')}}">
                                <div class="service-box_icon">
                                    <img src="{{asset('assets/img/icon/service_box_1.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">نصب AC</a></h3>
                                <p class="service-box_text">اگر به نصب سیستم تهویه مطبوع جدید نیاز دارید، ما
                                    به شما کمک کند.</p>
                                <a href="service-details.html" class="link-btn">بیشتر بیاموزید</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-box" data-bg-src="{{asset('assets/img/service/service_box_2.jpg')}}">
                                <div class="service-box_icon">
                                    <img src="{{asset('assets/img/icon/service_box_2.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">خدمات خنک کننده</a></h3>
                                <p class="service-box_text">ما می توانیم انواع تهویه مطبوع را عیب یابی و تعمیر کنیم
                                    مشکلات.</p>
                                <a href="service-details.html" class="link-btn">بیشتر بیاموزید</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-box" data-bg-src="{{asset('assets/img/service/service_box_3.jpg')}}">
                                <div class="service-box_icon">
                                    <img src="{{asset('assets/img/icon/service_box_3.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">پاکسازی گرد و غبار</a></h3>
                                <p class="service-box_text">تعمیر و نگهداری منظم برای اطمینان از هوای شما کلیدی است
                                    شرطی کردن.</p>
                                <a href="service-details.html" class="link-btn">بیشتر بیاموزید</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-box" data-bg-src="{{asset('assets/img/service/service_box_4.jpg')}}">
                                <div class="service-box_icon">
                                    <img src="{{asset('assets/img/icon/service_box_4.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">تعمیر AC</a></h3>
                                <p class="service-box_text">ما خدمات روتین پاک‌سازی گرد و غبار را برای کمک به شما
                                    ارائه می‌کنیم
                                    اجتناب از هزینه های.</p>
                                <a href="service-details.html" class="link-btn">بیشتر بیاموزید</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Team Area
==============================-->
<section class="space" id="team-sec" data-bg-src="{{asset('assets/img/bg/team_bg_2.jpg')}}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_3.svg')}}" alt="shape">تیم
                ما</span>
            <h2 class="sec-title text-white">با تیم ما بیشتر آشنا شوید</h2>
        </div>
        <div class="row slider-shadow themeholy-carousel" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="themeholy-team team-card">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team/team_1_1.jpg')}}" alt="Team">
                        <div class="themeholy-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="share-btn"><i class="fa-light fa-share-nodes"></i></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">سعید بیرقی</a></h3>
                            <span class="team-desig">سرویسکار لوله بازکنی</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="themeholy-team team-card">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team/team_1_2.jpg')}}" alt="Team">
                        <div class="themeholy-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="share-btn"><i class="fa-light fa-share-nodes"></i></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">نوشین همتی</a></h3>
                            <span class="team-desig">برقکار</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="themeholy-team team-card">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team/team_1_3.jpg')}}" alt="Team">
                        <div class="themeholy-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="share-btn"><i class="fa-light fa-share-nodes"></i></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">علی میکاییلی</a></h3>
                            <span class="team-desig">سرویسکار</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="themeholy-team team-card">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team/team_1_4.jpg')}}" alt="Team">
                        <div class="themeholy-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="share-btn"><i class="fa-light fa-share-nodes"></i></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">حمید جعفری</a></h3>
                            <span class="team-desig">لوله کش</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="themeholy-team team-card">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team/team_1_5.jpg')}}" alt="Team">
                        <div class="themeholy-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="share-btn"><i class="fa-light fa-share-nodes"></i></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">سعیده قهرمان</a></h3>
                            <span class="team-desig">سرویسکار</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==============================
Brand Area
==============================-->
<section class="brand-sec2" data-pos-for="#team-sec" data-sec-pos="top-half">
    <div class="container z-index-common">
        <div class="row gx-0 bg-smoke align-items-center">
            <div class="col-lg-4">
                <div class="brand-title-area">
                    <div class="title-area2">
                        <span class="subtitle">شرکای مورد اطمینان</span>
                        <h3 class="title">کیفیت محصولات مصرفی بسیار مورد توجه ماست.</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row themeholy-carousel" id="brandSlide2" data-slide-show="4" data-lg-slide-show="4"
                    data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2">
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box">
                            <img src="{{asset('assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Project Area
==============================-->
<section class="overflow-hidden space">
    <div class="shape-mockup d-none d-xl-block" data-top="-120px" data-right="0"><img
            src="{{asset('assets/img/shape/square_shape_1.jpg')}}" alt="shape"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8">
                <div class="row justify-content-md-between justify-content-center align-items-center ps-xl-5">
                    <div class="col-md">
                        <div class="title-area text-center text-md-start">
                            <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                                    alt="shape">آخرین پروژه ها</span>
                            <h2 class="sec-title">مجموعه پروژه های تیم ما</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="sec-btn">
                            <div class="icon-box">
                                <button data-slick-prev="#projectSlide2" class="slick-arrow default"><i
                                        class="far fa-arrow-left"></i></button>
                                <button data-slick-next="#projectSlide2" class="slick-arrow default"><i
                                        class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="themeholy-container2">
        <div class="row themeholy-carousel" id="projectSlide2" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-sm-slide-show="1" data-focuson-select="false">
            <div class="col-xl-4 col-md-6">
                <div class="project-grid">
                    <div class="project-grid_img">
                        <img src="{{asset('assets/img/project/project_2_1.jpg')}}" alt="project image">
                    </div>
                    <div class="content-wrap">
                        <div class="project-grid_content">

                            <div class="media-body">
                                <p class="project-grid_subtitle">سرویس</p>
                                <h3 class="box-title"><a href="project-details.html">تمیزکاری و سرویس</a></h3>
                            </div>
                            <p class="project-grid_text">اگر به یک سیستم تهویه مطبوع جدید نیاز دارید، ما
                                به شما کمک کند.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="project-grid">
                    <div class="project-grid_img">
                        <img src="{{asset('assets/img/project/project_2_2.jpg')}}" alt="project image">
                    </div>
                    <div class="content-wrap">
                        <div class="project-grid_content">

                            <div class="media-body">
                                <p class="project-grid_subtitle">تکنولوژی</p>
                                <h3 class="box-title"><a href="project-details.html">نصب AC</a></h3>
                            </div>
                            <p class="project-grid_text">اگر به یک سیستم تهویه مطبوع جدید نیاز دارید، ما
                                به شما کمک کند.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="project-grid">
                    <div class="project-grid_img">
                        <img src="{{asset('assets/img/project/project_2_3.jpg')}}" alt="project image">
                    </div>
                    <div class="content-wrap">
                        <div class="project-grid_content">

                            <div class="media-body">
                                <p class="project-grid_subtitle">نگهداری</p>
                                <h3 class="box-title"><a href="project-details.html">بررسی AC</a></h3>
                            </div>
                            <p class="project-grid_text">اگر به یک سیستم تهویه مطبوع جدید نیاز دارید، ما
                                به شما کمک کند.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="project-grid">
                    <div class="project-grid_img">
                        <img src="{{asset('assets/img/project/project_2_4.jpg')}}" alt="project image">
                    </div>
                    <div class="content-wrap">
                        <div class="project-grid_content">

                            <div class="media-body">
                                <p class="project-grid_subtitle">تعمیر</p>
                                <h3 class="box-title"><a href="project-details.html">تعمیر AC</a></h3>
                            </div>
                            <p class="project-grid_text">اگر به یک سیستم تهویه مطبوع جدید نیاز دارید، ما
                                به شما کمک کند.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
Feature Area
==============================-->
<section class="position-relative bg-smoke" data-bg-src="{{asset('assets/img/bg/why_bg_1.png')}}">
<div class="img-half img-right themeholy-video">
    <img src="{{asset('assets/img/normal/video_1.jpg')}}" alt="video">
    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
            class="fas fa-play"></i></a>
</div>
<div class="container space">
    <div class="row">
        <div class="col-xl-6">
            <div class="title-area mb-30">
                <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                        alt="shape">چرا ما را انتخاب کنید</span>
                <h2 class="sec-title">ما 24 سال تجربه خدمات تهویه مطبوع داریم</h2>
            </div>
            <p class="mt-n2 mb-30">در شرکت ما متعهد به ارائه خدمات عالی به مشتریان هستیم،
                قیمت شفاف و خدمات سریع و قابل اعتماد. ما اهمیت حفظ شما را درک می کنیم
                خانه یا کسب و کار خنک و راحت است و ما به شما کمک می کنیم تا به آن هدف دست یابید.
                شما در تابستان خنک می مانید!</p>
            <div class="choose-box-wrap">
                <div class="why-feature-wrap">
                    <div class="why-feature">
                        <div class="why-feature_icon">
                            <img src="{{asset('assets/img/icon/why_feature_1.svg')}}" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h3 class="why-feature_title">تیم تجربه</h3>
                            <p class="why-feature_text">تجارت الکترونیکی فعال را به طور یکپارچه عرضه کنید در حالی که استثنایی
                                تخصص.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature_icon">
                            <img src="{{asset('assets/img/icon/why_feature_2.svg')}}" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h3 class="why-feature_title">پشتیبانی آنلاین مشتری</h3>
                            <p class="why-feature_text">تجارت الکترونیکی فعال را به طور یکپارچه عرضه کنید در حالی که استثنایی
                                تخصص.</p>
                        </div>
                    </div>
                </div>
                <div class="choose-box">
                    <div class="choose-box_number">24</div>
                    <span class="choose-box_text">ساعات خدمات اضطراری</span>
                    <a href="about.html" class="themeholy-btn">اطلاعات بیشتر درباره ما</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--==============================
Price Area
==============================-->
<section class="overflow-hidden space">
<div class="shape-mockup" data-top="0" data-left="0"><img src="{{asset('assets/img/shape/dots_shape_1.png')}}" alt="shape">
</div>
<div class="shape-mockup z-index-1 d-none d-xxl-block" data-bottom="120px" data-right="0%"><img
        src="{{asset('assets/img/shape/ac_shape_1.png')}}" alt="shape"></div>
<div class="container">
    <div class="title-area text-center">
        <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                alt="shape">طرح قیمت گذاری</span>
        <h2 class="sec-title">هزینه نگهداری ما</h2>
    </div>
    <div class="price-card-area">
        <div class="row justify-content-end">
            <div class="col-xxl-9">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="price-card ">
                            <h3 class="box-title">طرح اولیه</h3>
                            <h4 class="price-card_price"><span class="text-theme2"></span>60 <span
                                    class="duration">هزار تومان/ ماه</span>
                            </h4>
                            <div class="price-card_content">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="fas fa-circle-check"></i> تعویض فیلتر هوا</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض ترموستات</li>
                                        <li><i class="fas fa-circle-check"></i> سیم پیچ کندانسور را تمیز کنید</li>
                                        <li class="unavailable"><i class="fas fa-circle-check"></i> کنتاکتور
                                            جایگزینی</li>
                                        <li class="unavailable"><i class="fas fa-circle-check"></i> پنکه AC
                                            جایگزینی</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="themeholy-btn">انتخاب طرح</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="price-card active">
                            <h3 class="box-title">طرح استاندارد</h3>
                            <h4 class="price-card_price"><span class="text-theme2"></span>80  <span
                                    class="duration">هزار تومان/ ماه</span>
                            </h4>
                            <div class="price-card_content">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="fas fa-circle-check"></i> تعویض فیلتر هوا</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض ترموستات</li>
                                        <li><i class="fas fa-circle-check"></i> سیم پیچ کندانسور را تمیز کنید</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض کنتاکتور</li>
                                        <li class="unavailable"><i class="fas fa-circle-check"></i> پنکه AC
                                            جایگزینی</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="themeholy-btn">انتخاب طرح</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="price-card ">
                            <h3 class="box-title">طرح ممتاز</h3>
                            <h4 class="price-card_price"><span class="text-theme2"></span>140 <span
                                    class="duration">هزار تومان/ ماه</span>
                            </h4>
                            <div class="price-card_content">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="fas fa-circle-check"></i> تعویض فیلتر هوا</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض ترموستات</li>
                                        <li><i class="fas fa-circle-check"></i> سیم پیچ کندانسور را تمیز کنید</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض کنتاکتور</li>
                                        <li><i class="fas fa-circle-check"></i> تعویض فن AC</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="themeholy-btn">انتخاب طرح</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Testimonial Area
==============================-->
<section class="space" data-bg-src="{{asset('assets/img/bg/testi_bg_1.jpg')}}">
<div class="container">
    <div class="title-area text-center">
        <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_3.svg')}}"
                alt="shape">توصیه ها</span>
        <h2 class="sec-title text-white">مشتری ما چه می گوید؟</h2>
    </div>
    <div class="row slider-shadow themeholy-carousel" data-slide-show="2" data-lg-slide-show="2"
        data-md-slide-show="1">
        <div class="col-lg-6">
            <div class="testi-box">
                <div class="testi-box_quote">
                    <img src="{{asset('assets/img/icon/quote_2.svg')}}" alt="quote">
                </div>
                <div class="testi-box_profile">
                    <div class="testi-box_img">
                        <img src="{{asset('assets/img/testimonial/testi_1_1.jpg')}}" alt="Avater">
                        <div class="testi-box_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="testi-box_name">الکس فرناندس</h3>
                        <p class="testi-box_desig">طراح UI/UX</p>
                    </div>
                </div>
                <p class="testi-box_text">من اخیراً از یک سرویس خنک کننده هوا برای خانه خود استفاده کردم و بسیار
                    از نتایج خوشحالم تکنسین به موقع رسید و حرفه ای، دوستانه و
                    آگاه به سیستم آنها به سرعت مشکل را حل کردند و توانستند آن را در یک تعمیر کنند
                    به موقع.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="testi-box">
                <div class="testi-box_quote">
                    <img src="{{asset('assets/img/icon/quote_2.svg')}}" alt="quote">
                </div>
                <div class="testi-box_profile">
                    <div class="testi-box_img">
                        <img src="{{asset('assets/img/testimonial/testi_1_2.jpg')}}" alt="Avater">
                        <div class="testi-box_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="testi-box_name">ابراهیم خلیل</h3>
                        <p class="testi-box_desig">مدیر عامل شرکت Corola</p>
                    </div>
                </div>
                <p class="testi-box_text">از زمانی که خدمات خنک کننده هوا را دارم، متوجه بهبودی در
                    درجه حرارت و کیفیت هوا در سراسر خانه من. سیستم در حال حاضر بدون مشکل کار می کند،
                    که نه تنها سطح راحتی من را بهبود بخشیده است بلکه به کاهش قبض انرژی من نیز کمک کرده است.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-box">
                    <div class="testi-box_quote">
                        <img src="{{asset('assets/img/icon/quote_2.svg')}}" alt="quote">
                    </div>
                    <div class="testi-box_profile">
                        <div class="testi-box_img">
                            <img src="{{asset('assets/img/testimonial/testi_1_3.jpg')}}" alt="Avater">
                            <div class="testi-box_review">
                                <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                    class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                    class="fa-solid fa-star-sharp"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="testi-box_name">ماریانا سونیا</h3>
                            <p class="testi-box_desig">طراح UI/UX</p>
                        </div>
                    </div>
                    <p class="testi-box_text">به طور کلی، من این سرویس خنک کننده هوا را به همه توصیه می کنم
                        به دنبال بهبود آسایش و کیفیت هوای خانه خود هستند. تکنسین ها هستند
                        آگاه، حرفه ای و کارآمد، و خدمات به مشتریان درجه یک است. متشکرم
                        برای خدمات عالی!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Contact Area
==============================-->
<div class="space" id="contact-sec">
    <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="{{asset('assets/img/shape/dots_shape_2.png')}}"
            alt="shape"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-lg-10 text-center text-xl-start ">
                <div class="title-area mb-30">
                    <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                        alt="shape">با ما تماس بگیرید</span>
                <h2 class="sec-title">به دنبال مهندس محلی در منطقه خود هستید هم اکنون با ما تماس بگیرید!</h2>
            </div>
            <p class="mt-n2 mb-40">اگر به دنبال یک مهندس محلی در منطقه خود هستید، به سمت راست آمده اید
                محل! شرکت ما متخصص در ارتباط مشتریان با مهندسین ماهر و با تجربه است
                که می تواند در طیف وسیعی از پروژه ها کمک کند. این که آیا شما به یک مهندس برای یک مسکونی نیاز دارید یا
                پروژه تجاری، ما می توانیم کمک کنیم. تیم حرفه ای ما دانش و تخصص لازم را دارد
                انجام همه چیز از تعمیرات کوچک تا نصب در مقیاس بزرگ. وقتی با ما تماس بگیرید، ما این کار را خواهیم کرد
                برای درک نیازهای خاص خود با بالاترین استانداردها با شما همکاری می کند.</p>
            <div class="contact-info-wrap1">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="header-info">
                            <div class="icon-btn">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">هر زمان خواستید با ما تماس بگیرید:</span>
                                <a href="tel:+16326543654" class="header-info_link">021-97582</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-info">
                            <div class="icon-btn">
                                <i class="fas fa-messages"></i>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">به ما ایمیل بزنید: </span>
                                <a href="mailto:info@plumer.com" class="header-info_link">info@plumer.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group justify-content-center justify-content-xl-start">
                <a href="contact.html" class="themeholy-btn">درخواست آنلاین</a>
                <a href="contact.html" class="themeholy-btn style4">تماس با ما</a>
            </div>
        </div>
        <div class="col-xl-6 mt-40 mt-xl-0">
            <div class="quote-form-box">
                <h4 class="form-title text-center">دریافت  <span class="text-theme">رایگان</span> مشاوره </h4>
                <form action="https://theme-preview.ir/html/plumer/demo/mail.php" method="POST" class="contact-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="نام شما">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="آدرس ایمیل">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" name="number" id="number"
                                placeholder="شماره تلفن">
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>موضوع را انتخاب کنید</option>
                                <option value="AC Installation">نصب AC</option>
                                <option value="Plumbing Service">خدمات لوله کشی</option>
                                <option value="AC Repairing">تعمیر AC</option>
                                <option value="Dust Cleaning">پاکسازی گرد و غبار</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                placeholder="پیام شما"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="themeholy-btn btn-fw">ارسال</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Blog Area
==============================-->
<section class="line-bg overflow-hidden space" id="blog-sec">
    <div class="shape-mockup" data-top="0" data-right="0"><img src="{{asset('assets/img/shape/line_shape_4.png')}}" alt="shape">
    </div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img class="spin" src="{{asset('assets/img/theme-img/title_shape_2.svg')}}"
                    alt="shape">وبلاگ</span>
            <h2 class="sec-title">آخرین مقالات ما</h2>
        </div>
        <div class="row slider-shadow themeholy-carousel" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog/blog_1_1.jpg')}}" alt="blog image">
                        <a class="blog-date" href="blog.html">15 <br> خرداد ماه</a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fas fa-user"></i>توسط پلامر</a>
                            <a href="blog.html"><i class="fas fa-tags"></i>لوله کشی آشپزخانه</a>
                         </div>
                         <h3 class="box-title"><a href="blog-details.html">احیای دوباره افراد خود به یک خرده فروشی
                                 رکود.</a></h3>
                         <a href="blog-details.html" class="themeholy-btn">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog/blog_1_2.jpg')}}" alt="blog image">
                        <a class="blog-date" href="blog.html">16 <br> خرداد </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fas fa-user"></i>توسط پلامر</a>
                            <a href="blog.html"><i class="fas fa-tags"></i>لوله کشی حمام</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">ما آشپزخانه قدیمی شما را با برند ظاهر خواهیم کرد
                                جدید.</a></h3>
                        <a href="blog-details.html" class="themeholy-btn">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog/blog_1_3.jpg')}}" alt="blog image">
                        <a class="blog-date" href="blog.html">17 <br> خرداد </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fas fa-user"></i>توسط پلامر</a>
                            <a href="blog.html"><i class="fas fa-tags"></i>سیستم تهویه هوا</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">هدف کسب و کار جهانی زندگی را از
                            فناوری</a></h3>
                    <a href="blog-details.html" class="themeholy-btn">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog/blog_1_4.jpg')}}" alt="blog image">
                        <a class="blog-date" href="blog.html">19 <br> خرداد </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fas fa-user"></i>توسط پلامر</a>
                            <a href="blog.html"><i class="fas fa-tags"></i>Electriciy</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">تا همین اواخر نمای غالب
                            فرض شده</a></h3>
                    <a href="blog-details.html" class="themeholy-btn">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
