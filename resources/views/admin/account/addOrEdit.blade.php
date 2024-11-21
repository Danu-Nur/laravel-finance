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
                <h2>Add New Accounts</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            @if (isset($account))
                <form id="kt_ecommerce_settings_general_form" class="form"
                    action="{{ route('account.update', $account->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('account.store') }}"
                        method="POST" enctype="multipart/form-data">
            @endif
            @csrf

            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Bank</span>
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
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="bank_id">
                    <option></option>
                    @foreach ($bank as $items)
                        <option value="{{ $items->id }}" {{ isset($account) ? ($account->bank_id == $items->id ? 'selected' : '' ) : '' }}>{{ $items->name }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control form-control-solid" name="name"
                    value="{{ isset($account) ? $account->name : '' }}" /> --}}
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Account Name</span>
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
                <input type="text" class="form-control form-control-solid" name="account_name"
                    value="{{ isset($account) ? $account->account_name : '' }}" />
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Status Account</span>
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
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="status">
                    <option></option>
                        <option value="active" {{ isset($account) ? ($account->status == 'active' ? 'selected' : '' ) : '' }}>Active</option>
                        <option value="inactive" {{ isset($account) ? ($account->status == 'inactive' ? 'selected' : '' ) : '' }}>Inactive</option>
                </select>
                {{-- <input type="text" class="form-control form-control-solid" name="name"
                    value="{{ isset($account) ? $account->name : '' }}" /> --}}
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <a href="{{ route('account.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
