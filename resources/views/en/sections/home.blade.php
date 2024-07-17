
 <!-- The video -->
  <div class="z-[-1] ">
 <video autoplay loop id="myVideo">
  <source src="{{ asset('images/video1.mp4') }}" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content flex flex-col top-[20vh] justify-center items-center relative">
  <div class="w-[12rem] h-[auto]">
    <img src="{{ asset('images/logo.png') }}" alt="logo">
  </div>
  <h1 class="text-[#efc02e] text-[4rem] font-bold drop-shadow-lg">Al Samaeel Contracting Company</h1>
  <button class="bg-[#1e304e] p-3 m-7 border-[#1e304e] font-bold hover:bg-[#efc02e] hover:text-[#1e304e] rounded-2xl text-[#efc02e]">Contact us</button>
  <div class="h-[auto] w-[8rem] absolute bottom-0 right-[10vw]">
     <img src="{{ asset('images/logo3.png') }}" alt="">
  </div>
  <button id="muteButton">Mute</button>
</div> 
</div>