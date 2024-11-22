@extends('admin.layouts.index')
@section('title')
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column py-1">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center my-1">
                <span class="text-gray-900 fw-bold fs-1">List {{ $pageTitle }}</span>
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
@endsection
@section('content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-order-filter="search"
                        class="form-control form-control-solid w-250px ps-12" placeholder="Search Data Bank" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Add product-->
                <a href="{{ route('category.create') }}" class="btn btn-primary">Add {{ $pageTitle }}</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                <thead>
                    <tr class="text-center text-gray-800 fw-bold fs-7 text-uppercase gs-0">
                        <th class="text-center min-w-100px">ID</th>
                        <th class="text-center min-w-100px">Type</th>
                        <th class="text-center min-w-100px">Category</th>
                        <th class="text-center min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($category as $data)
                        <tr>
                            <td class="text-center pe-0">
                                <span class="fw-bold">{{ $data->id }}</span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold">{{ $data->type->name }}</span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold">{{ $data->name }}</span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('category.show', $data->id) }}" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('category.edit', $data->id) }}" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <div class="menu-item px-3">
                                        <a href="javascript:void(0);" class="menu-link px-3"
                                            data-kt-ecommerce-order-filter="delete_row"
                                            onclick="event.preventDefault(); deleteAccount('{{ route('category.destroy', $data->id) }}');">
                                            Delete
                                        </a>
                                    </div>
                                    <form id="delete-account-form" action="" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
@endsection
