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
            @if (isset($transaction))
                <form id="kt_ecommerce_settings_general_form" class="form"
                    action="{{ route('transaction.update', $transaction->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('transaction.store') }}"
                        method="POST" enctype="multipart/form-data">
            @endif
            @csrf

            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Account</span>
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
                    data-placeholder="Select an option" data-allow-clear="true" name="account_id">
                    <option></option>
                    @foreach ($account as $items)
                        <option value="{{ $items->id }}"
                            {{ isset($transaction) && $transaction->account_id == $items->id ? 'selected' : '' }}>
                            {{ $items->account_name }}
                        </option>
                    @endforeach
                </select>

                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Category</span>
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
                    data-placeholder="Select an option" data-allow-clear="true" name="category_id"
                    onchange="updateTypeCategory(this)">
                    <option></option>
                    @foreach ($category as $items)
                        <option value="{{ $items->id }}" data-type-category="{{ $items->type_id }}"
                            {{ isset($transaction) && $transaction->category_id == $items->id ? 'selected' : '' }}>
                            {{ $items->name }}
                        </option>
                    @endforeach
                </select>

                <input type="text" class="form-control form-control-solid" name="type_id" id="type_id"
                    value="{{ isset($transaction) ? $transaction->type_id : '' }}" />

                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Amount</span>
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
                <input type="text" class="form-control form-control-solid" name="amount"
                    value="{{ isset($transaction) ? $transaction->account_name : '' }}" />
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Description</span>
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
                <input type="text" class="form-control form-control-solid" name="description"
                    value="{{ isset($transaction) ? $transaction->account_name : '' }}" />
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="required">Date</span>
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
                <input type="date" class="form-control form-control-solid" name="date"
                    value="{{ isset($transaction) ? $transaction->account_name : '' }}" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <a href="{{ route('transaction.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
@section('script')
    <script>
        function updateTypeCategory(selectElement) {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const typeCategory = selectedOption.getAttribute('data-type-category');
            document.getElementById('type_id').value = typeCategory || '';
        }
    </script>
@endsection
