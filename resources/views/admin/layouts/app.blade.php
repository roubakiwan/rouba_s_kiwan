<!doctype html>
<html class="no-js" lang="en">

@include('admin.layouts.partials.meta')

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include('admin.layouts.partials.sidebar')
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    @include('admin.layouts.base.header')
    @yield('content')
    @include('admin.layouts.base.footer')
</div>
@include('admin.layouts.partials.script')
</body>

</html>
