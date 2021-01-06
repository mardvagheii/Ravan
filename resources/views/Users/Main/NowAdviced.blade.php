@extends('layout.Users.template')
@section('title','داشبورد')

@section('style')

@endsection



@section('content')

@php
    $User_id = Auth::user()->id;
    $User_Conversation = \App\Models\Conversation::where('user_id' , $User_id)->whereIn('status', ['done' ,
    'doing'])->orderBy('updated_at')->paginate(15);
@endphp



<div class="container-fluid">

    <!-- begin::page header -->
    <div class="page-header">
        <div>
            <h3 class="mb-0">تاریخچه مشاوره های تلفنی</h3>
        </div>
    </div>
    <!-- end::page header -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div class="input-group mb-3">
                            {{-- <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck"></label>
                                    </div>
                                </div>
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">اقدامات
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">حذف </a>
                                    <a class="dropdown-item" href="#">علامت خوانده شده</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-email-list">
                        <div class="table-responsive" tabindex="1" style=" outline: none;">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>نام مشاور</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>زمان انجام مشاوره</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($User_Conversation as $item)
                                        <tr>
                                            <td>
                                                {{ $item->Advisor ? $item->Advisor->name : "کاربر حذف شده" }}
                                            </td>
                                            <td>
                                                <div class="">
                                                    {{ $item->Subject ? $item->Subject->title : "موضوع حذف شده است" }}
                                                </div>
                                            </td>
                                            <td>
                                                @if($item->status == "done")
                                                    <span class="text-success">انجام شده</span>
                                                @endif
                                                @if($item->status == "doing")
                                                    <span class="text-secondary">در حال انجام...</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->start_at ? \Morilog\Jalali\Jalalian::forge($item->start_at)->format('Y/m/d - H:i:s') : '-' }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">موردی یافت نشد</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <nav class="m-t-30">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">بعدی</a>
                            </li> --}}
                            {{ $User_Conversation->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="container-fluid">

    <!-- begin::page header -->
    <div class="page-header pt-4">
        <div>
            <h3 class="mb-0">تاریخچه مشاوره های آنلاین</h3>
        </div>
    </div>
    <!-- end::page header -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div class="input-group mb-3">
                            {{-- <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck"></label>
                                    </div>
                                </div>
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">اقدامات
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">حذف </a>
                                    <a class="dropdown-item" href="#">علامت خوانده شده</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-email-list">
                        <div class="table-responsive" tabindex="1" style=" outline: none;">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>نام مشاور</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>زمان انجام مشاوره</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($User_Conversation as $item)
                                        <tr>
                                            <td>
                                                {{ $item->Advisor ? $item->Advisor->name : "کاربر حذف شده" }}
                                            </td>
                                            <td>
                                                <div class="">
                                                    {{ $item->Subject ? $item->Subject->title : "موضوع حذف شده است" }}
                                                </div>
                                            </td>
                                            <td>
                                                @if($item->status == "done")
                                                    <span class="text-success">انجام شده</span>
                                                @endif
                                                @if($item->status == "doing")
                                                    <span class="text-secondary">در حال انجام...</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->start_at ? \Morilog\Jalali\Jalalian::forge($item->start_at)->format('Y/m/d - H:i:s') : '-' }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">موردی یافت نشد</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <nav class="m-t-30">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">بعدی</a>
                            </li> --}}
                            {{ $User_Conversation->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="container-fluid">

    <!-- begin::page header -->
    <div class="page-header pt-4">
        <div>
            <h3 class="mb-0">تاریخچه مشاوره های حضوری</h3>
        </div>
    </div>
    <!-- end::page header -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div class="input-group mb-3">
                            {{-- <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck"></label>
                                    </div>
                                </div>
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">اقدامات
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">حذف </a>
                                    <a class="dropdown-item" href="#">علامت خوانده شده</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-email-list">
                        <div class="table-responsive" tabindex="1" style=" outline: none;">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>نام مشاور</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>زمان انجام مشاوره</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($User_Conversation as $item)
                                        <tr>
                                            <td>
                                                {{ $item->Advisor ? $item->Advisor->name : "کاربر حذف شده" }}
                                            </td>
                                            <td>
                                                <div class="">
                                                    {{ $item->Subject ? $item->Subject->title : "موضوع حذف شده است" }}
                                                </div>
                                            </td>
                                            <td>
                                                @if($item->status == "done")
                                                    <span class="text-success">انجام شده</span>
                                                @endif
                                                @if($item->status == "doing")
                                                    <span class="text-secondary">در حال انجام...</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->start_at ? \Morilog\Jalali\Jalalian::forge($item->start_at)->format('Y/m/d - H:i:s') : '-' }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">موردی یافت نشد</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <nav class="m-t-30">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">بعدی</a>
                            </li> --}}
                            {{ $User_Conversation->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection



@section('js')
@endsection
