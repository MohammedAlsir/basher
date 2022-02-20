<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
<body class="page-md login">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="../../assets/admin/layout/img/logo-big.png" alt="" />
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="form-title">تسجيل الدخول </h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                    Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني </label>
                <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الالكتروني " autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">الرقم السري</label>

                <input id="password" type="password" placeholder="الرقم السري" class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase">تسجيل دخول </button>

            </div>
        </form>

    </div>



</body>
</html>





