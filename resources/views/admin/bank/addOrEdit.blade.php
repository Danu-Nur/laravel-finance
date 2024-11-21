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
                <h2>Add New Bank</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            @if (isset($bank))
                <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('bank.update', $bank->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('bank.store') }}"
                        method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            <!--begin::Input group-->
            <div class="mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold mb-3">
                    <span>Image</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Image input wrapper-->
                <div class="mt-1">
                    <!--begin::Image placeholder-->
                    <style>
                        .image-input-placeholder {
                            background-image: url('{{ isset($bank) && $bank->image ? asset($pathImg . $bank->image) : asset('/assets/media/svg/files/blank-image.svg') }}');
                        }

                        [data-bs-theme="dark"] .image-input-placeholder {
                            background-image: url('{{ isset($bank) && $bank->image ? asset($pathImg . $bank->image) : asset('/assets/media/svg/files/blank-image.svg') }}');
                        }
                    </style>
                    <!--end::Image placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty"
                        data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-100px h-100px" style="background-image: url('');"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Edit-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                </div>
                <!--end::Image input wrapper-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Name</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the Bank name.">
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
                    value="{{ isset($bank) ? $bank->name : '' }}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Type</span>
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
                <input type="text" class="form-control form-control-solid" name="type"
                    value="{{ isset($bank) ? $bank->type : '' }}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <a href="{{ route('bank.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
