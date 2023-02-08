<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fitness</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="colorlib.com">
<!-- MATERIAL DESIGN ICONIC FONT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
<!-- DATE-PICKER -->
<link rel="stylesheet" href="{{ asset('front/assets/vendor/date-picker/css/datepicker.min.css') }}">
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
</head>
<body>
<div class="wrapper" dir="rtl">
    <form id="wizard">
        <!-- SECTION 1 -->
        <h4></h4>
        <section>
            <h3>التدريب الشخصي</h3>
            <h3>
                السلام عليكم ورحمة الله وبركاته ….
                معاك الكوتش ( أسماء )
                مدربة معتمدة دولياً ومحلياً 🥇
                لي في مجال الرياضة أكثر من 6 سنوات 
                يسعدني انك خطيتي خطوة للأمام وقررتي الاهتمام بجسمك وصحتك ، تطمني انتي في المكان الصح وبين أيدي أمينة 💪🏻
                قبل ماتنطلقين للرحلة حابة اقولك كم شغلة انتبهي عليها :-
                نعم انا راح ادعمك ونعم رح اوقف معاك لين توصلين لهدفك نعم راح ابذل جهد ووقت عشانك بس الارادة والاستمرارية منك انتي دائما كوني المحفز الأول والأخير لنفسك ، الرياضة والصحة يبغالها عزيمة واصرار .
                اذا كنتي جاهزه let’s go ، قدامك أجمل تجربة استمتعي بالرحلة 🏋🏻‍♀️
            </h3>

            <a href="#rules" class="btn" data-bs-toggle="modal" data-bs-target="#rules">الشروط والأحكام</a>

            <!-- Rules-Modal -->
            <div class="modal fade" id="rules" tabindex="-1" aria-labelledby="rulesLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">الشروط والقوانين وآلية الاشتراك :-</h1>
                </div>
                <div class="modal-body text-black p-2">
                    <p>✔️ لاتعاني من أمراض مزمنة</p>
                    <p>✔️ مدة الاشتراك تبدأ من تاريخ استلام الجدول</p>
                    <p>✔️ يحق للمشتركة تجميد الاشتراك في حال حدوث ظرف طارئ وينبغي اخبار المدرب بذلك</p>
                    <p>✔️ يفضل توفير ميزان لحساب كمية الأكل ، وأكواب معيارية</p>
                    <p>✔️ يجب على المشتركة قراءة جميع ملفات التعليمات والارشادات قبل أي سؤال او استفسا</p>
                    <p>✔️ لايوجد استرداد للمبلغ لذلك ينبغي قراءة جميع التعليمات قبل الاشتراك</p>
                    <p>✔️ لايوجد وصفات للطبخ</p>
                    <p>✔️ الجدول الغذائي محسوب السعرات والماكروز بشكل خاص لكل مشتركة</p>
                    <p>✔️ التمارين المنزلية تحتاج توفير ( شنطة أثقال ) على الأقل</p>
                    <p>✔️ يحق للمدرب الغاء اشتراك اي متدرب لا يتبع التعليمات او يسيء للمدرب بأي شكل من الأشكال</p>
                    <p>✔️ الالتزام بموعد المتابعة كل اسبوع وارسال النتائج والقياسات في وقتها</p>
                    <p>✔️ امكانية تصوير المنتجات اللي حاب يستخدمها المشترك في نظامه ليتم ارشاده بكيفية استخدامها ضمن نظامه</p>
                    <p>✔️  جداول الأكل اللي راح تستلمها غير ثابته بمعنى ( ما أحدد لك افطر كذا وتعشى كذا ….) الجدول رح يكون بنظام الحصص احدد لك كمية الحصص خلال اليوم كامل وانت تحدد وش تفطر ووش تغدى</p>
                    <p>✔️ عدم الحاجة للمكملات الا في حال يصعب تغطية الاحتياج من الاكل</p>
                    <p>✔️ ايام الرد على الاستفسارات من الأحد الى الخميس من الساعة 12:00 م الى الساعة 8:00 م</p>
                    <p>✔️ يتم ارسال الملفات من 3-6 أيام من الدفع ( لاتشمل الإجازات الاسبوعية )</p>
                    <p>✔️ خصم 10% عند تجديد الاشتراك</p>
                    <p>✔️ عدم مشاركة الجداول مع أي شخص ؛ لأن لكل شخص احتياج وهدف مختلف فاللي يناسبك مايناسب غيرك</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <h4></h4>
        <section>
            <h3>تسجيل الدخول</h3>
            <div class="form-row">
                <div class="form-holder w-100">
                    <input type="email" name="email" class="form-control" placeholder="ادخل ايميلك">
                    <i class="zmdi zmdi-lock-open"></i>
                </div>
            </div>

            <div class="form-row">
                <div class="form-holder w-100">
                    <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                    <i class="zmdi zmdi-lock-open"></i>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <h4></h4>
        <section>
            <h3 style="margin-bottom: 16px;">المعلومات الشخصية</h3>
            <div class="form-row">
                <div class="form-holder">
                    <input type="text" name="name" class="form-control" placeholder="الاسم ثلاثي">
                </div>
                <div class="form-holder">
                    <input type="text" name="age" class="form-control" placeholder="العمر">
                </div>
            </div>

            <div class="form-row">
                <div class="form-holder">
                    <input type="text" name="tall" class="form-control" placeholder="الطول">
                </div>
                <div class="form-holder">
                    <input type="text" name="weight" class="form-control" placeholder="الوزن">
                </div>
            </div>

            <div class="form-row">
                <div class="form-holder">
                    <input type="text" name="status" class="form-control" placeholder="الحالة الاجتماعية">
                </div>
                <div class="form-holder password">
                    <input type="text" name="job" class="form-control" placeholder="المهنة">
                </div>
            </div>

            <div class="form-row">
                <div class="form-holder">
                    <input type="text" name="phone" class="form-control" placeholder="رقم الجوال">
                </div>
            </div>
        </section>

        <!-- SECTION 4 -->
        <h4></h4>
        <section>
            <h3>الباقات</h3>
            <div class="cart_totals">
                <div>
                    <input type="radio" name="package">
                    <label>الباقة الذهبية جدول تدريبي وغذائي مع متابعة ٣ ايام ف الاسبوع لمدة شهر ( 200 ريال )</label>
                </div>
            </div>

            <div class="cart_totals">
                <div>
                    <input type="radio" name="package">
                    <label>جدول تدريبي وغذائي مع متابعة اسبوعية لمدة شهر ( 170 ريال )</label>
                </div>
            </div>

            <div class="cart_totals">
                <div>
                    <input type="radio" name="package">
                    <label>جدول تدريبي ( 90 ريال )</label>
                </div>
            </div>

            <div class="cart_totals">
                <div>
                    <input type="radio" name="package">
                    <label>جدول غذائي ( 90 ريال )</label>
                </div>
            </div>

            <div class="text-center text-black mt-5">
                <div>
                    <h5 class="mb-2">بعد الانتهاء من ملء النموذج يتم تحويل المبلغ على الحساب البنكي الآتي :</h5>
                    <p>راجحي : 522000010006086005828</p>
                </div>
            </div>
        </section>
    </form>
</div>

<script src="{{ asset('front/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- JQUERY STEP -->
<script src="{{ asset('front/assets/js/jquery.steps.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>