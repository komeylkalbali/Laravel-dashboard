<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admindek | Admin Template</title>

    @include('dashboard.layouts.header')

</head>
<body>

    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="pcoded" id="pcoded">
        <div class="pcoded-overlay-box">
        </div>
        <div class="pcoded-container navbar-wrapper">

            @include('dashboard.layouts.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('dashboard.layouts.sidebar')

                    @yield('content')

                </div>
            </div>
        </div>
    </div>


    @include('dashboard.layouts.script')
    @yield('script')
</body>
</html>
