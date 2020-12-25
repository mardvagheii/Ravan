<form class="" action="{{ route('Users.Profile.Update') }}" method="post" novalidate>
    @csrf
    @method('put')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title d-flex justify-content-between align-items-center">
                اطلاعات
            </h5>

            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">نام و نام خانوادگي <span class="text-danger">*</span>
                </div>
                <div class="col-6 col-sm-8">
                    <input class="form-control" name="fullname" type="text" value="{{ auth()->User()->fullname }}"
                        placeholder="نام و نام خانوادگي" required>
                    <span class="text-danger mt-1 d-block">
                        @error('fullname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">نام كاربري <span class="text-danger">*</span>
                </div>
                <div class="col-6 col-sm-8">
                    <input class="form-control" name="username" type="text" value="{{ auth()->User()->username }}"
                        placeholder="نام كاربري" required>
                    <span class="text-danger mt-1 d-block">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">شماره موبايل <span class="text-danger">*</span>
                </div>
                <div class="col-6 col-sm-8">
                    <input class="form-control" disabled name="mobile" type="text" value="{{ auth()->User()->mobile }}"
                        placeholder="شماره موبايل">
                </div>
            </div>


            <div class="row form-group ">
                <div class="col-6 col-sm-4 text-muted">ايميل <span class="text-danger">*</span></div>
                <div class="col-6 col-sm-8">
                    <input class="form-control emailuser" name="email" type="email" @if (auth()->User()->verify_email == 'ok')
                    disabled
                    @endif
                    value="{{ auth()->User()->email }}" placeholder="ايميل" required>
                    <span class="text-danger mt-1 d-block">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">رمز عبور جديد</div>
                <div class="col-6 col-sm-8">
                    <input class="form-control" id="validationTooltip01" name="password" type="password"
                        placeholder="رمز عبور" required>
                    <span class="text-danger mt-1 d-block">
                        @error('password')
                            {{ $message . '!' }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">تكرار رمز عبور </div>
                <div class="col-6 col-sm-8"> <input class="form-control" id="validationTooltip02"
                        name="password_confirmation" type="password" placeholder="تكرار رمز عبور" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-6 col-sm-4 text-muted">بيوگرافي</div>
                <div class="col-6 col-sm-8">
                    <textarea class="form-control" name="bio" type="text" placeholder="بيوگرافي"
                        rows="5">{{ auth()->User()->bio }}</textarea>
                </div>
            </div>

            <button class="btn btn-success offset-sm-4 offset-6">ويرايش</button>

        </div>
    </div>

</form>
