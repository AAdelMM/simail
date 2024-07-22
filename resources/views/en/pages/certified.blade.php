@extends('en.layouts.main')

@section('content')
@include('en.sections.header')

<div class="container  mx-auto h-[100%] pt-[9rem] pb-10">
    <!-- Swiper container for images -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @for ($i = 1; $i <= 27; $i++)
                <div class="swiper-slide flex justify-center">
                    <img class="border-8 border-[#efc02e] p-2" src="{{ asset('images/certificate/c' . $i . '.png') }}" alt="">
                </div>
            @endfor
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

@include('en.sections.footer')

<!-- Swiper JS Initialization -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endsection
