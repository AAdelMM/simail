@extends('en.layouts.main')

@section('content')
@include('en.sections.header')

<div class="container m-auto  h-[auto] py-[10rem]  bg-white flex flex-col items-center gap-10">
    <h1 class="text-[4rem] font-bold font-mono text-[#1e304e] text-center">الهيكل التنظيمي</h1>
    <div>
        <img src="{{ asset('images/structre.svg') }}" alt="company structre">
    </div>
    
</div>


@include('en.sections.footer')
@endsection