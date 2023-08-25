@extends('website.master')
@section('main')

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">404 - خطا</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li>404 - صفحه خطا</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Error Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="error-img">
                <img src="{{asset('assets/img/theme-img/error.jpg')}}" alt="404 image">
            </div>
            <div class="error-content">
                <h2 class="error-title"><span class="text-theme">اوه!</span> صفحه یافت نشد</h2>
                 <p class="error-text">اوه! صفحه مورد نظر شما وجود ندارد. ممکن است جابجا شده باشد یا
                     حذف شد.</p>
                 <a href="{{route('home')}}" class="themeholy-btn"><i class="fal fa-home me-2"></i>بازگشت به
                     صفحه اصلی</a>
            </div>
        </div>
    </section>
@endsection
