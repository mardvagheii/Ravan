@extends('layout.web.template')
@section('title','صفحه تكي دسته بندي هاي روانشناسي')



@section('style')

@endsection


asdfasdf

@section('content')
<div class="row pt-5">
    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12   " id="content">
        <div id="items">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="item">
                        <img src="{{ asset('assets/Web/images/depression_consulting.jpg') }}" alt="">
                        <a href="{{ route('Web.SinglePsychology') }}" class="text-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                            می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را
                            می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                            خلاقی،</a>
                        <p class="date-content">سپتامبر 14, 2020</p>

                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="item">
                        <img src="{{ asset('assets/Web/images/depression_consulting.jpg') }}" alt="">
                        <a href="{{ route('Web.SinglePsychology') }}" class="text-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                            می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را
                            می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                            خلاقی،</a>
                        <p class="date-content">سپتامبر 14, 2020</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="item">
                        <img src="{{ asset('assets/Web/images/depression_consulting.jpg') }}" alt="">
                        <a href="{{ route('Web.SinglePsychology') }}" class="text-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                            می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را
                            می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                            خلاقی،</a>
                        <p class="date-content">سپتامبر 14, 2020</p>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 " id="left-site">

        <div id="search">
            <p id="search-label">جستوجو</p>
            <input type="text" placeholder="جستجو..." />
        </div>


        <div id="last-news">
            <p id="last-label">اخرین مطالب </p>
            <ul id="last-items">



                <li class="item-last">
                    <img src="{{ asset('assets/Web/images/1.png') }}" alt="">
                    <div>
                        <p class="date-last">سپتامبر 14, 2020</p>
                        <a href="{{ route('Web.SinglePsychology') }}">علایم افسردگی شدید چیست؟</a>
                    </div>
                </li class="item-last">



                <li class="item-last">
                    <img src="{{ asset('assets/Web/images/1.png') }}" alt="">
                    <div>
                        <p class="date-last">سپتامبر 14, 2020</p>
                        <a href="{{ route('Web.SinglePsychology') }}">علایم افسردگی شدید چیست؟</a>
                    </div>
                </li class="item-last">



                <li class="item-last">
                    <img src="{{ asset('assets/Web/images/1.png') }}" alt="">
                    <div>
                        <p class="date-last">سپتامبر 14, 2020</p>
                        <a href="{{ route('Web.SinglePsychology') }}">علایم افسردگی شدید چیست؟</a>
                    </div>
                </li class="item-last">


            </ul>
        </div>
    </div>

</div>
@endsection




@section('js')

@endsection
