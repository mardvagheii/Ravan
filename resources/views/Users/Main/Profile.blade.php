@extends('layout.Users.template')
@section('title', 'پروفایل')
@section('content')
    @php
    $settings = \App\Models\Settings::first();
    // dd(auth()->User(),$settings);
    @endphp
    <div class="container-fluid">
        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>پروفایل</h3>

            </div>

        </div>

        @php
        $user = \App\User::get();
        @endphp
        <div class="row">
            <div class="col-md-8 m-auto">

                @if ($settings->verify_email == 'on')
                    @if (auth()->User()->verify_email != 'ok')
                        @include('Users.Main.verifyemail')
                    @else
                        @include('Users.settings.Profile')
                    @endif
                @else
                    @include('Users.settings.Profile')
                @endif
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script>
        //  Form Validation
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);

    </script>
@endsection
