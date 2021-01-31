<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body id="page-top">
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layout.top-navbar')
            <div class="container-fluid">

                @yield('admin-content')

            </div>
        </div>
    </div>
</div>
@include('layout.admin-footer')
</body>
</html>
