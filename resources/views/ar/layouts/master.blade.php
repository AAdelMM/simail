<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL Simail Co</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/mainAr.js') }}"></script>
</head>
<body class="bg-[#1e304e] m-0 p-0 overflow-x-hidden">
 
    @include('ar.sections.header')
    @include('ar.sections.home')
    
    <div id="carousel" class="relative  w-full h-[100vh]">
        <div class="carousel-inner relative w-full h-full">
                <div class="carousel-item absolute w-full h-full">
                    @include('ar.sections.about_us')
                </div>
                <div class="carousel-item absolute w-full h-full hidden">
                    @include('ar.sections.vision')
                </div>
                <div class="carousel-item absolute w-full h-full hidden">
                    @include('ar.sections.mission')
                </div>
                <div class="carousel-item absolute w-full h-full hidden">
                    @include('ar.sections.message')
                </div>
              <!-- Navigation buttons -->
                <div class="absolute md:top-[90vh] top-[95vh] w-[100vw] gap-5 flex justify-center">
                        <button id="prev" class="  transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">السابق</button>
                        <button id="next" class="  transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">التالى</button>
                </div>
         
        </div>
        
    </div>
    
    
    @include('ar.sections.services')
    @include('ar.sections.projects')
    @include('ar.sections.clinets')
    @include('ar.sections.footer')

</body>
</html>