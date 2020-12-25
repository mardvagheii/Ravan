@extends('layout.Advisors.template')
@section('title', 'خرید پلن')
@section('content')
    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>پلن ها</h3>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @forelse (\App\Models\Plan::get() as $item)
                        <div class="col-md-4">
                            <div class="text-center bg-warning-gradient  py-2" style="border-radius: 50px">
                                <i class="fa fa-trophy"
                                    style="font-size: 50px; border-radius: 50%; color:#ff8300;  background-color: #fff; padding: 10px"></i>
                            </div>
                            <div class="text-center py-3">
                                <h4>{{ $item->titile }}</h4>
                            </div>
                            <div class="px-4">
                                <h6>توضیحات : <br>
                                    <h6 class="mx-2 mb-3">
                                        {{ $item->description }}
                                    </h6>
                                </h6>
                                <h6>ملهت استفاده : {{ $item->time }} روز</h6>
                                <h6>مبلغ فعال سازی <span>{{ number_format($item->price) }}</span> تومان</h6>
                            </div>
                            <div class="text-center my-4">
                                <a href="{{route('Advisors.BuyPlanc',$item->id)}}" class="btn btn-success" style="border-radius: 100px;">سفارش</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 text-center py-5">
                            <h5>هنوز موردی ثبت نشده</h5>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>

    </div>
@endsection



@section('js')

@endsection
