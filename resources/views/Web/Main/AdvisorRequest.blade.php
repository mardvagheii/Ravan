@extends('layout.web.template')
@@section('title', 'فرم ثبت نام مشاور')



@section('style')
<style>
    label{
        margin-bottom: 0 !important;
    }
</style>
@endsection



@section('content')
<div class="topest-gap"></div>
<section class="advisor-request">
    <div class="container ">
        <h4>فرم درخواست همکاری روانشناسان</h4>
        <h6 class="text-muted mb-4">لطفا فرم ذیل را ب دقت تکمیل فرمایید تا پس از بررسی درخواست در صورت صلاحدید در اولین
            فرصت با شما تماس گرفته شود.</h6>
        <form action="" class="col-xl-11">
            <div class="mb-4">
                <label>
                    <h6>از چه طريق با پورتال مشاوره آنلاين آشنا شده و تقاضای همکاری نموده ايد؟ *</h6>
                </label>
                <select class="form-control" name="">
                    <option value="">انتخاب كنيد....</option>
                    <option value="">اینترنت</option>
                    <option value="">مراکز مشاوره و روانشناسی</option>
                    <option value="">دوستان و همکاران</option>
                    <option value="">سایر</option>
                </select>
            </div>
            <div class="mb-4">
                <label>
                    <h6>انگيزه خود را از تمايل به همکاری با پورتال  {{ env('SiteBrand') }}  بيان فرمائيد. *</h6>
                </label>
                <textarea class="form-control" name="name" rows="7" placeholder="انگيزه خود را بيان كنيد"></textarea>
            </div>
            <div class="main-title">
                <h4>اطلاعات شخصی :</h4>
            </div>
            <div class="mb-4 row">
                <div class="col-lg-3 col-md-4 col-sm-6 form-group">
                    <label>
                        <h6>نام *</h6>
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 form-group">
                    <label>
                        <h6>نام خانوادگی *</h6>
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 form-group">
                    <label>
                        <h6>جنسیت *</h6>
                    </label>
                    <select class="form-control" name="">
                        <option value="">انتخاب کنید</option>
                        <option value="">مرد</option>
                        <option value="">زن</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 form-group">
                    <label>
                        <h6>وضعیت تاهل *</h6>
                    </label>
                    <select class="form-control" name="">
                        <option value="">انتخاب کنید</option>
                        <option value="">مجرد</option>
                        <option value="">متاهل</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 ">
                <label>
                    <h6>تاریخ تولد : *</h6>
                </label>
                <div class="row">
                    <div class="d-flex flex-column mx-2" style="width:88px">
                        <input class="form-control mb-1" type="text">
                        <label>
                            <h6 class="text-center">روز</h6>
                        </label>
                    </div>
                    <div class="d-flex flex-column mx-2" style="width:88px">
                        <input class="form-control mb-1" type="text">
                        <label>
                            <h6 class="text-center">ماه</h6>
                        </label>
                    </div>
                    <div class="d-flex flex-column mx-2" style="width:88px">
                        <input class="form-control mb-1" type="text">
                        <label>
                            <h6 class="text-center">سال</h6>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label>
                    <h6>محل سکونت : *</h6>
                </label>
                <input type="text" class="form-control" placeholder="تهران / ....">
            </div>
            <div class="main-title">
                <h4>اطلاعات شغلی :</h4>
            </div>
            <div class="mb-4 row">
                <div class="col-lg-4 col-md-6 form-group">
                    <label>
                        <h6>آیا در حال حاضر شاغل هستید؟ *</h6>
                    </label>
                    <select class="form-control" name="">
                        <option value="">انتخاب کنید...</option>
                        <option value="">بله</option>
                        <option value="">خیر</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label>
                        <h6>نام محل کار : *</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="نام محل کار خود را وارد کنید.">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label>
                        <h6>نشانی محل کار : *</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="نشاني محل كر خود را وارد كنيد.">
                </div>
            </div>
            <div class="main-title">
                <h4>مشخصات تماس : </h4>
            </div>
            <div class="mb-4 row">
                <div class=" col-md-6 form-group">
                    <label>
                        <h6>آدرس محل سکونت:*</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="آدرس محل سكونت خود را وارد كنيد.">
                </div>
                <div class=" col-md-6 form-group">
                    <label>
                        <h6>پست الكترونيك : *</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="پست الكترونيك خود را وارد كنيد.">
                </div>
                <div class=" col-md-6 form-group">
                    <label>
                        <h6>تلفن ثابت : * </h6>
                    </label>
                    <input type="text" class="form-control" placeholder="021.........">
                </div>
                <div class=" col-md-6 form-group">
                    <label>
                        <h6>تلفن همراه : * </h6>
                    </label>
                    <input type="text" class="form-control" placeholder="شماره تلفن همراه خود را وارد كنيد.">
                </div>
            </div>
            <div class="main-title">
                <h4>سوابق تحصيلي : </h4>
            </div>
            <div class="mb-4 row">
                <div class=" col-lg-4 col-sm-6 form-group">
                    <label>
                        <h6>مدرك تحصيلي : *</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="مدرك تحصيلي خود را بيان كنيد.">
                </div>
                <div class=" col-lg-4 col-sm-6 form-group">
                    <label>
                        <h6>رشته و گرايش تحصيلي : *</h6>
                    </label>
                    <input type="text" class="form-control" placeholder="رشته و گرايش تحصيلي خود را بيان كنيد.">
                </div>
                <div class=" col-lg-4 col-sm-6 form-group">
                    <label>
                        <h6>دانشگاه فارغ التحصيل (آخرين مدرك تحصيلي ) : * </h6>
                    </label>
                    <input type="text" class="form-control"
                        placeholder="دانشگاه فارغ التحصيل (آخرين مدرك تحصيلي ) خود را بيان كنيد.">
                </div>
            </div>
            <div class="mb-4">
                <label>
                    <h6>ميزان آشنايي با زبان انگليسي : * </h6>
                </label>
                <select class="form-control" name="">
                    <option value="">انتخاب كنيد...</option>
                    <option value="">زياد</option>
                    <option value="">متوسط</option>
                    <option value="">كم</option>
                </select>
            </div>
            <div class="mb-4">
                <label>
                    <h6>ميزان آشنايي با زبان انگليسي : * </h6>
                </label>
                <select class="form-control" name="">
                    <option value="">انتخاب كنيد...</option>
                    <option value="">زياد</option>
                    <option value="">متوسط</option>
                    <option value="">كم</option>
                </select>
            </div>
            <div class="mb-4">
                <label>
                    <h6>ساير زبان های خارجی که ميدانيد و ميزان آشنايی خود را بيان فرماييد. *</h6>
                </label>
                <textarea class="form-control" name="name" rows="7"
                    placeholder="ساير زبان های خارجی که ميدانيد و ميزان آشنايی خود را بيان فرماييد."></textarea>
            </div>
            <div class="mb-4">
                <label>
                    <h6>ميزان آشنايي با رايانه : * </h6>
                </label>
                <select class="form-control" name="">
                    <option value="">انتخاب كنيد...</option>
                    <option value="">خوب</option>
                    <option value="">متوسط</option>
                    <option value="">ضعيف</option>
                </select>
            </div>
            <div class="mb-4">
                <label>
                    <h6>ساير مهارت ها، تخصص ها و اطلاعاتی که ممکن است در استخدام شما اثر مثبت داشته باشد. *</h6>
                </label>
                <textarea class="form-control" name="name" rows="7"
                    placeholder="ساير مهارت ها، تخصص ها و اطلاعاتی که ممکن است در استخدام شما اثر مثبت داشته باشد را وارد نماييد."></textarea>
            </div>
            <div class="mb-4">
                <label>
                    <h6>شرح مختصری از وظايف اصلی آخرين شغل: *</h6>
                </label>
                <textarea class="form-control" name="name" rows="7"
                    placeholder="شرح مختصری از وظايف اصلی آخريرين شغل وارد نماييد."></textarea>
            </div>
            <div class="row">
                <div class="mb-4 col-md-6">
                    <label>
                        <h6>تاریخ آمادگي شروع به همكاري با ما : *</h6>
                    </label>
                    <div class="row">
                        <div class="d-flex flex-column mx-2 " style="width:88px">
                            <input class="form-control mb-1" type="text">
                            <label>
                                <h6 class="text-center">روز</h6>
                            </label>
                        </div>
                        <div class="d-flex flex-column mx-2" style="width:88px">
                            <input class="form-control mb-1" type="text">
                            <label>
                                <h6 class="text-center">ماه</h6>
                            </label>
                        </div>
                        <div class="d-flex flex-column mx-2" style="width:88px">
                            <input class="form-control mb-1" type="text">
                            <label>
                                <h6 class="text-center">سال</h6>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-sm-6">
                    <label>
                        <h6>ميزان تعرفه پيشنهادی برای ارائه مشاوره اينترنتی بازای هر 1 ساعت: *</h6>
                    </label>
                    <input class="form-control" type="text" placeholder="مثال : 50 هزار تومان">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label>
                        <h6>بارگذاری رزومه شخصی: *</h6>
                    </label>
                    <input type="file">
                </div>
                <div class="col-md-6 mb-4">
                    <label>
                        <h6>بارگذاری مدرک تحصيلی: *</h6>
                    </label>
                    <input type="file">
                </div>
                <div class="col-md-6 mb-4">
                    <label>
                        <h6>بارگذاری پروانه اشتغال در صورت دارا بودن پروانه کار: *</h6>
                    </label>
                    <input type="file">
                </div>
                <div class="col-md-6 mb-4">
                    <label>
                        <h6>بارگذاری عکس ترجيحا (3*4): *</h6>
                    </label>
                    <input type="file">
                </div>
                <div class="col-md-6 mb-4">
                    <label>
                        <h6>اينجانب پاسخ ها و اظهارات مندرج در اين فرم را تأييد می نمايم. *</h6>
                    </label>
                    <div class="d-flex">
                        <input type="radio" name="1"><label class="mr-2">بله</label>
                    </div>
                    <div class="d-flex">
                        <input type="radio" name="1"><label class="mr-2">خير</label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn-submit" type="image"
                    src="{{ asset('assets/Web/images/button-g.png') }}" name="" value="">
            </div>
        </form>
    </div>
</section>
@endsection



@section('js')

@endsection
