@extends('layout.web.template')
@section('title','مقاله روانشناسی')



@section('style')

@endsection



@section('content')
      <div class="profile-moshaver-list pt-5">
            <div class="container">
                  <div>
                        <div id="top-site-menu-two">
                        <div>
                              <a href="{{ route('Web.index') }}">صفحه اصلی</a>
                        </div>


                        <div>
                              <i class="far fa-chevron-left"></i>
                              <a href="{{ route('Web.Category') }}">دسته بندی</a>
                        </div>


                        <div>
                              <i class="far fa-chevron-left"></i>
                              <a
                                    href="{{ route('Web.CategoryList' , $MainCat->id ) }}">{{ $MainCat->title }}</a>
                        </div>


                        <div>
                              <i class="far fa-chevron-left"></i>
                              <a class="btn disabled p-0" href="#">{{ $CurrentSubject->title }}</a>

                        </div>
                        </div>
                  </div>




                  <div class="">
                        <div class="row">
                        <div class="right-profile  col-md-6">
                              <h2 class="name-moshaver-profile">{{ $CurrentSubject->title }}</h2>
                              <div class="prop-moshaver-single">
                                    <div class="gap-lg">
                                    @forelse($Tags as $item)
                                          <p class="btn disabled btn-secondary font-sm "># {{ $item }}</p>
                                    @empty
                                          <p> </p>
                                    @endforelse
                                    </div>
                                    <p>{{ $CurrentSubject->description }}</p>
                              </div>
                              <!-- <a href="#" class="btn btn-success1">شروع مشاوره</a> -->
                        </div>

                        <div id="left-profile-moshaver" class="col-md-6 align-items-center justify-content-center pb-5">
                              <div id="img-discription-left-single-profile " class="">
                                    <div id="img-disc">
                                    <img class="w-100"
                                          src="{{ asset($CurrentSubject->Image ? $CurrentSubject->Image->url : 'assets/Web/images/depression_consulting.jpg') }}"
                                          alt="">
                                    <div id="down-left-single-profile-moshaver">
                                          <a href="{{ route('Web.ConsultantList') }}" id="start-moshavere"
                                                class="mt-0">شروع مشاوره</a>
                                    </div>
                                    </div>
                              </div>
                        </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- popular-consulting -->
      {{-- <section class="padding-y-section popular-consulting bg-color3">
                              <div class="container">
                                    <header class="header text-center gap-lg">
                                          <img class="mb-3" src="{{ asset('assets/Web/images/q-a.svg') }}"
      alt="pik">
      <h4 class="font-normal">پرسش و پاسخ</h4>
      </header>
      <div class="navhere"></div>
      <div class="comments-s owl-carousel owl-theme main-img col-sm-9 mx-auto">
            <div class="item part-padding ">
                  <div class="question shadow-sm bg-success1 text-white ml-auto col-md-7">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>چرا خیلی زود خسته میشم؟ دیگه انرژی انجام خیلی کارهارو ندارم؟</p>
                  </div>
                  <div class="answer shadow-sm bg-white  mr-auto col-md-10">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>احتمالا شما قبلا از کارهایی که انجام میدادین نتیجه ای که به دلخواهتان بوده را به دست نیاورده اید
                        درنتیجه از انجام اون کار دلسرد شده اید و این دلسردی رو به اکثرا موقعیت های زندگی تون تعمیم داده اید.
                        اینکه
                        از
                        خودتان انتظار داشته باشید که من باید تو هر کاری باید می تونستم موفق باشم و نباید شکست می خوردم
                        انتظار غیرواقع بینانه ای است. ددر عوض شما ازین تجربیات درس بگیرین و دقت کنید ببینید اشتباه کارتان چه
                        بوده
                        که موفق
                        نبوده اید</p>
                  </div>
            </div>
            <div class="item part-padding ">
                  <div class="question shadow-sm bg-success1 text-white ml-auto col-md-7">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>چرا خیلی زود خسته میشم؟ دیگه انرژی انجام خیلی کارهارو ندارم؟</p>
                  </div>
                  <div class="answer shadow-sm bg-white  mr-auto col-md-10">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>احتمالا شما قبلا از کارهایی که انجام میدادین نتیجه ای که به دلخواهتان بوده را به دست نیاورده اید
                        درنتیجه از انجام اون کار دلسرد شده اید و این دلسردی رو به اکثرا موقعیت های زندگی تون تعمیم داده اید.
                        اینکه
                        از
                        خودتان انتظار داشته باشید که من باید تو هر کاری باید می تونستم موفق باشم و نباید شکست می خوردم
                        انتظار غیرواقع بینانه ای است. ددر عوض شما ازین تجربیات درس بگیرین و دقت کنید ببینید اشتباه کارتان چه
                        بوده
                        که موفق
                        نبوده اید</p>
                  </div>
            </div>
            <div class="item part-padding ">
                  <div class="question shadow-sm bg-success1 text-white ml-auto col-md-7">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>چرا خیلی زود خسته میشم؟ دیگه انرژی انجام خیلی کارهارو ندارم؟</p>
                  </div>
                  <div class="answer shadow-sm bg-white  mr-auto col-md-10">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>احتمالا شما قبلا از کارهایی که انجام میدادین نتیجه ای که به دلخواهتان بوده را به دست نیاورده اید
                        درنتیجه از انجام اون کار دلسرد شده اید و این دلسردی رو به اکثرا موقعیت های زندگی تون تعمیم داده اید.
                        اینکه
                        از
                        خودتان انتظار داشته باشید که من باید تو هر کاری باید می تونستم موفق باشم و نباید شکست می خوردم
                        انتظار غیرواقع بینانه ای است. ددر عوض شما ازین تجربیات درس بگیرین و دقت کنید ببینید اشتباه کارتان چه
                        بوده
                        که موفق
                        نبوده اید</p>
                  </div>
            </div>
            <div class="item part-padding ">
                  <div class="question shadow-sm bg-success1 text-white ml-auto col-md-7">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>چرا خیلی زود خسته میشم؟ دیگه انرژی انجام خیلی کارهارو ندارم؟</p>
                  </div>
                  <div class="answer shadow-sm bg-white  mr-auto col-md-10">
                  <img src="{{ asset('assets/Web/images/useravatar.svg') }}" alt="pik"
                        class="rounded-circle shadow-sm">
                  <p>احتمالا شما قبلا از کارهایی که انجام میدادین نتیجه ای که به دلخواهتان بوده را به دست نیاورده اید
                        درنتیجه از انجام اون کار دلسرد شده اید و این دلسردی رو به اکثرا موقعیت های زندگی تون تعمیم داده اید.
                        اینکه
                        از
                        خودتان انتظار داشته باشید که من باید تو هر کاری باید می تونستم موفق باشم و نباید شکست می خوردم
                        انتظار غیرواقع بینانه ای است. ددر عوض شما ازین تجربیات درس بگیرین و دقت کنید ببینید اشتباه کارتان چه
                        بوده
                        که موفق
                        نبوده اید</p>
                  </div>
            </div>
      </div>
      </div>
      </section> --}}
      <!-- End popular-consulting -->

      <!-- magazine -->
      <section class="magazine-ads bg-success1 text-white d-flex align-items-center">
            <div class="container">
                  <div class="container">
                        <div class=" d-flex flex-wrap  justify-content-between align-items-center col-sm-10">
                        <h3 class="font-normal">مجله اینترنتی {{ env('SiteBrand') }} </h3>
                        <a href="{{ route('Web.Blogs') }}"
                              class="d-flex align-items-center justify-contnt-center font-md ">همه مطالب <i
                                    class="far fa-chevron-left mr-2"></i></a>
                        </div>
                  </div>
            </div>
      </section>
            <!-- End magazine -->

            <!-- comments -->
            <section class="padding-y-section popular-comments bg-color3">
                <div class="container">
                    <header class="header text-center gap-lg">
                        <img class="mb-3" src="{{ asset('assets/Web/images/comment.svg') }}"
                            alt="pik">
                        <h4 class="font-normal">نظرات کاربران</h4>
                    </header>
                    <div class="items col-sm-7 mx-auto">
                        @forelse($CurrentSubject->ConfirmedComments as $item)
                            <div class="item bg-white shadow-sm mb-4 rounded-lg part-padding-sm ">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="
                                          @if($item->User)
                                          @if($item->User->Image)
                                                {{ asset($item->User->Image->url) }}
                                          @else
                                                {{ asset('assets/Web/images/useravatar.svg') }}
                                          @endif
                                          @else
                                                {{ asset('assets/Web/images/useravatar.svg') }}
                                          @endif
                                    " alt="pik" class="ml-2" style="border-radius: 50%; width:42px; height:42px; ">
                                    <p class=" font-light">
                                        {{ $item->User ? $item->User->fullname : 'کاربر ناشناس' }}
                                    </p>
                                </div>
                                <div>
                                    <p>{{ $item->text }}</p>
                                </div>
                                <div>
                                    <p class="text-left font-sm">
                                        {{ \Morilog\Jalali\Jalalian::forge($item->created_at)->format('Y/m/d') }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <h4> </h4>
                        @endforelse
                        <form action="{{ route('Web.AddSubjectOfCategoryComment', $CurrentSubject->id) }}" method="POST">
                              @csrf
                              <div class="form-group">
                                    <label>افزودن نظر</label>
                                    <textarea name="text" rows="5" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-success1 add-comment form-group">
                                    <img src="{{ asset('assets/Web/images/addcomment.svg') }}" class="ml-2 " alt="">
                                    افزودن نظر
                              </button>
                        </form>
                    </div>
            </div>
      </section>
      <!-- End comments -->
@endsection



@section('js')

@endsection
