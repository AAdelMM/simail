@extends('en.layouts.main')

@section('content')
@include('en.sections.header')

<div class="container m-auto  h-[auto] py-[10rem]  bg-white flex flex-col items-center gap-10">
    <h1 class="text-[4rem] font-bold font-mono text-[#1e304e] text-center">الهيكل التنظيمي</h1>
    <div class="w-[80%] bg-[#efc02e] text-center rounded-2xl"><h1 class="text-[3rem] font-serif font-bold p-4 text-[#1e304e]">إدارة الأستثمار</h1></div>
    <div class="w-[80%] bg-[#efc02e] text-center rounded-2xl"><h1 class="text-[3rem] font-serif font-bold p-4 text-[#1e304e]">الشؤون المالية</h1></div>
    <div class="w-[80%] border-2 border-[#efc02e] text-center rounded-2xl">    
        <div class="bg-[rgb(239,192,46)] text-center"><h1 class="text-[3rem] font-serif font-bold p-4 text-[#1e304e]">الإدارة التنفيذية</h1></div>
            <div class="flex justify-center items-center flex-wrap 2xl:flex-row   flex-col gap-4 my-[2rem]">
                <div class="bg-[#1e304e] w-[10rem] h-10 rounded-lg text-white text-[1rem] p-2"><h1>نقليات</h1></div>
                <div class="bg-[#1e304e] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>إدارة المشتريات</h1></div>
                <div class="bg-[#1e304e] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>الموارد البشرية</h1></div>
                <div class="flex flex-col items-center gap-4 border-2 border-[#efc02e]">
                <div class="bg-[#1e304e] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>التشغيل والصيانة</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>الكسارة</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>الورشة</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>حركة المعدات</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>خلاطات الاسفلت</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>المستودع</h1></div>

                </div>
                <div class="bg-[#1e304e] w-[10rem] h-10  rounded-lg text-white text-[1rem] p-2"><h1>السلامة</h1></div>
                <div class="flex flex-col items-center gap-4 border-2 border-[#efc02e]">
                    <div class="bg-[#1e304e] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>المياه والصرف</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>اعمال الكهرباء</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>اعمال الهاتف</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>اعمال الطرق</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>الحدائق</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>اعمال الإنارة</h1></div>
                    <div class="bg-[#4E1E48] w-[10rem] rounded-lg text-white text-[1rem] p-2"><h1>اعمال التشجير</h1></div>

                </div>
            </div>
        
    
    </div>
    
</div>


@include('en.sections.footer')
@endsection