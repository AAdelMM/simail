@extends('en.layouts.main')

@section('content')
@include('en.sections.header')
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#1e304e',
                        gold: '#efc02e',
                        purple: '#4e1e48',
                    }
                }
            }
        }
    </script>

<section class="bg-navy text-white py-[10rem]">

    <main class="container mx-auto  p-4">
        <section id="fields-of-work" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gold">Fields of Work</h2>
            <p class="mb-4 text-lg">
                Our construction company specializes in a wide range of projects, including:
            </p>
            <ul class="list-disc list-inside mb-4">
                <li class="font-bold text-lg py-4">Earth Works <br><p class="font-normal pl-5">Great capabilities from Khaled Al-Sammaeel Foundation in excavation, backfilling, compaction, and grading of land, supported by modern equipment to meet needs and unlimited expertise from workers, technicians, and engineers.</p></li>
                <li class="font-bold text-lg py-4">Asphalt milling <br><p class="font-normal pl-5">Our company possesses modern machinery and specialized equipment for asphalt removal (asphalt milling) as well as skilled and trained labor for executing road maintenance work.</p></li></li>
                <li class="font-bold text-lg py-4">Asphalt Works <br><p class="font-normal pl-5">
                Khaled Al-Semail Institution boasts significant capabilities in all construction projects, supported by modern equipment and the high expertise of its team. This is in accordance with the specifications and standards of the Ministry of Transport or the General Secretariat.</p></li></li>
                <li class="font-bold text-lg py-4">Road Marking <br><p class="font-normal pl-5">Road painting is one of the tasks that require a great deal of expertise to ensure road safety and security. Khaled Al-Semail Institution carries out all necessary road painting work. The institution also plans and designs roads, manufactures all types of road markings, and places ground signs, including longitudinal and transverse lines, in addition to thermal painting and thermal roads. We also execute all cold road painting work according to job requirements and in compliance with the Ministry's specifications for roads and other government agencies.</p></li></li>
            </ul>
            <p>
                With our expertise and experience, we deliver high-quality results in all aspects of construction, 
                ensuring client satisfaction and project success.
            </p>
        </section>

        <section id="equipment" class="bg-purple p-4 rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-gold">Our Equipment</h2>
            <p class="mb-4">
                We utilize state-of-the-art equipment to ensure efficiency and quality in our projects:
            </p>
            <ul class="grid grid-cols-2 gap-4">
                <li class="bg-navy p-2 rounded">Excavators</li>
                <li class="bg-navy p-2 rounded">Bulldozers</li>
                <li class="bg-navy p-2 rounded">Cranes</li>
                <li class="bg-navy p-2 rounded">Asphalt mixers</li>
                <li class="bg-navy p-2 rounded">Forklifts</li>
                <li class="bg-navy p-2 rounded">Conveyor Belts</li>
                <li class="bg-navy p-2 rounded">Grader</li>
                <li class="bg-navy p-2 rounded">Dump Trailer</li>
                <li class="bg-navy p-2 rounded">Vibrating Screens</li>
                <li class="bg-navy p-2 rounded">Dump Truck</li>
                <li class="bg-navy p-2 rounded">Salon Cars</li>
                <li class="bg-navy p-2 rounded"> Wheel Loader</li>
                <li class="bg-navy p-2 rounded">Paver</li>
                <li class="bg-navy p-2 rounded">Crusher</li>
                <li class="bg-navy p-2 rounded">Asphalt Milling Machines</li>
            </ul>
        </section>
    </main>

   
</section>

@include('en.sections.footer')
@endsection