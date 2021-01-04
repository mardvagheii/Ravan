@extends('layout.Advisors.template')
@section('title','داشبورد')

@section('style')

@endsection


@section('content')
@php
    $Advisor_id = Auth::guard('advisor')->User()->id;
    $Advisor_Conversation = \App\Models\Conversation::where('advisor_id' , $Advisor_id)->where('status' ,
    'done')->orWhere('status' ,
    'doing')->paginate(15);
@endphp



<div class="container-fluid">

    <!-- begin::page header -->
    <div class="page-header">
        <div>
            <h3>تاریخچه مشاوره ها</h3>
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
                                        <th>نام متقاضی</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>زمان شروع مشاوره</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Advisor_Conversation as $item)
                                        <tr>
                                            <td>
                                                {{ $item->User ? $item->User->fullname : "کاربر حذف شده" }}
                                            </td>
                                            <td>
                                                <div class="">
                                                {{ $item->Subject->title }}
                                                </div>
                                            </td>
                                            <td>
                                                @if ($item->status == 'done')
                                                    <span class="text-success">انجام شده</span>
                                                @endif
                                                @if ($item->status == 'doing')
                                                    <span class="text-secondary">در حال انجام...</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $time =\Morilog\Jalali\Jalalian::forge($item->start_at)->format('H:i:s - Y/m/d')}}
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
                           {{ $Advisor_Conversation->links() }}
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
