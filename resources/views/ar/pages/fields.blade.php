@extends('ar.layouts.main')

@section('content')
@include('ar.sections.header')
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

<section class="bg-navy text-white py-[10rem]" dir="rtl">

    <main class="container mx-auto p-4">
        <section id="fields-of-work" class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gold">مجالات العمل</h2>
            <p class="mb-4 text-lg">
                تتخصص شركتنا للإنشاءات في مجموعة واسعة من المشاريع، بما في ذلك:
            </p>
            <ul class="list-disc list-inside mb-4">
                <li class="font-bold text-lg py-4">أعمال الحفر <br><p class="font-normal pr-5">قدرات كبيرة من مؤسسة خالد السماعيل في الحفر والردم والدك وتسوية الأراضي، مدعومة بمعدات حديثة لتلبية الاحتياجات وخبرات غير محدودة من العمال والفنيين والمهندسين.</p></li>
                <li class="font-bold text-lg py-4">كشط الأسفلت <br><p class="font-normal pr-5">تمتلك شركتنا آلات حديثة ومعدات متخصصة لإزالة الأسفلت (كشط الأسفلت) بالإضافة إلى عمالة ماهرة ومدربة لتنفيذ أعمال صيانة الطرق.</p></li>
                <li class="font-bold text-lg py-4">أعمال الأسفلت <br><p class="font-normal pr-5">
                تتمتع مؤسسة خالد السميل بقدرات كبيرة في جميع مشاريع البناء، مدعومة بمعدات حديثة والخبرة العالية لفريقها. وذلك وفقًا لمواصفات ومعايير وزارة النقل أو الأمانة العامة.</p></li>
                <li class="font-bold text-lg py-4">علامات الطرق <br><p class="font-normal pr-5">طلاء الطرق هو أحد المهام التي تتطلب قدرًا كبيرًا من الخبرة لضمان سلامة وأمن الطرق. تقوم مؤسسة خالد السميل بتنفيذ جميع أعمال طلاء الطرق اللازمة. كما تقوم المؤسسة بتخطيط وتصميم الطرق وتصنيع جميع أنواع علامات الطرق ووضع العلامات الأرضية، بما في ذلك الخطوط الطولية والعرضية، بالإضافة إلى الطلاء الحراري والطرق الحرارية. كما نقوم بتنفيذ جميع أعمال طلاء الطرق الباردة وفقًا لمتطلبات العمل وبما يتوافق مع مواصفات الوزارة للطرق والجهات الحكومية الأخرى.</p></li>
            </ul>
            <p>
                بفضل خبرتنا وتجربتنا، نقدم نتائج عالية الجودة في جميع جوانب البناء،
                مما يضمن رضا العملاء ونجاح المشروع.
            </p>
        </section>

        <section id="equipment" class="bg-purple p-4 rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-gold">معداتنا</h2>
            <p class="mb-4">
                نستخدم أحدث المعدات لضمان الكفاءة والجودة في مشاريعنا:
            </p>
            <ul class="grid grid-cols-2 gap-4">
                <li class="bg-navy p-2 rounded">حفارات</li>
                <li class="bg-navy p-2 rounded">بلدوزرات</li>
                <li class="bg-navy p-2 rounded">رافعات</li>
                <li class="bg-navy p-2 rounded">خلاطات أسفلت</li>
                <li class="bg-navy p-2 rounded">رافعات شوكية</li>
                <li class="bg-navy p-2 rounded">سيور ناقلة</li>
                <li class="bg-navy p-2 rounded">جريدر</li>
                <li class="bg-navy p-2 rounded">مقطورة قلابة</li>
                <li class="bg-navy p-2 rounded">غرابيل اهتزازية</li>
                <li class="bg-navy p-2 rounded">شاحنة قلابة</li>
                <li class="bg-navy p-2 rounded">سيارات صالون</li>
                <li class="bg-navy p-2 rounded">لودر بعجلات</li>
                <li class="bg-navy p-2 rounded">فرادة</li>
                <li class="bg-navy p-2 rounded">كسارة</li>
                <li class="bg-navy p-2 rounded">آلات كشط الأسفلت</li>
            </ul>
        </section>
    </main>

</section>

@include('ar.sections.footer')
@endsection