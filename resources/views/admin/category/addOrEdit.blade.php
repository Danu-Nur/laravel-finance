@extends('admin.layouts.index')
@section('content')
    <div class="card card-flush h-lg-100" id="kt_contacts_main">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_chat_contacts_header">
            <!--begin::Card title-->
            <div class="card-title">
                <i class="ki-duotone ki-bank fs-1 me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <h2>Add New {{ $pageTitle }}</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            @if (isset($category))
                <form id="kt_ecommerce_settings_general_form" class="form"
                    action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('category.store') }}"
                        method="POST" enctype="multipart/form-data">
            @endif
            @csrf

            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Type</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the Bank name.">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Select2-->
                <select class="form-control form-control-solid form-select mb-2" data-control="select2"
                    data-placeholder="Select an option" data-allow-clear="true" name="type_id">
                    <option></option>
                    @foreach ($type as $items)
                        <option value="{{ $items->id }}" {{ isset($category) ? ($category->type_id == $items->id ? 'selected' : '' ) : '' }}>{{ $items->name }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control form-control-solid" name="name"
                    value="{{ isset($category) ? $category->name : '' }}" /> --}}
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Category Name</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter Bank Type.">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" name="name"
                    value="{{ isset($category) ? $category->name : '' }}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
