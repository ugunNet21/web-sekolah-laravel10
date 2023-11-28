<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.admin.style')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('includes.admin.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.admin.navbar')
                @yield('content')
            </div>
            <!-- End of Main Content -->
            @include('includes.admin.footer')
        </div>
        <!-- End of Content Wrapper -->

        @include('includes.admin.script')
</body>

</html>
