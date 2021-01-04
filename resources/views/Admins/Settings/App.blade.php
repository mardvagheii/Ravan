@extends('layout.Admins.template')
@section('title', 'تنظیمات کلی')
@section('content')
    @php
    $admin = Auth::guard('admin')->user();
    @endphp
    <div class="container-fluid">
        <div class="col-12 card p-4">
            <div class="page-header">
                <div>
                    <h4>تنظیمات برنامه</h4>
                </div>
            </div>
            <div class="container-fluid">
                <h4 class="mb-5">ویرایش اطلاعات </h4>

                <form action="{{ route('Admins.Settings.App.post') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="my-input">نام کاربری ورود</label>
                            <input id="my-input" class="form-control" type="text" value="{{ $admin->username }}" required
                                name="username">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">کلمه عبور ورود</label>
                            <input id="my-input" class="form-control" type="text"  name="password">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">نام کاربری ملی پیامک</label>
                            <input id="my-input" class="form-control" type="text" value="{{ env('MELIPAYAMAKUSERNAME') }}"
                                required name="usernaempayamak">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">کلمه عبور ملی پیامک</label>
                            <input id="my-input" class="form-control" type="text" value="{{ env('MELIPAYAMAKPASSWORD') }}"
                                required name="passwordpayamak">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">ZARINPAL_MERCHANT</label>
                            <input id="my-input" class="form-control" type="text" value="{{ env('ZARINPAL_MERCHANT') }}"
                                required name="zarinpal">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">PAYIR_APIKEY</label>
                            <input id="my-input" class="form-control" type="text" value="{{ env('PAYIR_MERCHANT') }}"
                                required name="payir">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="my-input">IDPAY_APIKEY</label>
                            <input id="my-input" class="form-control" type="text" value="{{ env('APP_IDPAY') }}" required
                                name="idpay">
                        </div>
                        <div class="form-group col-md-12 text-left">
                            <button type="submit" class="btn btn-warning text-white">ثبت اطلاعات</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>


@endsection
