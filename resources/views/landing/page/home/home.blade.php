@extends('landing.master.app')

@section('title', 'Home')

@section('content')
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="img/avatar.png" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>
                <h1 class="text-uppercase poppins-font"><span>I'm</span> Nova Wirya</h1>
                <p class="open-sans-font">I'm a IT Enthusiast </p>
                <a href="{{ route('about') }} class="btn btn-about">more about me</a>
            </div>
        </div>
    </div>
</section>
@endsection