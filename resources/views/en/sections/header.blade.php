<nav class="w-[100vw] h-[auto] fixed z-50">
    <div id="menu-body" class="container w-[60vw] mx-auto py-10 flex justify-between items-center font-bold px-7 bg-[#efc02e] bg-opacity-80 rounded-b-3xl">
        <!-- Burger Menu Button -->
        <button class="block lg:hidden text-[#1e304e] text-2xl" id="burger-button">
            &#9776; <!-- Hamburger Icon -->
        </button>
        <img class="w-[3rem] h-[auto] lg:hidden" src="{{asset('images/sub-logo.png')}}" alt="">

        <!-- Navigation Links -->
         
        <div class="  w-[100%] hidden   lg:inline-flex justify-around items-center ">
            <a href="/" class="text-[#1e304e]">Home</a>
            <a href="/#about" class="text-[#1e304e]">About Us</a>
            <a href="/#services" class="text-[#1e304e]">Services</a>
            <a href="/#project" class="text-[#1e304e]">Projects</a>
            <a href="/#clinet" class="text-[#1e304e]">Clients</a>
            <a href="#" class="text-[#1e304e]">Our Partners</a>
            
            <div class="relative">
                <a href="#" class="text-[#1e304e] more-link">More</a>
                <div class="sub-menu w-[12rem] absolute hidden mt-2 bg-[#efc02e] z-[100] text-[#1e304e]">      
                    <a href="#" class="block px-4 py-2">Organizational Structure</a>
                    <a href="#" class="block px-4 py-2">Fields of Work</a>
                    <a href="#" class="block px-4 py-2">Equipment and Tools</a>
                    <a href="/certified" class="block px-4 py-2">Certifications</a>
                    <a href="#" class="block px-4 py-2">Contact Us</a>
                </div>
            </div>
            <a href="#" class="text-[#1e304e] px-7">  العربية</a>
        </div>
    </div>
    
    <div class="mobile-menu hidden lg:hidden absolute top-30 left-5 w-[50%] bg-[#efc02e] bg-opacity-80 text-[#1e304e] z-50 rounded-3xl">
        <a href="#" class="block px-4 py-2">Home</a>
        <a href="#about" class="block px-4 py-2">About Us</a>
        <a href="#services" class="block px-4 py-2">Services</a>
        <a href="#project" class="block px-4 py-2">Projects</a>
        <a href="#clinet" class="block px-4 py-2">Clinets</a>
        <a href="#" class="block px-4 py-2">More</a>
        <a href="#" class="block px-4 py-2"> العربية</a>
    </div>
    
</nav>
