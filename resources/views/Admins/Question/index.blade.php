@extends('layout.Admins.template')
@section('title','سوالات متداول')
@section('content')

<div class="container-fluid">
    <div class="col-12 card p-4">
        <div class="page-header">
            <div>
                <h4>سوالات متداول</h4>
            </div>
        </div>
        <div class="container">
            <h4>سوال جدید</h4>


            <form action="{{ route('Admins.AddQuestion') }}" method="post">
                @csrf
                <div class="row align-items-end justify-content-center">
                    <div class="form-group col-md-12">
                        <label for="my-input">عنوان</label>
                        <input id="my-input" class="form-control" type="text" required name="title">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="my-input">توضیحات</label>
                        <textarea name="description" class="form-control" required rows="4"></textarea>
                    </div>

                    <div class="form-group col-md-12 text-left">
                        <button type="submit" class="btn btn-warning text-white">ثبت سوال</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="col-12 card p-4">
        <div class="row">
            <div class="col-md-12">
                <h4>لیست سوالات</h4>
                <div id="accordion">
                    @forelse (\App\Models\Question::get() as $key => $item)
                    <div class="card border">
                        <div class="card-header" id="headingOne{{ $key+=1 }}">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapseOne{{ $key }}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        {{ $key }} - {{$item->title}} <i class="fa fa-angle-down mr-2"></i>
                                    </button>

                                </h5>
                                <a href="{{ route('Admins.DeleteQuestion',$item->id) }}"
                                    class="btn btn-sm btn-danger">حذف</a>
                            </div>
                        </div>
                        <div id="collapseOne{{ $key }}" class="collapse " aria-labelledby="headingOne{{ $key }}"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p class="text-justify">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                       <div class="col-12 p-5">
                           <p>هیج سوالی ثبت نشده</p>
                       </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection