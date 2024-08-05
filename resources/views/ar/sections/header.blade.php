<nav class="w-[100vw] h-[auto] fixed z-50">
    <div id="menu-body" class="container w-[60vw] mx-auto py-10 flex justify-between items-center font-bold px-7 bg-[#efc02e] bg-opacity-80 rounded-b-3xl">
        <!-- Burger Menu Button -->
        <button class="block lg:hidden text-[#1e304e] text-2xl" id="burger-button">
            &#9776; <!-- Hamburger Icon -->
        </button>
        <img class="w-[3rem] h-[auto] lg:hidden" src="{{asset('images/sub-logo.png')}}" alt="">

        <!-- Navigation Links -->
         
        <div class="  w-[100%] hidden   lg:inline-flex justify-around items-center ">
              
            <div class="relative">
                <a href="#" class="text-[#1e304e] more-link">المزيد</a>
                <div class="sub-menu w-[12rem] absolute hidden mt-2 bg-[#efc02e] z-[100] text-[#1e304e]">      
                    <a href="/ar/structure" class="block px-4 py-2">الهيكل التنظيمي</a>
                    <a href="/ar/field" class="block px-4 py-2">مجالات العمل</a>
                    <!-- <a href="/ar/machien" class="block px-4 py-2">المعدات والادوات</a> -->
                    <a href="/ar/certified" class="block px-4 py-2">اعتماداتنا</a>
                    <a href="/ar/contactus" class="block px-4 py-2">تواصل معنا</a>
                </div>
            </div>
            <a href="#" class="text-[#1e304e]">شركاؤنا</a>
            <a href="/ar/#clinet" class="text-[#1e304e]">عملاؤنا</a>
            <a href="/ar/#project" class="text-[#1e304e]">المشاريع</a>
            <a href="/ar/#services" class="text-[#1e304e]">الخدمات</a>
            <a href="/ar/#about" class="text-[#1e304e]">من نحن</a>
            <a href="/ar/" class="text-[#1e304e]">الرئيسية</a>
            <a href="/" class="text-[#1e304e] px-7">English</a>
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
