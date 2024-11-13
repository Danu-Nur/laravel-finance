<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    @include('admin.layouts.head')
    @yield('style')
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled">
    <!--begin::Theme mode setup on page load-->
    @include('admin.layouts.theme')
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">
            <!--begin::Header-->
            @include('admin.layouts.header')
            <!--end::Header-->
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-fluid">
                <!--begin::Aside-->
                @include('admin.layouts.aside')
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                    <!--begin::Content-->
                    <div class="content flex-column-fluid" id="kt_content">
                        <!--begin::Post-->
                        @yield('title')
                        <div class="post" id="kt_post">
                            @yield('content')
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    @include('admin.layouts.footer')
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    {{-- @dump(json_encode($amountTransactionExpense))
    @dump(json_encode($dateTransactionExpense)) --}}
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    @include('admin.layouts.script')
    @yield('script')

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
