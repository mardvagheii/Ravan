@extends('layout.web.template')
@section('title','مقاله پزشکی')


@section('style')

@endsection



@section('content')
      <!-- top-land -->
      <section class="top-single-dr padding-y-section">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-6 order-last order-lg-first">
                              <div class="texts gap-lg">
                                    <header class="gap-sm">
                                          <h1 class="bolder1-lg text-center">مشاور آنلاین پزشکی عمومی</h1>
                                          <h3 class="font-normal">از طریق  {{ env('SiteBrand') }}  مشاوره آنلاین پزشکی عمومی بگیرید</h3>
                                    </header>
                                    <ul class="font-lg" style="list-style:square">
                                          <li>به  {{ env('SiteBrand') }}  خوش اومدید</li>
                                          <li>با  {{ env('SiteBrand') }}  لازم نیست از خونه خارج بشید، اینجا میتونید از بین کلی مشاور ب سابقه تو حوزه پزشکی عمومی مشاور ایده آلت رو انتخاب کنی و مشاوره آنلان بیگری </li>
                                          <li>اگه توی گرفتن مشاور پزشکی عمومی به راهنمایی بیشتری نیاز داشتی، کافیه از بخش پروفایلت، سوالت رو برامون بفرستی تا بهش پاسخ بدیم.</li>
                                          <li>میتونی در حالت های تفلنی، چس و ویس، و تصویری مشاوره پزشکی عمومی بگیری</li>
                                          <li>در ضمن، اگه از خارج کشور هستی، بدون هیچ مشکلی میتونی از  {{ env('SiteBrand') }} ، مشاوره آنلاین بگیری و پرداخت هات رو انجام بدی.</li>
                                    </ul>
                              </div>
                              <div id="cta-btn" class="d-inline-block text-center part-padding-sm" >
                                    <p class="text-danger gap-sm font-lg">
                                          تا 6 ساعت و 43 دقیقه ی آینده<Br> میتونید از این مشاوره با 15 درصد تخفیف استفاده کنید
                                    </p>
                                    <h6 class="border rounded-lg gap-sm p-2 w-100 ">کد تخفیف رو همراه خودت ببر: <span class="text-danger">Tah15</span></h6>
                                    <div  class="position-relative cta d-flex justify-content-center align-items-center position-relative  btn-success1 rounded-lg ">
                                          <i class="fas fa-arrow-right"></i>
                                          <div class="text ">
                                                <h6 class="normal1">همین الآن</h6>
                                                <h5 class="normal1">مشاوره پزشکی عمومی بگیر</h5>
                                          </div>
                                          <a href="{{ route('Web.ConsultantList') }}" class="entry-link"></a>
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-6 order-first order-lg-last col-10 mx-auto">
                              <img class="w-100" src="{{ asset('assets/Web/images/header-image-low-size.png') }}" alt="pik">
                        </div>
                  </div>
            </div>
      </section>
      <!-- End top-land -->
      <!-- Stert advantages skills -->
      <section class="advantages-section padding-y-section">
            <div class="container">
                  <header class="header gap-lg">
                        <h1>چرا  {{ env('SiteBrand') }} </h1>
                        <h2>ویژگی ها و مزیت های مشاوره آنلاینِ  {{ env('SiteBrand') }} </h2>
                  </header>
                  <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-4 col-6 d-flex flex-column justify-content-center text-center">
                              <img src="" alt="" class="">
                              <p class="font-weight-bold gap-inner">مشاوره در هر زمان</p>
                              <p>مشاوره آنلاین در هر ساعت از شبانه روز</p>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6 d-flex flex-column justify-content-center text-center">
                              <img src="" alt="" class="">
                              <p class="font-weight-bold gap-inner">هزینه مناسب</p>
                              <p>هزینه فوق‌العاده مقرون به صرفه نسبت به مشاوره حضوری</p>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6 d-flex flex-column justify-content-center text-center">
                              <img src="" alt="" class="">
                              <p class="font-weight-bold gap-inner">کارشناسان متخصص مشاوره</p>
                              <p>اتصال به مشاور متخصص در حوزه مورد‌نظر</p>
                        </div>
                        <div class="col-xl-3 col-md-4 col-6 d-flex flex-column justify-content-center text-center">
                              <img src="" alt="" class="">
                              <p class="font-weight-bold gap-inner">مشاوره محرمانه</p>
                              <p>مشاوره به‌صورت کاملا محرمانه</p>
                        </div>
                  </div>
            </div>
      </section>
      <!-- End advantages skills -->
      <!-- Stert comments projects -->
      <section class="comments-section padding-y-section  bg-color2">
            <div class="container text-center">
                  <header class="header gap-lg">
                        <h1>نظرات کاربران</h1>
                        <h2>نظرات افرادی که از مشاوران آنلاینِ  {{ env('SiteBrand') }}  استفاده کرده اند</h2>
                  </header>
                  <div class="comments-s owl-carousel owl-theme main-img col-sm-9 mx-auto">
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/1.png') }}" alt="person">
                              <h6>عبد الرحیم خالدی</h6>
                              <p class="mb-3">تستهای روانشناسی که به صورت حضوری باید صدها هزار تومن بابتش هزینه میکردم تو این اپلیکیشن به صورت رایگان در اختیارم قرار گرفت. واقعا باورنکردنی بود.</p>
                        </div>
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/2.png') }}" alt="person">
                              <h6>محمد</h6>
                              <p class="mb-3">من شهرستان زندگی میکنم ودسترسی به مشاوره خوب نداشتم ولی  {{ env('SiteBrand') }}  این مشکل منو با مشاوره های حرفه ای و باسوادش حل کرد.</p>
                        </div>
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/3.jpg') }}" alt="person">
                              <h6>سعید</h6>
                              <p class="mb-3">خیلی دودل بودم که ازدواج کنم یا نه؟ برای هم مناسب هستیم یا نه؟ بعد از مشاوره خیلی مطمئن تر تونستم تصمیم بگیرم.</p>
                        </div>
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/4.jpg') }}" alt="person">
                              <h6>احمد</h6>
                              <p class="mb-3"> {{ env('SiteBrand') }}  پزشک های خوب رو برای این اپلیکیشن گلچین کرده. من که به شخصه از همه مشاوره هایی که گرفتم، خیلی راضی ام.</p>
                        </div>
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/1.png') }}" alt="person">
                              <h6>علی</h6>
                              <p class="mb-3">خیلی با حوصله به حرف های بنده گوش دادند و نکات بسیار خوب و کاربردی رو برای حل مشکل من بیان کردند</p>
                        </div>
                        <div class="item part-padding bg-white shadow-sm">
                              <div class="">
                              </div>
                              <img class="mb-2 rounded-circle mx-auto" src="{{ asset('assets/Web/images/2.png') }}" alt="person">
                              <h6>مجتبی کیانی</h6>
                              <p class="mb-3">عالی بود واقعا با حوصله هستند و مشاوره صبورانه پیش میبرند و در ضمن پیگیری میکنند و راه حل هاشون همیشه برام مفید بوده و خیلی آروم شدم. ممنونم ازشون 😍 😍</p>
                        </div>
                  </div>
            </div>
      </section>
      <!-- End comments projects -->
      <!-- statistic data -->
            <section class="statistic-section padding-y-section">
                  <div class="container">
                         <div class="row text-center justify-contnt-around aling-items-center">
                               <div class="col-sm-6 justify-contnt-center align-items-center ">
                                     <h6 class="gap-sm">تا کنون بیش از </h6>
                                     <h4 class="bolder1-lg text-warning gap-sm">0</h4>
                                     <h6 class="mb-5 mb-sm-0">نفر از خدمات   {{ env('SiteBrand') }}  استفاده کرده اند</h6>
                               </div>
                               <div class="col-sm-6 justify-contnt-center align-items-center ">
                                     <h6 class="gap-sm">میانگین امتیاز کاربران به جلسه مشاوره</h6>
                                     <h3  class="bolder1-lg text-warning gap-sm">
                                           <i class="fas fa-star "></i>
                                           <i class="fas fa-star "></i>
                                           <i class="fas fa-star "></i>
                                           <i class="fas fa-star "></i>
                                           <i class="fas fa-star "></i>
                                     </h3>
                                     <h6 class="mb-0">4.8 از 5 بوده است.</h6>
                               </div>
                         </div>
                  </div>
            </section>
      <!-- End statistic data -->
@endsection


@section('js')

@endsection
