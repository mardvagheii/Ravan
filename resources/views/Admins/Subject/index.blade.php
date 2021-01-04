@section('title')
موضوع ها
@endsection
@php
    $subjects =\App\Models\Subject::get();
@endphp
@section('style')
<link rel="stylesheet" href="{{asset('vendor/vendors/dataTable/responsive.bootstrap.min.css')}}" type="text/css">
@endsection
@extends('layout.Admins.template')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 card pb-5">
            <div class="table-responsive" tabindex="1" style=" outline: none;">
                <h4 class="my-5">ليست موضوع ها</h4>

                <table id="example1" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>
                                <p>عنوان موضوع</p>
                            </th>
                            <th>
                                <p>دسته بندی</p>
                            </th>
                            <th>
                                <p>توضیحات مختصر</p>
                            </th>
                            <th>
                                <p>تعداد نظرات در انتظار بررسی</p>
                            </th>

                            <th>
                                <p>تغييرات</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subjects as $item)
                        <tr>
                            <td>
                                <p>{{$item->title}}</p>
                            </td>
                            <td>
                                <p>
                                     {{ str_replace(',' , '، ' , $item->categories)}}
                                </p>
                            </td>
                            <td>
                                <p>{{mb_substr($item->description,0,50)}}...
                                </p>
                            </td>
                            <td>
                                <p>{{$item->WaitingComments->count()}}
                                </p>
                            </td>

                            <td>
                                <a href="{{ route('Admins.Subject.edit' , $item->id ) }}"
                                    class="d-inline-block my-1 btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="delete btn btn-danger"
                                    data-url="{{route('Admins.Subject.destroy','Delete')}}" data-type="table"
                                    data-item="موضوع" data-id="{{$item->id}}">
                                    <i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('vendor/vendors/dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/vendors/dataTable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/js/examples/datatable.js')}}"></script>
@include('components.ajax.delete')
@endsection
