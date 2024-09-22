
 <!-- The video -->
  <section class="overflow-hidden ">
  <div class="z-[-1] ">
      <video autoplay muted loop playsinline id="myVideo">
        <source src="{{ asset('images/video1.mp4') }}" type="video/mp4">
      </video>

<!-- Optional: some overlay text to describe the video -->
<div class="video-text content flex flex-col top-[20vh] justify-center items-center absolute">
      <div class="2xl:w-[12rem] lg:w-[8rem] w-[4rem] h-[auto]">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
      </div>
      <h1 class="text-[#efc02e] 2xl:text-[4rem] lg:text-[3rem] text-[1.2rem] w-[60%] text-center font-bold drop-shadow-lg border-1 rounded-xl" style="background: rgba(0, 0, 0, 0.5);">Al Samaeel Contracting Company</h1>
      <a href="/contactus"><button class="bg-[#1e304e] p-3 m-7 border-[#1e304e] font-bold hover:bg-[#efc02e] hover:text-[#1e304e] rounded-2xl lg:text-[1rem] text-[0.8rem] text-[#efc02e]">Contact us</button></a>
      <div class="h-[auto] lg:w-[8rem] w-[5rem] absolute bottom-0 right-[10vw]">
        <img src="{{ asset('images/logo3.png') }}" alt="">
      </div>
      <button id="muteButton">Mute</button>
    </div> 
</div>
</section>