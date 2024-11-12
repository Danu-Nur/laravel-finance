@extends('admin.layouts.index')
@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-5 mb-xl-5">
    <!--begin::Col-->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-5">
        <!--begin::Card widget 4-->
        <div class="card card-flush h-md-50 mb-5 mb-xl-5">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <div class="card-title d-flex flex-column">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span
                            class="fs-2 fw-bold text-gray-900 me-2 lh-1 ls-n2">Balance</span>
                        <!--end::Amount-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                <!--begin::Chart-->
                <div class="d-flex flex-center me-5 pt-2">
                    {{-- <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div> --}}
                    <img src="{{ asset('image/icon/wallet.png') }}" class="h-100px mb-3"
                        alt="" />
                </div>
                <!--end::Chart-->
                <!--begin::Labels-->
                <div class="d-flex flex-column content-justify-center w-100">
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center">
                        <!--begin::Label-->
                        <div class="text-gray-500 flex-grow-1 me-4"></div>
                        <!--end::Label-->
                        <!--begin::Stats-->
                        <div class="fw-bolder text-gray-800 text-xxl-end fs-3">
                            Rp. {{ number_format($balance, 0, '', '.') }}
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Labels-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 4-->
        <!--begin::Card widget 5-->
        <div class="card card-flush h-md-50 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <div class="card-title d-flex flex-column">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-gray-900 me-2 lh-1 ls-n2">Income
                            (+)</span>
                        <!--end::Amount-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                <!--begin::Chart-->
                <div class="d-flex flex-center me-5 pt-2">
                    {{-- <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div> --}}
                    <img src="{{ asset('image/icon/indonesian-rupiah.png') }}"
                        class="h-100px mb-3" alt="" />
                </div>
                <!--end::Chart-->
                <!--begin::Labels-->
                <div class="d-flex flex-column content-justify-center w-100">
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center">
                        <!--begin::Label-->
                        <div class="text-gray-500 flex-grow-1 me-4"></div>
                        <!--end::Label-->
                        <!--begin::Stats-->
                        <div class="fw-bolder text-gray-800 text-xxl-end fs-3">
                            Rp. {{ number_format($sumTransactionIncome, 0, '', '.') }}
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Labels-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 5-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-5">
        <!--begin::Card widget 6-->
        <div class="card card-flush h-md-50 mb-5 mb-xl-5">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <div class="card-title d-flex flex-column">
                    <!--begin::Amount-->
                    <span class="fs-2 fw-bold text-gray-900 me-2 lh-1 ls-n2">My
                        Assets</span>
                    <!--end::Amount-->
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                <!--begin::Chart-->
                <div class="d-flex flex-center me-5 pt-2">
                    {{-- <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div> --}}
                    <img src="{{ asset('image/icon/assets.png') }}" class="h-100px mb-3"
                        alt="" />
                </div>
                <!--end::Chart-->
                <!--begin::Labels-->
                <div class="d-flex flex-column content-justify-center w-100">
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center">
                        <!--begin::Label-->
                        <div class="text-gray-500 flex-grow-1 me-4"></div>
                        <!--end::Label-->
                        <!--begin::Stats-->
                        <div class="fw-bolder text-gray-800 text-xxl-end fs-3">
                            Rp. {{ number_format($sumAsset, 0, '', '.') }}
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Labels-->
            </div>
            <!--end::Card body-->

        </div>
        <!--end::Card widget 6-->
        <!--begin::Card widget 7-->
        <div class="card card-flush h-md-50 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <div class="card-title d-flex flex-column">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-gray-900 me-2 lh-1 ls-n2">Expense
                            (-)</span>
                        <!--end::Amount-->
                    </div>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                <!--begin::Chart-->
                <div class="d-flex flex-center me-5 pt-2">
                    {{-- <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div> --}}
                    <img src="{{ asset('image/icon/flying-money.png') }}"
                        class="h-100px mb-3" alt="" />
                </div>
                <!--end::Chart-->
                <!--begin::Labels-->
                <div class="d-flex flex-column content-justify-center w-100">
                    <!--begin::Label-->
                    <div class="d-flex fs-6 fw-semibold align-items-center">
                        <!--begin::Label-->
                        <div class="text-gray-500 flex-grow-1 me-4"></div>
                        <!--end::Label-->
                        <!--begin::Stats-->
                        <div class="fw-bolder text-gray-800 text-xxl-end fs-3">
                            Rp. {{ number_format($sumTransactionExpense, 0, '', '.') }}
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Labels-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 7-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-12 col-xl-12 col-xxl-3 mb-5 mb-xl-0">
        <!--begin::Chart widget 3-->
        <div class="card card-flush overflow-hidden h-md-100">
            <!--begin::Header-->
            <div class="card-header py-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Sales This Months</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all
                        channels</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button
                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                        data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-dots-square fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                Quick Actions</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Ticket</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Customer</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                            data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Admin
                                        Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Staff
                                        Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Member
                                        Group</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary btn-sm px-4"
                                    href="#">Generate Reports</a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                    <!--end::Menu-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                <!--begin::Statistics-->
                <div class="px-9 mb-5">
                    <!--begin::Statistics-->
                    <div class="d-flex mb-2">
                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                        <span
                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Description-->
                    <span class="fs-6 fw-semibold text-gray-500">Another $48,346 to
                        Goal</span>
                    <!--end::Description-->
                </div>
                <!--end::Statistics-->
                <!--begin::Chart-->
                {{-- <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div> --}}
                <div class="mixed-widget-4-chart" data-kt-chart-color="success"
                    style="height: 300px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Chart widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-12 col-xl-12 col-xxl-3 mb-5 mb-xl-0">
        <!--begin::Mixed Widget 1-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Header-->
                    <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                            <div class="ms-1">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                            <i class="ki-duotone ki-information fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Balance-->
                        <div class="d-flex text-center flex-column text-white pt-8">
                            <span class="fw-semibold fs-7">You Balance</span>
                            <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                        </div>
                        <!--end::Balance-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Items-->
                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -80px">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-compass fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                    <div class="text-gray-500 fw-semibold fs-7">100 Regions</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-element-11 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                    <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-element-11 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                    <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
    </div>
    <!--end::Col-->
</div>
<div class="row g-5 g-xl-5 mb-5 mb-xl-5">
    <!--begin::Col-->

    <div class="col-xxl-12">
        <div class="card-header my-2">
            <div class="card-title d-flex justify-content-between fs-3">
                <span class="text-start">My Accounts</span>
                <span class="text-end">See All</span>

            </div>
        </div>
        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-5">
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            {{-- BCA --}}
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_655_2157)">
                                    <rect x="0.437378" y="0.437515" width="91.125"
                                        height="91.125" rx="6.75" fill="white" />
                                    <path
                                        d="M22.1959 51.0886C22.1959 50.2455 22.2051 47.9918 22.1843 47.7141C22.2024 44.3606 19.7641 41.995 18.2238 42.1794C17.1579 42.2719 16.2646 42.7065 15.7849 43.9569C15.3404 45.1221 15.7378 46.6721 17.2158 47.0357C18.7963 47.4263 19.7191 47.7513 20.387 48.2098C21.2054 48.7711 21.8734 49.8434 21.8912 51.0899"
                                        fill="#0060AF" />
                                    <path
                                        d="M22.8268 56.1859C20.0401 56.1859 17.1761 55.4995 14.316 54.142L14.2458 54.1075L14.2123 54.036C12.9288 51.3267 12.25 48.3634 12.25 45.4642C12.25 42.5693 12.9009 39.7328 14.1854 37.0272L14.2206 36.9553L14.2922 36.9194C16.9379 35.6661 19.7841 35.0312 22.7543 35.0312C25.5212 35.0312 28.4761 35.738 31.2983 37.0787L31.3708 37.1109L31.4041 37.1842C32.7122 39.9434 33.402 42.9059 33.402 45.7571C33.402 48.5972 32.7397 51.4362 31.4301 54.1937L31.3955 54.2662L31.3227 54.2997C28.7174 55.5331 25.7792 56.1859 22.8268 56.1859ZM14.5807 53.7705C17.3592 55.0775 20.1303 55.7375 22.8268 55.7375C25.686 55.7375 28.5295 55.1126 31.0606 53.9279C32.318 51.2558 32.9554 48.5057 32.9554 45.7571C32.9554 42.9975 32.2902 40.1269 31.0319 37.4489C28.293 36.1614 25.4327 35.4786 22.7543 35.4786C19.8787 35.4786 17.1225 36.0885 14.5567 37.2917C13.3251 39.9142 12.6982 42.6622 12.6982 45.4642C12.6982 48.2715 13.3497 51.1432 14.5807 53.7705Z"
                                        fill="#0060AF" />
                                    <path
                                        d="M21.5354 51.0902C21.5406 50.0094 20.9374 49.0537 20.1489 48.5401C19.4496 48.0862 18.5107 47.7879 16.9961 47.4039C16.5279 47.2841 16.0381 47.018 15.8865 46.679C15.4854 47.0831 15.4126 47.9916 15.4831 48.5226C15.5651 49.1371 16.2832 50.1497 17.3643 50.1894C18.0246 50.2159 18.8593 50.0473 19.2596 49.9623C19.9502 49.8131 21.0428 50.2457 21.2168 51.0888"
                                        fill="#0060AF" />
                                    <path
                                        d="M22.7543 36.9527C20.9212 36.9527 19.3377 38.1616 19.3434 40.2535C19.3491 42.0127 20.7638 42.9544 21.2687 43.6271C22.0315 44.6407 22.4444 45.8405 22.4873 47.6763C22.5207 49.1374 22.519 50.5801 22.5264 51.0914H22.9311C22.9241 50.5565 22.9057 49.0248 22.9267 47.6311C22.9542 45.7947 23.3819 44.6407 24.1452 43.6271C24.6544 42.9544 26.0679 42.0127 26.071 40.2535C26.0779 38.1616 24.4953 36.9527 22.6637 36.9527"
                                        fill="#0060AF" />
                                    <path
                                        d="M23.2198 51.0886C23.2198 50.2455 23.2102 47.9918 23.2306 47.7141C23.2127 44.3606 25.6494 41.995 27.1912 42.1794C28.2571 42.2719 29.1494 42.7065 29.6304 43.9569C30.0746 45.1221 29.6748 46.6721 28.1985 47.0357C26.6173 47.4263 25.6956 47.7513 25.026 48.2098C24.2086 48.7711 23.5873 49.8434 23.5682 51.0899"
                                        fill="#0060AF" />
                                    <path
                                        d="M23.8797 51.0902C23.874 50.0094 24.477 49.0537 25.2631 48.5401C25.9653 48.0862 26.9053 47.7879 28.4187 47.4039C28.8878 47.2841 29.377 47.018 29.5259 46.679C29.9289 47.0831 30.0016 47.9916 29.931 48.5226C29.8473 49.1371 29.1312 50.1497 28.0519 50.1894C27.3919 50.2159 26.5527 50.0473 26.1541 49.9623C25.4662 49.8131 24.3706 50.2457 24.1959 51.0888"
                                        fill="#0060AF" />
                                    <path
                                        d="M24.4451 54.579L24.2106 52.8674L24.7768 52.7816C24.9147 52.7627 25.0825 52.7867 25.1496 52.8731C25.2238 52.9633 25.2465 53.0379 25.2608 53.1561C25.2822 53.3024 25.2399 53.4716 25.0751 53.5559V53.561C25.2591 53.561 25.3703 53.6932 25.4025 53.9163C25.4073 53.9634 25.4212 54.0773 25.4073 54.1722C25.3699 54.3982 25.2351 54.4709 25.0076 54.5028L24.4451 54.579ZM24.8096 54.2726C24.8767 54.263 24.9448 54.2594 24.998 54.2255C25.0795 54.1723 25.072 54.0584 25.0608 53.9739C25.0324 53.7882 24.9839 53.7176 24.7869 53.7468L24.6631 53.7659L24.7415 54.2821L24.8096 54.2726ZM24.691 53.4817C24.7659 53.4695 24.8676 53.4605 24.9099 53.3894C24.932 53.3419 24.9605 53.3041 24.9418 53.1985C24.9187 53.0732 24.8771 52.9956 24.7181 53.0257L24.5699 53.0495L24.6282 53.4882"
                                        fill="#0060AF" />
                                    <path
                                        d="M26.898 53.5496C26.9024 53.5814 26.9076 53.6169 26.9095 53.6487C26.9552 53.9609 26.898 54.2194 26.5471 54.2905C26.0284 54.3904 25.929 54.0681 25.8376 53.6169L25.789 53.3728C25.7175 52.941 25.6868 52.6141 26.1926 52.5134C26.4777 52.4614 26.6661 52.5748 26.7445 52.8586C26.7567 52.9009 26.7719 52.9429 26.7777 52.9854L26.4674 53.0495C26.4315 52.9429 26.384 52.7524 26.2444 52.7684C25.9938 52.7985 26.0766 53.1104 26.1024 53.2406L26.1956 53.7092C26.2236 53.8509 26.2793 54.0773 26.4962 54.0336C26.6722 53.9983 26.5955 53.7241 26.5799 53.6118"
                                        fill="#0060AF" />
                                    <path
                                        d="M27.3959 54.0676L27.2886 52.2963L27.7055 52.1691L28.5795 53.7097L28.2513 53.8079L28.0442 53.4164L27.6797 53.5258L27.7268 53.971L27.3959 54.0676ZM27.6492 53.2398L27.9126 53.1635L27.5628 52.4468"
                                        fill="#0060AF" />
                                    <path
                                        d="M17.0988 52.7279C17.2292 52.3102 17.3461 52.0028 17.8439 52.1393C18.1103 52.2137 18.2755 52.3312 18.2677 52.6407C18.2664 52.7095 18.2436 52.7797 18.2288 52.8478L17.9188 52.7622C17.9595 52.5913 17.9852 52.4557 17.7747 52.3909C17.5313 52.3241 17.472 52.6191 17.4384 52.7465L17.3124 53.2109C17.2723 53.3488 17.2243 53.5767 17.4384 53.6355C17.6154 53.6831 17.7228 53.5094 17.7869 53.2557L17.57 53.1983L17.645 52.9296L18.1548 53.0936L17.9127 53.9887L17.6782 53.925L17.731 53.7358H17.7243C17.6164 53.8904 17.4846 53.9067 17.3692 53.8845C16.8594 53.7466 16.9126 53.4135 17.0343 52.9683"
                                        fill="#0060AF" />
                                    <path
                                        d="M18.9963 53.4845L18.8428 54.2127L18.4972 54.1379L18.8655 52.4377L19.4546 52.5708C19.7994 52.6452 19.9035 52.7987 19.8547 53.1148C19.8268 53.2961 19.7374 53.4916 19.519 53.4758L19.5167 53.4728C19.7014 53.5375 19.717 53.6305 19.6848 53.7915C19.6708 53.8599 19.5749 54.2755 19.6411 54.3426L19.6434 54.3936L19.2858 54.3003C19.2709 54.1851 19.3215 53.978 19.3415 53.8634C19.3617 53.7619 19.3939 53.6189 19.2909 53.5651C19.2103 53.5222 19.1803 53.5243 19.0892 53.5033L18.9963 53.4845ZM19.0552 53.2212L19.2879 53.2839C19.4292 53.3043 19.5078 53.2311 19.5356 53.0604C19.5608 52.9038 19.5282 52.8426 19.4014 52.8123L19.1519 52.7617"
                                        fill="#0060AF" />
                                    <path
                                        d="M21.2127 52.8172L21.5545 52.8569L21.4073 54.0521C21.3357 54.431 21.1893 54.5967 20.7724 54.5449C20.3482 54.4913 20.2475 54.2981 20.2733 53.9161L20.4215 52.7218L20.7659 52.7613L20.6181 53.9289C20.6024 54.0557 20.5731 54.2435 20.7987 54.2662C20.9988 54.2815 21.0441 54.1489 21.0666 53.9842"
                                        fill="#0060AF" />
                                    <path
                                        d="M21.9313 54.61L22.0341 52.9008L22.6907 52.9292C23.001 52.9445 23.0822 53.1979 23.0725 53.4397C23.0635 53.5868 23.0176 53.751 22.8894 53.8401C22.7843 53.9158 22.6493 53.9337 22.524 53.9276L22.31 53.9157L22.2673 54.632L21.9313 54.61ZM22.3198 53.6551L22.4937 53.6648C22.635 53.6699 22.7286 53.6141 22.7409 53.4066C22.7477 53.2073 22.6724 53.1735 22.4893 53.1655L22.3514 53.1608"
                                        fill="#0060AF" />
                                    <path
                                        d="M68.2428 38.6043L65.6331 43.3411C64.648 42.5412 63.4452 41.9525 61.9105 41.9525C58.2788 41.9525 56.8036 44.6597 56.8036 46.5666C56.8036 47.9821 57.7305 50.0706 60.9619 50.0706C62.3183 50.0706 64.2466 49.1269 64.8016 48.6976L62.2204 54.193C60.9901 54.4385 60.586 54.5907 59.5445 54.6229C53.7608 54.7955 51.4236 51.2425 51.4253 47.6119C51.4291 42.8124 55.6963 36.9754 62.7703 36.9754C63.2038 36.9754 63.7339 37.1253 64.1873 37.2914L64.6454 36.7056"
                                        fill="#0060AF" />
                                    <path
                                        d="M79.0109 36.8547L79.7499 54.0708H74.2502L74.2469 51.1182H70.4967L69.2624 54.0708H63.2979L69.5336 41.777L68.1275 41.7679L70.7992 36.8547H79.0109ZM74.2112 42.1215L72.0909 47.129H74.2751"
                                        fill="#0060AF" />
                                    <path
                                        d="M47.9532 36.8549C50.6768 36.8702 52.2158 38.3486 52.2158 40.4842C52.2158 42.4529 50.5927 44.1957 48.8108 45.0968C50.6453 45.7711 50.804 47.4265 50.804 48.5977C50.804 51.4271 47.9648 54.071 44.2743 54.071H36.2258L39.3654 41.9485L38.0758 41.941L40.712 36.8549C40.712 36.8549 45.7384 36.8396 47.9532 36.8549ZM45.2811 43.835C45.8445 43.835 46.8392 43.6924 47.0879 42.602C47.3605 41.4185 46.4269 41.3866 45.9791 41.3866L44.379 41.3796L43.821 43.8351L45.2811 43.835ZM43.0189 46.8773L42.2821 49.7067H44.1662C44.9075 49.7067 45.9177 49.3388 46.1652 48.4181C46.4097 47.4946 45.7035 46.8773 44.9649 46.8773"
                                        fill="#0060AF" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_655_2157">
                                        <rect x="0.4375" y="0.4375" width="91.125"
                                            height="91.125" rx="6.75"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            {{-- <svg width="72" height="24" viewBox="0 0 72 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M52.3973 1.01093L51.5588 5.99054C49.0448 4.56717 43.3231 4.23041 43.3231 6.85138C43.3231 7.89285 44.6177 8.60913 46.178 9.47241C48.5444 10.7817 51.5221 12.4291 51.5221 16.062C51.5221 21.8665 45.4731 24 41.4645 24C37.4558 24 34.8325 22.6901 34.8325 22.6901L35.7065 17.4848C38.1115 19.4688 45.4001 20.032 45.4001 16.8863C45.4001 15.5645 43.9656 14.785 42.3019 13.8811C40.0061 12.6336 37.2742 11.1491 37.2742 7.67563C37.2742 1.30988 44.1978 0 47.1132 0C49.8102 0 52.3973 1.01093 52.3973 1.01093ZM66.6055 23.6006H72L67.2966 0.414276H62.5732C60.3923 0.414276 59.8612 2.14215 59.8612 2.14215L51.0996 23.6006H57.2234L58.4481 20.1566H65.9167L66.6055 23.6006ZM60.1406 15.399L63.2275 6.72235L64.9642 15.399H60.1406ZM14.7942 16.3622L20.3951 0.414917H26.7181L17.371 23.6012H11.2498L6.14551 3.45825C2.83215 1.41281 0 0.807495 0 0.807495L0.108643 0.414917H9.36816C11.9161 0.414917 12.1552 2.50314 12.1552 2.50314L14.1313 12.9281L14.132 12.9294L14.7942 16.3622ZM25.3376 23.6006H31.2126L34.8851 0.414917H29.0095L25.3376 23.6006Z"
                                    fill="white" />
                            </svg> --}}

                            {{-- <div class="credit-card-contactless">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46"
                                    height="56">
                                    <path fill="none" stroke="#f9f9f9"
                                        stroke-width="6" stroke-linecap="round" d="m35,3a50,50 0 0,1 0,50M24,8.5a39,39 0 0,1 0,39M13.5,13.55a28.2,28.5
                            0 0,1 0,28.5M3,19a18,17 0 0,1 0,18" />
                                </svg>
                            </div> --}}
                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_655_1614)">
                                    <rect x="0.4375" y="0.4375" width="91.125"
                                        height="91.125" rx="6.75" fill="white" />
                                    <path
                                        d="M33.8804 33.344H16.1454C13.9949 33.344 12.25 35.1311 12.25 37.3384V54.8973C12.25 57.0843 13.9604 58.8602 16.087 58.8916L33.8677 58.8922C36.0182 58.8922 37.7672 57.1046 37.7672 54.8973L37.7758 37.3384C37.7758 35.1311 36.0304 33.344 33.8804 33.344ZM18.2532 56.8452L17.2853 56.8569C16.1134 56.8569 15.1674 55.8921 15.1674 54.7065L15.1602 54.5354V38.3205L15.1674 37.4465C15.2146 36.2994 16.085 35.3727 17.227 35.3727H19.1927C20.9777 35.3727 22.4211 36.9232 22.4211 38.7493C22.4211 39.6563 22.0659 40.475 21.4913 41.0734L16.4753 46.161L21.1787 50.9522C21.7826 51.5785 22.1481 52.4002 22.1481 53.298C22.1481 55.2566 20.4077 56.8452 18.2532 56.8452ZM32.7131 56.8305L23.9433 56.828C23.9433 56.828 24.9573 54.6344 24.9573 53.2787C24.9573 51.6257 24.4046 50.1462 23.5392 49.1697L20.5412 46.1112L23.5986 42.9513C24.5137 42.0915 25.1177 40.5704 25.1177 38.8402C25.1177 37.4693 24.7391 36.2548 24.126 35.3727H26.2521C28.0356 35.3727 29.4805 36.9232 29.4805 38.7493C29.4805 39.6563 29.1268 40.475 28.5538 41.0734L23.6306 46.1092L33.8525 56.5336C33.5267 56.7376 33.1196 56.8305 32.7131 56.8305ZM34.8524 53.5746L27.526 46.1077L31.0148 42.563C31.7259 41.6723 32.1786 40.3349 32.1786 38.8402C32.1786 37.4612 31.7929 36.2147 31.1772 35.3331L32.7369 35.3818C33.9068 35.3818 34.8584 36.3436 34.8584 37.5328L34.8524 53.5746Z"
                                        fill="#00529C" />
                                    <path
                                        d="M53.4953 44.9181C53.6379 44.7755 53.8064 44.5917 54.0008 44.3669C54.1947 44.1421 54.3784 43.8766 54.552 43.5701C54.7256 43.2635 54.8738 42.9219 54.9961 42.5438C55.1189 42.1662 55.1804 41.7627 55.1804 41.3338C55.1804 40.4969 55.0372 39.7158 54.7515 38.9905C54.4652 38.2657 54.0262 37.6323 53.4339 37.0908C52.8416 36.5502 52.1016 36.1259 51.2129 35.8194C50.3247 35.5133 49.2878 35.3601 48.1037 35.3601H48.0712H44.6666H43.7805H40.2916V39.2651V52.784V56.8042H48.8696C50.1151 56.8042 51.2022 56.6357 52.1321 56.2987C53.0609 55.9617 53.8323 55.4973 54.4449 54.905C55.0575 54.3127 55.5118 53.6234 55.8082 52.8373C56.1041 52.0511 56.2523 51.2086 56.2523 50.3097C56.2523 49.1048 55.9767 48.0329 55.4255 47.0929C54.8738 46.1539 54.2302 45.4287 53.4953 44.9181ZM49.7025 39.2894C49.9913 39.3996 50.2323 39.5427 50.4206 39.7229C50.9084 40.1908 51.1525 40.7502 51.1525 41.4008C51.1525 41.9911 51.0505 42.4788 50.8475 42.8651C50.6439 43.2518 50.4404 43.5467 50.2374 43.7497H44.2743V39.0362H47.9809C48.6757 39.0362 49.2477 39.122 49.7025 39.2894ZM49.0838 47.4609C50.1633 47.4609 50.9632 47.7405 51.4839 48.2988C51.9737 48.8485 52.2204 49.4971 52.2204 50.2478C52.2204 51.0213 51.9407 51.6816 51.3814 52.2307C50.8216 52.7799 49.9019 53.055 48.6204 53.055H48.1418H44.2743V47.4609H49.0838Z"
                                        fill="#00529C" />
                                    <path
                                        d="M70.7955 47.568C71.4386 47.1289 71.975 46.6183 72.4039 46.0362C72.8328 45.454 73.149 44.811 73.3535 44.1065C73.5575 43.4015 73.6601 42.6819 73.6601 41.9464C73.6601 40.9867 73.5012 40.1035 73.185 39.2966C72.8678 38.4901 72.3932 37.7958 71.7603 37.2136C71.1269 36.6315 70.3357 36.1772 69.3861 35.8503C68.4364 35.524 67.3386 35.3601 66.0931 35.3601H65.981H57.7299H57.6527V56.8042H61.7125V48.8393H63.9762L69.5749 56.8042H74.3336L68.544 48.5638C69.4013 48.3394 70.1519 48.0075 70.7955 47.568ZM66.1236 39.0362C66.3789 39.0362 66.62 39.0529 66.8494 39.0819C67.5731 39.191 68.1644 39.4493 68.6202 39.8599C69.2404 40.4197 69.5505 41.1059 69.5505 41.919C69.5505 42.3266 69.484 42.723 69.3521 43.1092C69.2196 43.496 69.0115 43.8365 68.7268 44.1309C68.4415 44.4263 68.0756 44.6648 67.6284 44.848C67.1808 45.0313 66.6418 45.1226 66.0114 45.1226H61.7125V39.0362H66.1236Z"
                                        fill="#00529C" />
                                    <path
                                        d="M75.7673 35.3601V35.3661C75.7262 35.3651 75.6861 35.3601 75.645 35.3601H75.6105V35.3616V43.2219V48.8541V56.8042H79.75V35.3601H75.7673Z"
                                        fill="#00529C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_655_1614">
                                        <rect x="0.4375" y="0.4375" width="91.125"
                                            height="91.125" rx="6.75"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_655_2795)">
                                    <rect x="0.4375" y="0.4375" width="91.125"
                                        height="91.125" rx="6.75" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.25 42.7387L17.9445 49.9221L12.25 54.6408V42.7387Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.5419 54.6411L18.8267 51.0566L21.7882 54.6411H14.5419Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.25 38.8956L13.736 40.7754L19.8461 48.4104L21.826 46.8337C21.826 46.8337 20.1823 44.8987 19.0787 42.7393C16.9209 38.5175 18.4486 35.889 18.4486 35.889H12.25V38.8956Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.7169 49.5888L22.7333 47.9232C22.7333 47.9232 24.6591 50.4583 26.8921 51.0566C29.8183 51.8407 31.1139 49.9224 31.1139 49.9224V54.6411H24.6867L26.1359 53.388C26.1359 53.388 25.3798 53.8921 23.5305 52.6112C22.439 51.8552 20.7169 49.5888 20.7169 49.5888Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.9025 35.875C20.9025 35.875 20.2592 36.7513 20.7171 38.8953C21.2065 41.187 23.1529 43.6125 23.1484 43.5582C23.1484 43.5582 23.2735 41.1498 24.6869 39.7365C27.6994 36.7239 31.1141 38.5172 31.1141 38.5172V35.8887L20.9025 35.875Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.1139 41.6935C31.1139 41.6935 29.2088 40.0616 27.5524 40.0616C25.4336 40.0616 24.2771 41.8909 24.2771 43.2178C24.2771 45.1505 25.2048 46.2245 26.136 47.1556C27.4741 48.4937 29.102 49.9369 31.1139 48.7754C31.1139 46.5769 31.1139 41.6935 31.1139 41.6935Z"
                                        fill="#F15A23" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.8105 36.0719H57.3062C57.3062 36.0719 61.2888 42.1021 63.246 44.5935C65.2032 47.0849 67.31 49.9227 67.31 49.9227C67.31 49.9227 67.31 41.6934 67.31 37.4224C67.31 36.8825 65.8925 36.0719 65.8925 36.0719H71.0766C71.0766 36.0719 69.3756 36.7708 69.3756 37.4224C69.3756 42.7394 69.3756 55.6075 69.3756 55.6075C69.3756 55.6075 67.7434 54.7023 65.8925 52.5516C63.8129 50.1351 56.4152 40.379 56.4152 40.379C56.4152 40.379 56.4152 49.5891 56.4152 53.0154C56.4152 53.6625 57.8327 54.6414 57.8327 54.6414H52.8105C52.8105 54.6414 54.1876 53.6546 54.1876 53.0154C54.1876 48.4105 54.1876 41.6934 54.1876 37.4224C54.1876 36.8485 52.8105 36.0719 52.8105 36.0719Z"
                                        fill="#005E6A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M73.9801 36.0719H79.75C79.75 36.0719 78.2007 36.8058 78.2007 37.4224C78.2007 41.6934 78.2007 48.7753 78.2007 53.0154C78.2007 53.6892 79.75 54.6414 79.75 54.6414H73.9801C73.9801 54.6414 75.4226 53.6675 75.4226 53.0154C75.4226 47.9236 75.4226 41.6934 75.4226 37.4224C75.4226 36.8296 73.9801 36.0719 73.9801 36.0719Z"
                                        fill="#005E6A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M35.8351 36.0719C35.8351 36.0719 37.331 36.8178 37.331 37.4224C37.331 41.6934 37.331 47.9236 37.331 53.0154C37.331 53.6782 35.8351 54.6414 35.8351 54.6414C35.8351 54.6414 43.3081 54.6414 44.383 54.6414C44.9173 54.6414 50.9008 53.663 50.9008 49.0499C50.9008 44.4369 46.2529 44.0049 46.2529 44.0049C46.2529 44.0049 49.0844 43.2177 49.0844 40.0616C49.0844 36.6596 44.9173 36.0719 44.383 36.0719C43.2728 36.0719 35.8351 36.0719 35.8351 36.0719ZM40.3762 43.6992V37.8938C40.3762 37.8938 42.8539 37.8938 43.8488 37.8938C44.383 37.8938 46.2529 38.5176 46.2529 40.8319C46.2529 42.7394 44.383 43.6992 43.8488 43.6992C42.6376 43.6992 40.3762 43.6992 40.3762 43.6992ZM40.3762 45.2218C40.3762 45.2218 43.8488 45.2218 44.383 45.2218C44.9173 45.2218 48.0693 46.0406 48.0693 48.7753C48.0693 51.5635 44.9173 52.5516 44.383 52.5516C43.8488 52.5516 40.3762 52.5516 40.3762 52.5516V45.2218Z"
                                        fill="#005E6A" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_655_2795">
                                        <rect x="0.4375" y="0.4375" width="91.125"
                                            height="91.125" rx="6.75"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_655_1633)">
                                    <rect x="0.4375" y="1.28125" width="91.125"
                                        height="91.125" rx="6.75" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M61.946 36.6312C60.6466 37.4084 57.5817 39.2241 56.4376 39.9002C55.7403 40.2671 54.1254 40.4274 53.212 39.1552C53.1956 39.1322 51.9971 37.5854 51.9482 37.5271C51.9138 37.486 51.139 36.2989 49.4125 36.2618C49.1574 36.2555 47.8892 36.2485 46.6517 36.975C45.0068 37.9457 41.1814 40.2047 41.1814 40.2047C41.1814 40.2047 41.1803 40.2067 41.1784 40.2067C39.6059 41.136 38.3807 41.8596 38.3807 41.8596L39.8283 43.696C40.5055 44.5645 42.0325 45.2364 43.3568 44.4511C43.3568 44.4511 48.2501 41.5243 48.2681 41.5158C50.3843 40.3169 52.0172 40.3169 53.101 40.763C54.0738 41.1877 54.9202 42.2456 54.9202 42.2456C54.9202 42.2456 56.0262 43.6614 56.2213 43.9091C56.8507 44.7093 57.8923 44.3949 57.8923 44.3949C57.8923 44.3949 58.2783 44.3497 58.8602 43.9929C58.8602 43.9929 63.5999 41.1542 63.6029 41.1533C65.1079 40.2412 66.4883 40.0709 67.1937 40.138C69.4033 40.3454 70.0898 41.9399 71.0478 43.0522C71.612 43.7065 72.1211 44.078 72.8997 44.0592C73.4113 44.048 73.9892 43.7276 74.0744 43.6697L79.7501 40.2864C79.7501 40.2864 79.1678 39.3804 77.9751 37.9708C76.9077 36.7132 75.7739 37.2822 74.8699 37.7447C74.4901 37.9387 73.1141 38.8842 71.7508 39.5438C70.7794 40.0136 69.3841 39.8723 68.6194 38.8963C68.5737 38.837 67.3366 37.2899 67.2065 37.0996C66.7072 36.4536 65.733 35.875 64.4845 35.875C63.7253 35.875 62.8638 36.0889 61.946 36.6312Z"
                                        fill="url(#paint0_linear_655_1633)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.3212 49.8587C12.3212 48.8485 12.3034 48.0008 12.25 47.2449H14.1014L14.1882 48.5435H14.2401C14.6597 47.8573 15.4271 47.0457 16.8585 47.0457C17.9757 47.0457 18.8484 47.6963 19.2143 48.6695H19.2502C19.5474 48.1828 19.8954 47.8225 20.2965 47.5692C20.7682 47.227 21.3095 47.0457 22.0077 47.0457C23.4211 47.0457 24.8514 48.0371 24.8514 50.8501V56.0238H22.7573V51.1751C22.7573 49.715 22.2693 48.8485 21.2401 48.8485C20.5059 48.8485 19.9642 49.3903 19.7388 50.0216C19.6858 50.2373 19.6335 50.508 19.6335 50.7586V56.0238H17.5387V50.9399C17.5387 49.715 17.0682 48.8485 16.0731 48.8485C15.2702 48.8485 14.7298 49.4985 14.5373 50.1102C14.4495 50.3279 14.4142 50.5796 14.4142 50.8315V56.0238H12.3212V49.8587Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M33.0106 53.9152C33.0106 54.708 33.0455 55.4818 33.1328 56.0242H31.1949L31.0558 55.051H31.0028C30.4794 55.7367 29.5893 56.2227 28.4899 56.2227C26.779 56.2227 25.8196 54.9437 25.8196 53.6089C25.8196 51.3907 27.7213 50.2739 30.8631 50.2917V50.147C30.8631 49.5699 30.636 48.615 29.1352 48.615C28.2971 48.615 27.424 48.8856 26.8484 49.2636L26.429 47.8226C27.0585 47.4251 28.159 47.0461 29.5018 47.0461C32.2257 47.0461 33.0106 48.832 33.0106 50.7421V53.9152ZM30.9154 51.7341C29.3972 51.6977 27.949 52.0402 27.949 53.3744C27.949 54.2389 28.4899 54.6363 29.1708 54.6363C30.025 54.6363 30.6543 54.0592 30.8457 53.4284C30.8976 53.2662 30.9154 53.0852 30.9154 52.9416V51.7341Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.4948 49.8587C34.4948 48.8485 34.4756 48.0008 34.4247 47.2449H36.3081L36.4134 48.5608H36.465C36.832 47.8765 37.7569 47.0457 39.1704 47.0457C40.6544 47.0457 42.1902 48.0371 42.1902 50.8141V56.0238H40.0437V51.0671C40.0437 49.8043 39.59 48.8485 38.4204 48.8485C37.5652 48.8485 36.972 49.4796 36.7445 50.1469C36.6758 50.3457 36.6576 50.6167 36.6576 50.8674V56.0238H34.4948V49.8587Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M51.4976 43.7174V53.5536C51.4976 54.4548 51.5319 55.43 51.5669 56.0242H49.6469L49.561 54.6363H49.5254C49.019 55.6103 47.9877 56.2227 46.7498 56.2227C44.7261 56.2227 43.1199 54.4383 43.1199 51.7341C43.1021 48.7952 44.8823 47.0461 46.9241 47.0461C48.0931 47.0461 48.9317 47.5516 49.315 48.2011H49.3504V43.7174H51.4976ZM49.3504 50.9034C49.3504 50.725 49.3324 50.5077 49.2988 50.328C49.1065 49.4626 48.4254 48.7591 47.448 48.7591C46.0693 48.7591 45.3012 50.0217 45.3012 51.6622C45.3012 53.2662 46.0693 54.4383 47.4306 54.4383C48.3029 54.4383 49.0713 53.8255 49.2805 52.8703C49.3324 52.6711 49.3504 52.455 49.3504 52.2199V50.9034Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M53.0144 56.0238H55.1808V47.2453H53.0144V56.0238Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M56.6979 50.0749C56.6979 48.8856 56.6797 48.0371 56.6276 47.2447H58.4955L58.5638 48.9207H58.6362C59.0544 47.6768 60.0495 47.2447 60.9566 47.2447C61.1656 47.2447 61.2877 47.2077 61.4627 47.2447V49.1922C61.2877 49.1562 61.0961 49.1202 60.8343 49.1202C59.8047 49.1202 59.106 49.8046 58.9142 50.7955C58.8803 50.9939 58.845 51.2293 58.845 51.4828V56.0242H56.6979V50.0749Z"
                                        fill="#003A70" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M62.4576 56.0238H64.6208V47.2453H62.4576V56.0238Z"
                                        fill="#003A70" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_655_1633"
                                        x1="12.25" y1="56.2227" x2="79.7501"
                                        y2="56.2227" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFCA06" />
                                        <stop offset="0.330844" stop-color="#FBAA18" />
                                        <stop offset="0.694742" stop-color="#FFC907" />
                                        <stop offset="1" stop-color="#FAA619" />
                                    </linearGradient>
                                    <clipPath id="clip0_655_1633">
                                        <rect x="0.4375" y="0.4375" width="91.125"
                                            height="91.125" rx="6.75"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_655_2042)">
                                    <rect x="0.437378" y="0.4375" width="91.125"
                                        height="91.125" rx="6.75" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.1726 35.0312C16.7065 35.0312 12.275 39.4627 12.275 44.9179C12.2716 47.0032 12.9312 49.0356 14.1586 50.7215C14.5844 50.5183 15.0249 50.3472 15.4762 50.2096C14.322 48.7616 13.636 46.9214 13.636 44.9288C13.636 40.236 17.4578 36.4142 22.1507 36.4142C26.8435 36.4142 30.6653 40.2357 30.6653 44.9286C30.6653 47.9339 29.0975 50.5905 26.7238 52.1039C26.9525 52.1039 27.1813 52.1039 27.4208 52.0932C28.1938 52.0496 28.9234 51.7011 29.5441 51.4182C31.1118 49.6648 32.0699 47.4654 32.0699 44.9176C32.0699 39.4629 27.6385 35.0312 22.1726 35.0312Z"
                                        fill="#EA5F00" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.444 54.762C27.8887 54.9471 27.3444 55.0558 26.8219 55.0668C24.6115 55.1538 23.0218 54.4898 21.4974 53.8365C20.1361 53.2593 18.8622 52.715 17.2944 52.8021C15.8135 52.9218 14.7793 53.7495 14.7356 53.7819C14.4308 54.0216 14.3874 54.4679 14.6269 54.7729C14.8663 55.0778 15.3236 55.1321 15.6286 54.8927C15.6394 54.8927 16.3797 54.3047 17.4032 54.2284C18.6011 54.174 19.7009 54.6203 20.9528 55.1648C22.3792 55.7745 23.9689 56.4497 26.0922 56.5148C26.3536 56.5258 26.6148 56.5148 26.8872 56.5041C27.5515 56.4824 28.2372 56.3514 28.9232 56.123C29.1006 56.06 29.2465 55.9304 29.3299 55.7617C29.4132 55.5929 29.4275 55.3983 29.3697 55.2192C29.228 54.8273 28.8144 54.6313 28.444 54.762Z"
                                        fill="#2673DD" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M30.7197 51.5704C30.0447 52.0386 28.6837 52.8333 27.1266 52.888C25.145 52.975 23.8491 52.3978 22.4664 51.8098C21.0181 51.1785 19.5157 50.5252 17.2617 50.6232C15.1711 50.6993 13.3965 51.8972 12.5252 52.5939C12.4495 52.6542 12.3866 52.729 12.34 52.8139C12.2935 52.8988 12.2644 52.992 12.2542 53.0883C12.2441 53.1846 12.2533 53.2819 12.2811 53.3746C12.3089 53.4673 12.355 53.5536 12.4165 53.6283C12.4768 53.704 12.5516 53.7669 12.6365 53.8135C12.7214 53.86 12.8146 53.8891 12.9109 53.8993C13.0072 53.9094 13.1045 53.9003 13.1972 53.8724C13.2899 53.8446 13.3762 53.7986 13.4509 53.7371C14.1803 53.1491 15.65 52.1476 17.3161 52.0822C19.2433 52.0059 20.5173 52.5612 21.8675 53.1491C23.1961 53.7264 24.5568 54.325 26.517 54.3577C26.7348 54.3577 26.9525 54.3577 27.1813 54.347C29.1082 54.2706 30.7416 53.3235 31.5581 52.768C31.8956 52.5395 31.9719 52.0822 31.7431 51.7447C31.5147 51.418 31.0465 51.3309 30.7199 51.5706L30.7197 51.5704Z"
                                        fill="#2673DD" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.7276 51.081L22.7493 51.0917C23.6097 51.4402 24.4371 51.7777 25.4062 51.9628C28.0955 50.7325 29.9683 48.0213 29.9683 44.8745C29.9791 40.5845 26.4733 37.0895 22.1833 37.0895C17.8931 37.0895 14.3761 40.5845 14.3761 44.8745C14.3736 46.7582 15.0591 48.5781 16.3036 49.9922C16.5431 49.9485 16.7825 49.9268 17.033 49.9051C19.5155 49.7634 21.2249 50.4604 22.7276 51.081ZM23.2829 45.8329C23.1416 45.6912 22.9754 45.5768 22.7927 45.4954C22.5972 45.3971 22.3791 45.321 22.1507 45.2447C21.9284 45.1733 21.7102 45.0897 21.4971 44.9942C21.0399 44.8201 20.6587 44.5587 20.3432 44.1885C20.0271 43.8293 19.8857 43.3721 19.8857 42.8168C19.8966 42.4573 19.973 42.1418 20.1034 41.8694C20.2451 41.5972 20.4302 41.3685 20.6697 41.1944C20.9094 41.0203 21.1706 40.8783 21.4647 40.7915C21.7688 40.7032 22.0841 40.6592 22.4008 40.6608H22.4228C22.9237 40.6715 23.3699 40.7696 23.7401 40.9439C24.1086 41.1279 24.4587 41.3467 24.7856 41.5972L24.0125 42.7078C23.7948 42.5444 23.555 42.4137 23.3156 42.3049C23.0651 42.1959 22.7603 42.1308 22.4011 42.1089C22.1287 42.0872 21.8782 42.1415 21.6715 42.2722C21.4537 42.392 21.3447 42.5771 21.3447 42.8165C21.3447 42.9582 21.3774 43.0889 21.4537 43.1977C21.53 43.3067 21.6388 43.4047 21.7695 43.4808C21.9002 43.5679 22.0416 43.6225 22.1831 43.6879C22.3248 43.7422 22.4772 43.7966 22.6079 43.8513C22.891 43.949 23.1741 44.0688 23.457 44.2102C23.7312 44.3488 23.9873 44.5207 24.2193 44.7221C24.4481 44.9181 24.6222 45.1576 24.7636 45.4297C24.8943 45.7022 24.9597 46.018 24.949 46.3881C24.938 46.7473 24.8616 47.0739 24.7312 47.3463C24.5895 47.6294 24.3937 47.8579 24.154 48.0539C23.9035 48.25 23.6204 48.3914 23.2939 48.4895C22.9671 48.5875 22.6079 48.6312 22.2267 48.6202C21.8675 48.6095 21.541 48.5658 21.2469 48.4675C20.9528 48.3697 20.6807 48.2607 20.4409 48.13C20.2257 48.015 20.0216 47.8802 19.8313 47.7274C19.6572 47.6074 19.5374 47.4987 19.4611 47.4114L20.2561 46.2901C20.527 46.5482 20.84 46.7581 21.1816 46.9107C21.5407 47.0848 21.9109 47.1719 22.2921 47.1719C22.6189 47.1829 22.891 47.1065 23.1305 46.9651C23.3699 46.8237 23.4787 46.6059 23.4899 46.3335C23.4899 46.1267 23.4246 45.9633 23.2829 45.8326V45.8329ZM39.6699 44.841C39.4411 44.6342 39.1907 44.4708 38.9075 44.3184C38.6247 44.177 38.3415 44.0463 38.0477 43.9482C37.9057 43.8939 37.7643 43.8392 37.6119 43.7848C37.4624 43.7336 37.3198 43.6642 37.1874 43.578C37.0566 43.5017 36.9586 43.4039 36.8713 43.2949C36.793 43.1833 36.7513 43.0501 36.7518 42.9138C36.7625 42.6743 36.8715 42.4892 37.0786 42.3695C37.2961 42.2497 37.5358 42.1954 37.8187 42.2168C38.1782 42.2388 38.4937 42.3041 38.7444 42.4129C38.9949 42.5329 39.2343 42.6633 39.4521 42.8267L40.2361 41.7162C39.9093 41.4547 39.5501 41.237 39.1799 41.0519C38.8098 40.8668 38.363 40.7797 37.8624 40.7688H37.8407C37.5139 40.758 37.1981 40.8014 36.8932 40.8995C36.5884 40.9975 36.327 41.1282 36.0875 41.3023C35.8481 41.4764 35.663 41.7052 35.5213 41.9773C35.3799 42.2497 35.3035 42.5763 35.2928 42.9357C35.2818 43.491 35.4342 43.9482 35.75 44.3074C36.0622 44.6673 36.4588 44.9441 36.9042 45.1131C37.111 45.2005 37.3288 45.2872 37.5685 45.3529C37.797 45.4289 38.0148 45.5163 38.2108 45.614C38.4066 45.7121 38.57 45.8211 38.701 45.9625C38.8315 46.1042 38.9075 46.2673 38.8965 46.4741C38.8858 46.7465 38.7661 46.9643 38.5376 47.1057C38.3089 47.2474 38.0257 47.3235 37.6992 47.3128C37.3116 47.3012 36.9302 47.2124 36.5774 47.0514C36.2182 46.8772 35.9024 46.6702 35.641 46.4307L34.8353 47.5522C34.9116 47.6286 35.0424 47.7483 35.2057 47.8897C35.3961 48.0426 35.6001 48.1775 35.8154 48.2926C36.0549 48.4233 36.327 48.5323 36.6211 48.6301C36.9259 48.7281 37.2527 48.7718 37.6122 48.7828C37.9931 48.7935 38.3523 48.7501 38.679 48.6521C39.0058 48.554 39.2997 48.4123 39.5501 48.2165C39.7975 48.0241 39.9985 47.7785 40.1381 47.4979C40.2795 47.2147 40.3558 46.888 40.3668 46.5288C40.3775 46.1586 40.3122 45.8318 40.1707 45.5597C40.0727 45.2765 39.8986 45.0371 39.6699 44.841ZM59.4104 44.548C59.4757 44.4826 59.5521 44.3953 59.6174 44.3192C59.6935 44.2322 59.7589 44.1344 59.8132 44.0034C59.8786 43.873 59.9223 43.7313 59.9659 43.5572C59.9986 43.383 60.0203 43.176 60.0203 42.9255C60.0201 42.6837 59.9759 42.4438 59.8896 42.2179C59.8049 41.9902 59.6795 41.7799 59.5194 41.5972C59.356 41.4122 59.1709 41.2488 58.9422 41.118C58.7048 40.9815 58.4415 40.8961 58.1691 40.8676C57.984 40.8459 57.7773 40.8242 57.5595 40.8242C57.3307 40.8132 57.1023 40.8132 56.8408 40.8132L54.7285 40.8239V48.7943H57.6465C57.9187 48.7943 58.1257 48.7943 58.2999 48.7836C58.594 48.7509 58.8661 48.6855 59.1275 48.5765C59.3777 48.4678 59.6174 48.3154 59.8025 48.1193C59.9986 47.9232 60.151 47.6838 60.2707 47.4223C60.3868 47.1315 60.4459 46.821 60.4448 46.5079C60.4448 45.9743 60.3361 45.5497 60.129 45.2339C59.9223 44.9072 59.6828 44.6787 59.4104 44.548ZM56.0568 42.1852H56.7428C56.9715 42.1852 57.1783 42.1852 57.3527 42.1959C57.5268 42.2069 57.6902 42.2179 57.8099 42.2286C58.0821 42.2613 58.2999 42.3486 58.4632 42.49C58.6373 42.6207 58.7244 42.8168 58.7137 43.0563C58.7244 43.3611 58.6266 43.5898 58.4632 43.7205C58.2889 43.851 58.0711 43.9383 57.799 43.9707C57.6682 43.9927 57.5158 44.0034 57.3417 44.0034H56.0461V42.1852H56.0568ZM58.8007 47.0414C58.6047 47.2263 58.2889 47.3353 57.8533 47.3572C57.7229 47.368 57.5595 47.3787 57.3417 47.368H56.0461V45.31H56.7101C56.9172 45.31 57.113 45.31 57.2981 45.2993C57.4832 45.2886 57.6465 45.2886 57.7773 45.2993C58.2018 45.321 58.5176 45.419 58.7464 45.5931C58.9748 45.7672 59.0948 46.007 59.0948 46.3228C59.1056 46.6166 59.0075 46.8564 58.8007 47.0414ZM46.9108 44.5043C46.7584 44.0907 46.5407 43.7313 46.2575 43.4481C45.9854 43.1543 45.6586 42.9365 45.2884 42.7839C44.9191 42.6309 44.523 42.5532 44.1232 42.5554C43.6226 42.5554 43.1761 42.6424 42.7949 42.7948C42.4031 42.9582 42.0763 43.1867 41.8151 43.4698C41.5537 43.753 41.3576 44.0797 41.2162 44.4499C41.0855 44.8201 41.0201 45.223 41.0201 45.6475C41.0201 46.1157 41.1072 46.5405 41.2706 46.9324C41.4299 47.3031 41.659 47.6395 41.9456 47.9235C42.2288 48.1975 42.5614 48.4155 42.9257 48.5658C43.2958 48.7072 43.6877 48.7836 44.1015 48.7836C44.4827 48.7836 44.8202 48.7509 45.1033 48.6855C45.3636 48.6369 45.6187 48.564 45.8654 48.4678C46.0746 48.3731 46.275 48.2602 46.4643 48.1303C46.6387 48.0105 46.8018 47.8905 46.9652 47.7708L46.2575 46.78C46.1595 46.8564 46.0615 46.9327 45.9417 47.0195C45.811 47.1065 45.6476 47.1829 45.4735 47.2592C45.2994 47.3243 45.1033 47.3789 44.8746 47.4226C44.6568 47.455 44.4064 47.477 44.1342 47.466C43.9806 47.4534 43.828 47.4315 43.677 47.4006C43.5157 47.358 43.3616 47.2919 43.2195 47.2046C43.0764 47.1034 42.945 46.9866 42.8276 46.8564C42.7079 46.7147 42.6208 46.5403 42.5662 46.3335L42.5555 46.2791H47.0959L47.1069 45.9309C47.1286 45.3864 47.0632 44.9181 46.9108 44.5043ZM42.5118 45.0815L42.5228 45.0379C42.5445 44.8638 42.5989 44.7764 42.6535 44.6567L42.6862 44.5914C42.7791 44.4354 42.9011 44.2986 43.0454 44.1885C43.1877 44.0802 43.3508 44.0024 43.5246 43.96C43.7097 43.9054 43.8948 43.8727 44.0799 43.8727C44.5154 43.8837 44.8746 44.0034 45.136 44.2431C45.2667 44.3519 45.3755 44.4609 45.4625 44.5806C45.5499 44.7004 45.6042 44.8418 45.6259 45.0269L45.6369 45.0815H42.5118ZM52.2787 43.165L52.1916 43.0889C52.0065 42.9255 51.7668 42.7948 51.4947 42.7078C51.2332 42.6097 50.9177 42.5551 50.5582 42.5551C50.1554 42.5551 49.7742 42.6314 49.426 42.7841C49.0817 42.9251 48.7731 43.1407 48.5223 43.4155C48.2608 43.6876 48.0648 44.0254 47.9124 44.4172C47.7709 44.7984 47.6946 45.2339 47.6946 45.7129C47.6946 46.1377 47.7709 46.5405 47.9124 46.9107C48.0648 47.2809 48.2608 47.5964 48.5223 47.8798C48.7825 48.1522 49.0884 48.377 49.426 48.5441C49.7742 48.6963 50.1444 48.7726 50.5582 48.7726C50.9177 48.7726 51.2332 48.7289 51.4947 48.6309C51.7668 48.5331 52.0065 48.3914 52.1916 48.2173L52.2787 48.1303V48.7616H53.6833V42.7295H52.2787V43.165ZM52.148 46.4315C52.0609 46.6386 51.9412 46.8237 51.7995 46.9651C51.6581 47.1068 51.4947 47.2046 51.3096 47.2809C51.1242 47.346 50.9291 47.3791 50.7326 47.3789C50.2861 47.3789 49.9159 47.2263 49.6111 46.9324C49.306 46.6166 49.1646 46.203 49.1646 45.6912C49.1646 45.1903 49.317 44.7764 49.6111 44.4499C49.9159 44.1231 50.2861 43.9597 50.7326 43.9597C50.9394 43.9597 51.1355 44.0034 51.3096 44.0797C51.5057 44.1558 51.6688 44.2646 51.7995 44.4172C51.9412 44.5587 52.0609 44.744 52.148 44.9725C52.235 45.1903 52.2787 45.4297 52.2787 45.7129C52.2787 45.9743 52.235 46.2138 52.148 46.4315ZM65.4428 43.165L65.3557 43.0889C65.1707 42.9255 64.9312 42.7948 64.6588 42.7078C64.3976 42.6097 64.0818 42.5551 63.7226 42.5551C63.3198 42.5551 62.9386 42.6314 62.5901 42.7841C62.2458 42.9251 61.9372 43.1407 61.6864 43.4155C61.4249 43.6876 61.2291 44.0254 61.0767 44.4172C60.935 44.7984 60.859 45.2339 60.859 45.7129C60.859 46.1377 60.935 46.5405 61.0767 46.9107C61.2291 47.2809 61.4249 47.5964 61.6864 47.8798C61.9467 48.1522 62.2525 48.377 62.5901 48.5441C62.9386 48.6963 63.3088 48.7726 63.7226 48.7726C64.0818 48.7726 64.3976 48.7289 64.6588 48.6309C64.9312 48.5331 65.1707 48.3914 65.3557 48.2173L65.4428 48.1303V48.7616H66.8474V42.7622H65.4428V43.165ZM65.3121 46.4315C65.225 46.6386 65.1053 46.8237 64.9639 46.9651C64.8222 47.1068 64.6588 47.2046 64.4737 47.2809C64.2883 47.346 64.0932 47.3792 63.8967 47.3789C63.4502 47.3789 63.08 47.2263 62.7752 46.9324C62.4704 46.6166 62.3287 46.203 62.3287 45.6912C62.3287 45.1903 62.4811 44.7764 62.7752 44.4499C63.08 44.1231 63.4502 43.9597 63.8967 43.9597C64.1035 43.9597 64.2886 44.0034 64.4737 44.0797C64.6698 44.1558 64.8332 44.2646 64.9639 44.4172C65.1053 44.5587 65.225 44.744 65.3121 44.9725C65.3994 45.1903 65.4428 45.4297 65.4428 45.7129C65.4428 45.9743 65.3994 46.2138 65.3121 46.4315ZM77.1042 45.3649L79.6631 42.5666H77.8119L75.6996 44.864V40.7264H74.2842V48.7836H75.6996V46.9547L76.1678 46.4318L77.997 48.7836H79.7501L77.1042 45.3649ZM73.021 43.96C72.8903 43.5898 72.6401 43.2633 72.2806 42.9912C71.9215 42.7188 71.464 42.5773 70.9197 42.5773C70.6365 42.5773 70.3424 42.6207 70.0486 42.708C69.7912 42.7851 69.551 42.9108 69.3409 43.0782V42.7622H67.9143V48.7836H69.3409V45.5607C69.3516 45.343 69.3736 45.1362 69.3953 44.9401C69.428 44.7333 69.4823 44.5589 69.5694 44.4065C69.6565 44.2541 69.7872 44.1344 69.9506 44.0364C70.114 43.9383 70.3207 43.8837 70.5712 43.873C70.887 43.8622 71.1374 43.9493 71.3335 44.1127C71.5293 44.2868 71.66 44.5046 71.7254 44.7877C71.7581 44.9184 71.7798 45.0925 71.8017 45.3103C71.8124 45.5171 71.8234 45.8219 71.8234 46.225V48.7836H73.2281V45.8768C73.2298 45.5354 73.2189 45.194 73.1954 44.8533C73.1752 44.5495 73.1166 44.2494 73.021 43.9603V43.96Z"
                                        fill="#EA5F00" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_655_2042">
                                        <rect x="0.4375" y="0.4375" width="91.125"
                                            height="91.125" rx="6.75"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_681_14892)">
                                    <rect width="91.125" height="91.125" rx="6.75"
                                        fill="white" />
                                    <g clip-path="url(#clip1_681_14892)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.3882 53.1803C28.3097 55.1561 25.5414 56.2414 22.6739 56.2047C19.7922 56.2482 17.0077 55.1627 14.9158 53.1803C13.9315 52.2259 13.1489 51.0834 12.6145 49.8207C12.0801 48.5581 11.8047 47.2009 11.8047 45.8299C11.8047 44.4588 12.0801 43.1016 12.6145 41.839C13.1489 40.5763 13.9315 39.4339 14.9158 38.4794C17.0051 36.4852 19.7948 35.3926 22.6827 35.4375C25.5501 35.4008 28.3184 36.4861 30.3969 38.4618C31.3823 39.4157 32.1659 40.558 32.701 41.8207C33.2361 43.0834 33.5119 44.4409 33.5119 45.8123C33.5119 47.1838 33.2361 48.5412 32.701 49.804C32.1659 51.0667 31.3823 52.2089 30.3969 53.1628L30.3882 53.1803ZM22.6827 38.8213C21.7674 38.8124 20.8598 38.9891 20.0146 39.3406C19.1695 39.6922 18.4043 40.2113 17.7653 40.8667C17.1263 41.5221 16.6267 42.3001 16.2967 43.1539C15.9666 44.0077 15.813 44.9195 15.845 45.8342C15.845 46.7299 16.0214 47.6167 16.3641 48.4442C16.7069 49.2716 17.2093 50.0235 17.8426 50.6568C18.4759 51.2901 19.2277 51.7925 20.0552 52.1352C20.8826 52.478 21.7695 52.6544 22.6651 52.6544C23.5608 52.6544 24.4476 52.478 25.2751 52.1352C26.1025 51.7925 26.8544 51.2901 27.4877 50.6568C28.121 50.0235 28.6234 49.2716 28.9661 48.4442C29.3088 47.6167 29.4853 46.7299 29.4853 45.8342C29.5171 44.9224 29.3645 44.0136 29.0366 43.1622C28.7088 42.3107 28.2123 41.5343 27.5771 40.8794C26.9418 40.2245 26.1809 39.7047 25.3398 39.351C24.4988 38.9973 23.595 38.8172 22.6827 38.8213ZM55.9943 37.8833L47.6577 56.4764L47.1843 56.3888C44.7999 55.9592 44.3177 55.3631 43.2044 52.9437L36.9541 39.3297H34.6047V36.0248H43.4849V39.3297H41.3635L46.3865 50.5943L51.2606 39.3297H48.6307V36.0248H55.9943V37.8833ZM76.1567 53.1803C74.0513 55.1247 71.2907 56.2045 68.4249 56.2045C65.559 56.2045 62.7984 55.1247 60.693 53.1803C59.7087 52.2259 58.9262 51.0834 58.3918 49.8207C57.8573 48.5581 57.582 47.2009 57.582 45.8299C57.582 44.4588 57.8573 43.1016 58.3918 41.839C58.9262 40.5763 59.7087 39.4339 60.693 38.4794C62.7984 36.535 65.559 35.4553 68.4249 35.4553C71.2907 35.4553 74.0513 36.535 76.1567 38.4794C77.1443 39.432 77.9298 40.5738 78.4663 41.8367C79.0028 43.0996 79.2793 44.4577 79.2793 45.8299C79.2793 47.202 79.0028 48.5601 78.4663 49.823C77.9298 51.0859 77.1443 52.2277 76.1567 53.1803ZM68.4862 38.8213C67.5705 38.8125 66.6625 38.9891 65.8169 39.3406C64.9713 39.692 64.2056 40.211 63.5659 40.8662C62.9263 41.5215 62.4258 42.2994 62.0948 43.1533C61.7638 44.0071 61.609 44.919 61.6398 45.8342C61.6398 46.7299 61.8162 47.6167 62.1589 48.4442C62.5017 49.2716 63.0041 50.0235 63.6374 50.6568C64.2707 51.2901 65.0225 51.7925 65.85 52.1352C66.6774 52.478 67.5643 52.6544 68.4599 52.6544C69.3556 52.6544 70.2424 52.478 71.0699 52.1352C71.8973 51.7925 72.6492 51.2901 73.2825 50.6568C73.9158 50.0235 74.4182 49.2716 74.7609 48.4442C75.1036 47.6167 75.2801 46.7299 75.2801 45.8342C75.3131 44.9229 75.1617 44.0142 74.8348 43.1628C74.5079 42.3114 74.0122 41.5349 73.3777 40.8799C72.7431 40.2249 71.9827 39.7049 71.1422 39.3511C70.3016 38.9973 69.3982 38.8171 68.4862 38.8213Z"
                                            fill="#4B2489" />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_681_14892">
                                        <rect width="91.125" height="91.125"
                                            rx="6.75" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1_681_14892">
                                        <rect width="67.5" height="21.039"
                                            fill="white"
                                            transform="translate(11.8125 35.4375)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_681_14959)">
                                    <rect width="91.125" height="91.125" rx="6.75"
                                        fill="white" />
                                    <path
                                        d="M45.2597 52.4801C55.3248 52.4801 63.4842 44.3208 63.4842 34.2557C63.4842 24.1906 55.3248 16.0312 45.2597 16.0312C35.1946 16.0312 27.0353 24.1906 27.0353 34.2557C27.0353 44.3208 35.1946 52.4801 45.2597 52.4801Z"
                                        fill="#00AED6" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M55.8906 33.7242C55.7387 31.4461 53.7644 29.6237 51.4863 29.7755H39.9442C39.4886 29.7755 39.1848 29.4718 39.1848 29.0162C39.1848 28.5606 39.4886 28.2568 39.9442 28.2568H51.6382C51.5623 26.7381 50.4232 25.1435 48.9805 24.9157C45.5634 24.3082 42.0704 24.3082 38.7292 24.9157C36.8308 25.2194 35.3881 27.1178 35.0843 28.9403C34.5528 32.5092 34.5528 36.1541 35.0843 39.7231C35.464 41.7733 37.1346 43.4439 39.2608 43.7476C43.5131 44.2792 47.7655 44.2792 51.9419 43.7476C53.8403 43.5198 55.0553 41.7733 55.435 39.9509C55.8146 37.8247 55.9665 35.7744 55.8906 33.7242ZM52.0938 36.23V36.9135C52.0938 37.3691 51.7901 37.6728 51.3345 37.6728C50.8789 37.6728 50.5751 37.3691 50.5751 36.9135V36.23C50.3473 36.0022 50.1954 35.6985 50.1954 35.3947C50.1954 34.7873 50.727 34.2557 51.3345 34.2557C51.9419 34.2557 52.4735 34.7873 52.4735 35.3947C52.4735 35.6985 52.3216 36.0022 52.0938 36.23Z"
                                        fill="white" />
                                    <path
                                        d="M17.7711 70.7046C18.5305 71.8436 19.8214 72.4511 21.1882 72.3751C22.7829 72.3751 23.9219 71.388 23.9219 70.0212V69.2618C23.0866 70.0971 21.8716 70.5527 20.6567 70.4768C17.6952 70.5527 15.2653 68.2746 15.1893 65.3132C15.1134 62.3517 17.3915 59.9218 20.3529 59.8458C20.4289 59.8458 20.5048 59.8458 20.5807 59.8458C21.7957 59.7699 23.0107 60.2255 23.9219 61.0608V60.0736H26.6556V69.9452C26.6556 72.8308 24.3775 74.8051 21.1882 74.8051C19.062 74.9569 17.0877 74.0457 15.7209 72.3751L17.7711 70.7046ZM23.846 64.5538C23.846 63.4148 22.5551 62.3517 21.1123 62.3517C19.2898 62.3517 18.0749 63.4907 18.0749 65.1613C17.9989 66.6041 19.062 67.895 20.5807 68.0468C20.7326 68.0468 20.8845 68.0468 21.0364 68.0468C22.631 68.0468 23.9219 67.0597 23.9219 65.8447V64.5538H23.846Z"
                                        fill="black" />
                                    <path
                                        d="M33.7935 59.7699C37.1346 59.7699 39.4886 62.1239 39.4886 65.1613C39.4886 68.1987 37.0587 70.5527 33.7935 70.5527C30.832 70.7046 28.2502 68.4265 28.0983 65.465C27.9465 62.5036 30.1486 59.9218 33.1101 59.7699C33.3379 59.7699 33.5657 59.7699 33.7935 59.7699ZM33.7935 62.2758C32.1988 62.2758 30.9079 63.5667 30.9079 65.1613C30.9079 66.7559 32.1988 68.0468 33.7935 68.0468C35.3881 68.0468 36.679 66.7559 36.679 65.1613C36.755 63.6426 35.54 62.3517 34.0972 62.2758C33.9454 62.2758 33.8694 62.2758 33.7935 62.2758Z"
                                        fill="black" />
                                    <path
                                        d="M41.0833 60.0736H43.8169V60.9849H43.8929C44.8041 60.1496 45.9431 59.7699 47.1581 59.7699C50.1195 59.8458 52.4735 62.2758 52.3976 65.2372C52.3217 68.1228 50.0436 70.4008 47.1581 70.4768C46.019 70.4768 44.88 70.0971 43.9688 69.4137H43.8929V74.5013H41.0833V60.0736ZM46.6265 62.2758C45.1078 62.2758 43.8929 63.3389 43.8929 64.4779V65.7688C43.8929 66.9837 45.1078 67.9709 46.7025 67.9709C48.2971 67.9709 49.588 66.68 49.5121 65.0854C49.5121 63.5667 48.2212 62.2758 46.6265 62.2758Z"
                                        fill="black" />
                                    <path
                                        d="M57.7131 64.1741C59.5355 63.9463 60.143 63.6426 60.143 63.111C60.143 62.4276 59.4596 62.048 58.3206 62.048C57.1815 61.972 56.0425 62.7314 55.8147 63.8704L53.157 63.3389C53.5367 61.2886 55.6628 59.7699 58.3206 59.7699C61.282 59.7699 63.1045 61.2886 63.1045 63.7185V70.173H60.4468V69.034C59.6115 70.0211 58.3206 70.5527 57.0297 70.4008C54.8276 70.4008 53.2329 69.1859 53.2329 67.3634C53.2329 65.541 54.4479 64.6298 57.7131 64.1741ZM60.2949 65.2372C59.9912 65.6169 59.4596 65.8447 58.0928 66.0725C56.4222 66.3763 55.8147 66.68 55.8147 67.2875C55.8147 67.895 56.3463 68.1987 57.4094 68.1987C59.004 68.1987 60.2949 67.4394 60.2949 66.4522V65.2372Z"
                                        fill="black" />
                                    <path
                                        d="M68.1162 69.6416L63.4841 60.0737H66.5975L69.7108 66.6801H69.7868L72.8242 60.0737H75.9375L68.9515 74.5014H65.7622L68.1162 69.6416Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_681_14959">
                                        <rect width="91.125" height="91.125"
                                            rx="6.75" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_681_15056)">
                                    <rect x="-0.00012207" width="91.125" height="91.125"
                                        rx="6.75" fill="white" />
                                    <g clip-path="url(#clip1_681_15056)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M38.4944 50.9192C39.7773 51.0111 41.2722 50.0145 41.7988 49.4455C43.6294 47.4647 43.6736 44.6004 41.8306 42.5259C41.145 41.7537 39.5334 40.9003 38.5139 41.0204H34.8226V50.9069L38.5033 50.9192H38.4944ZM36.9041 48.7776V43.1497C37.4819 43.1118 38.0615 43.1118 38.6393 43.1497C39.0939 43.2024 39.5276 43.3702 39.8992 43.6374C42.0196 45.0863 41.1361 48.5408 38.604 48.7723C38.0381 48.8121 37.4702 48.8139 36.9041 48.7776Z"
                                            fill="#008CEB" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M70.8998 50.9369H73.0043V48.8058H77.1797L77.1921 50.9262H79.2966V47.4134C79.2966 46.3532 79.385 45.0315 79.1199 44.072C78.8792 43.1936 78.3578 42.4181 77.6351 41.8637C76.9125 41.3093 76.0284 41.0065 75.1176 41.0015C74.2068 40.9965 73.3194 41.2896 72.5908 41.836C71.8621 42.3824 71.3321 43.1521 71.0818 44.0278C70.799 44.9749 70.8945 46.3338 70.8945 47.3851C70.8945 48.5726 70.8821 49.7671 70.8945 50.9545L70.8998 50.9369ZM73.0061 46.6624C72.9937 45.7789 72.9 44.8336 73.3153 44.1533C73.4975 43.8401 73.7595 43.5807 74.0746 43.4016C74.3896 43.2226 74.7464 43.1301 75.1088 43.1337C75.4693 43.1364 75.8229 43.2325 76.1351 43.4128C76.4473 43.593 76.7074 43.8512 76.89 44.1621C77.2999 44.8689 77.2027 45.7524 77.1921 46.6642L73.0061 46.6624Z"
                                            fill="#008CEB" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M46.833 50.9351H48.9304C48.9304 50.4899 48.8739 49.1275 48.9499 48.8041H53.1094L53.1235 50.9334H55.2245C55.2139 49.753 55.2245 48.5744 55.2245 47.3993C55.2245 46.3921 55.3182 44.9503 55.0478 44.0561C54.8056 43.1789 54.2833 42.4048 53.5606 41.8517C52.8379 41.2987 51.9542 40.9968 51.0441 40.9922C50.1341 40.9876 49.2474 41.2805 48.5191 41.8263C47.7908 42.372 47.2608 43.1408 47.0097 44.0155C46.7287 44.9344 46.8241 46.3391 46.8241 47.3622C46.8241 48.5426 46.7976 49.753 46.8241 50.9298L46.833 50.9351ZM48.9322 46.6625C48.9181 45.779 48.8279 44.8213 49.2432 44.1551C49.4254 43.8427 49.6863 43.5835 49.9999 43.4034C50.3135 43.2233 50.6689 43.1285 51.0305 43.1285C51.3922 43.1285 51.7475 43.2233 52.0611 43.4034C52.3747 43.5835 52.6356 43.8427 52.8179 44.1551C53.2296 44.8619 53.1306 45.7595 53.1235 46.659L48.9322 46.6625Z"
                                            fill="#008CEB" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.9158 44.8814L58.8858 46.3533C58.8858 47.5902 58.8257 49.8997 58.8858 50.9051H60.9426C60.9903 50.1983 60.8684 45.1782 60.9974 45.0174C60.9974 44.042 62.0169 43.1338 63.0453 43.1302C63.5799 43.127 64.0946 43.3324 64.4801 43.7028C64.7417 43.9413 65.1428 44.4855 65.1357 45.0351C65.2311 45.0899 65.1551 50.3361 65.1852 50.9175H67.2437L67.2278 44.9185C67.2791 44.4484 66.9964 43.7222 66.8144 43.3547C66.4768 42.6543 65.95 42.0625 65.2935 41.6462C64.6369 41.2299 63.8769 41.0058 63.0996 40.9992C62.3222 40.9926 61.5585 41.2037 60.895 41.6088C60.2315 42.0138 59.6946 42.5966 59.3452 43.291C59.1685 43.6533 58.8716 44.399 58.9158 44.8814Z"
                                            fill="#008CEB" />
                                        <path
                                            d="M21.4622 55.5806C26.7915 55.5806 31.1118 51.2603 31.1118 45.9309C31.1118 40.6016 26.7915 36.2812 21.4622 36.2812C16.1328 36.2812 11.8125 40.6016 11.8125 45.9309C11.8125 51.2603 16.1328 55.5806 21.4622 55.5806Z"
                                            fill="#008CEB" />
                                        <path
                                            d="M27.0848 45.9715V48.6874C27.0848 48.8641 27.0089 48.9012 26.8604 48.8147C26.6619 48.6955 26.4552 48.5904 26.242 48.5001C25.598 48.2436 24.9004 48.1507 24.2117 48.2298C23.46 48.3273 22.7222 48.5123 22.0135 48.7811C21.3067 49.0196 20.614 49.2776 19.8931 49.4773C19.296 49.6546 18.6745 49.7363 18.0519 49.7194C17.3618 49.6926 16.6911 49.4835 16.1081 49.1133C16.0349 49.0692 15.9748 49.0062 15.9341 48.931C15.8934 48.8559 15.8735 48.7711 15.8767 48.6857C15.8767 46.9069 15.8767 45.1281 15.8767 43.3493C15.8767 43.2627 15.8767 43.1602 15.9544 43.116C16.0322 43.0719 16.1117 43.1443 16.1788 43.1885C16.8119 43.6165 17.5617 43.8387 18.3257 43.8246C18.8721 43.8022 19.4124 43.7016 19.9302 43.526C20.6653 43.298 21.3756 42.9959 22.0983 42.7397C22.6609 42.5235 23.2377 42.3463 23.8247 42.2096C24.3284 42.0916 24.8512 42.0792 25.3599 42.1732C25.8687 42.2671 26.3525 42.4654 26.7809 42.7556C26.8791 42.8157 26.9595 42.901 27.0139 43.0025C27.0682 43.1041 27.0946 43.2183 27.0901 43.3334C27.0901 44.2169 27.0901 45.1004 27.0901 45.9839L27.0848 45.9715Z"
                                            fill="#FEFEFE" />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_681_15056">
                                        <rect width="91.125" height="91.125"
                                            rx="6.75" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1_681_15056">
                                        <rect width="67.5" height="19.2993"
                                            fill="white"
                                            transform="translate(11.8125 36.2812)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="credit-card">
                    <div class="credit-card-inner">
                        <div class="credit-card-front">
                            <div class="credit-card-bg"></div>
                            <div class="credit-card-glow"></div>
                            <svg width="92" height="92" viewBox="0 0 92 92"
                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="logo">
                                <g clip-path="url(#clip0_681_14896)">
                                    <rect width="91.125" height="91.125" rx="6.75"
                                        fill="white" />
                                    <g clip-path="url(#clip1_681_14896)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.8686 30.3811L12.7032 33.0701C12.7032 33.0701 11.8125 33.1735 11.8125 34.2467V53.3974C11.8125 53.3974 11.9342 55.6387 14.4955 55.6387H37.3499C37.3499 55.6387 39.3868 55.1519 39.3868 53.1126V37.3105C39.3868 37.3105 39.427 35.0692 36.7391 35.0692H14.6999C14.4405 35.0144 14.202 34.8873 14.0118 34.7025C13.8217 34.5178 13.6877 34.283 13.6255 34.0253C13.5586 33.67 13.7021 33.6335 14.0781 33.6335H34.3153V31.4506C34.3153 31.4506 34.2435 30.2801 32.8686 30.3811Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M26.0087 52.3892C24.3368 52.3892 23.1055 51.7078 21.2889 49.9106C21.1401 49.7553 21.0578 49.5481 21.0596 49.333C21.0614 49.1179 21.1471 48.9121 21.2985 48.7593C21.4498 48.6065 21.6549 48.5189 21.8699 48.5151C22.0849 48.5112 22.293 48.5915 22.4496 48.7389C24.3624 50.6297 25.2482 51.0994 26.7765 50.6857C27.6647 50.4423 28.4617 49.3132 28.5079 48.0149C28.5444 47.0062 27.8326 46.3479 26.3932 46.0596C23.8088 45.5424 22.283 44.5544 21.8595 43.1211C21.5188 41.9676 21.9666 40.679 23.0872 39.5925L23.1335 39.5511C25.5427 37.5373 28.34 39.0376 29.4825 40.1132C29.635 40.2646 29.7224 40.4695 29.7262 40.6843C29.7299 40.8991 29.6497 41.1069 29.5026 41.2635C29.3556 41.4201 29.1532 41.5131 28.9386 41.5228C28.7239 41.5325 28.514 41.4581 28.3534 41.3154C28.2573 41.2254 26.0926 39.2591 24.2164 40.7971C23.5752 41.431 23.2856 42.1258 23.4437 42.6587C23.6725 43.435 24.8357 44.0701 26.7181 44.4473C29.9169 45.0874 30.1895 47.2009 30.1579 48.0794C30.0897 49.9934 28.4885 52.1373 26.9857 52.3271C26.6617 52.3684 26.3354 52.3891 26.0087 52.3892Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M47.8689 34.9537C47.504 34.7309 47.109 34.5616 46.6959 34.4512C45.8442 34.2078 45.2297 33.8963 44.9365 33.4984C44.6749 33.1529 44.6749 32.7027 44.9888 32.1259C45.1665 31.7804 45.5972 31.5614 46.1508 31.5176C46.8515 31.4898 47.5466 31.6525 48.1621 31.9884C48.2509 32.0328 48.3536 32.0401 48.4477 32.0087C48.5419 31.9774 48.6197 31.9099 48.664 31.8211C48.7084 31.7324 48.7157 31.6297 48.6843 31.5355C48.653 31.4414 48.5855 31.3636 48.4967 31.3192C47.6389 30.8788 46.7933 30.7108 46.0888 30.7644C45.2711 30.8264 44.6286 31.1829 44.3196 31.7585C43.8475 32.6285 43.8791 33.3403 44.3196 33.9365C44.7272 34.4706 45.4706 34.8795 46.4866 35.1618C46.8344 35.2586 47.1685 35.3992 47.4807 35.5803C47.8786 35.8237 48.1402 36.1048 48.2668 36.4077C48.3879 36.6938 48.4051 37.0132 48.3154 37.3106C48.2664 37.4647 48.1994 37.6125 48.1159 37.751C48.1159 37.7717 48.0952 37.7924 48.0745 37.824C47.7703 38.2742 47.2788 38.5042 46.6813 38.5042C46.0218 38.5042 45.2151 38.2426 44.3573 37.7194C44.2356 37.6464 44.114 37.5722 44.0117 37.4992C43.9285 37.4437 43.8266 37.4235 43.7285 37.4431C43.6303 37.4628 43.544 37.5206 43.4885 37.6038C43.433 37.6871 43.4129 37.789 43.4325 37.8871C43.4521 37.9852 43.5099 38.0715 43.5932 38.127C43.7161 38.2045 43.8347 38.2886 43.9485 38.3789C44.9328 38.9763 45.8649 39.2683 46.6606 39.2683C47.5197 39.2683 48.2315 38.9337 48.6817 38.2633C48.6999 38.2268 48.7211 38.1918 48.745 38.1587C48.8665 37.9628 48.9614 37.7517 49.0272 37.5308C49.1678 37.0682 49.138 36.5705 48.9433 36.1279C48.717 35.6336 48.3412 35.2228 47.8689 34.9537Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M53.6389 34.1268C53.2101 34.0215 52.7607 34.0358 52.3394 34.1682C51.8596 34.3164 51.417 34.5653 51.0411 34.8982V31.1214C51.0357 31.0252 50.9936 30.9348 50.9236 30.8686C50.8536 30.8025 50.7609 30.7656 50.6646 30.7656C50.5682 30.7656 50.4755 30.8025 50.4055 30.8686C50.3355 30.9348 50.2934 31.0252 50.288 31.1214V38.9014C50.2934 38.9976 50.3355 39.088 50.4055 39.1542C50.4755 39.2203 50.5682 39.2572 50.6646 39.2572C50.7609 39.2572 50.8536 39.2203 50.9236 39.1542C50.9936 39.088 51.0357 38.9976 51.0411 38.9014V35.9897C51.0486 35.9838 51.0555 35.9773 51.0618 35.9702C51.5339 35.3935 52.0571 35.0382 52.5597 34.8812C52.8478 34.7878 53.1563 34.7769 53.4503 34.8496C53.6896 34.9144 53.8998 35.0586 54.0465 35.2584C54.2099 35.5115 54.2903 35.8092 54.2765 36.1101V38.8929C54.2765 38.9929 54.3162 39.0889 54.387 39.1596C54.4577 39.2303 54.5537 39.2701 54.6537 39.2701C54.7537 39.2701 54.8497 39.2303 54.9204 39.1596C54.9912 39.0889 55.0309 38.9929 55.0309 38.8929V36.1065C55.0438 35.6514 54.9117 35.204 54.6537 34.8289C54.4072 34.4841 54.0484 34.2359 53.6389 34.1268Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M60.0463 37.9797C59.6955 38.3281 59.2212 38.5237 58.7267 38.5237C58.2323 38.5237 57.758 38.3281 57.4072 37.9797C57.0588 37.6289 56.8632 37.1546 56.8632 36.6601C56.8632 36.1657 57.0588 35.6914 57.4072 35.3406C57.7593 34.9938 58.2331 34.7986 58.7273 34.7967C59.096 34.7969 59.4564 34.9064 59.7628 35.1113C60.0693 35.3162 60.3082 35.6073 60.4494 35.9479C60.5905 36.2885 60.6275 36.6633 60.5558 37.0249C60.4841 37.3865 60.3068 37.7188 60.0463 37.9797ZM58.7273 34.0532C58.0457 34.0679 57.3969 34.3491 56.9201 34.8364C56.4432 35.3237 56.1761 35.9783 56.1761 36.6601C56.1761 37.3419 56.4432 37.9966 56.9201 38.4839C57.3969 38.9712 58.0457 39.2523 58.7273 39.2671C59.409 39.2523 60.0578 38.9712 60.5346 38.4839C61.0115 37.9966 61.2785 37.3419 61.2785 36.6601C61.2785 35.9783 61.0115 35.3237 60.5346 34.8364C60.0578 34.3491 59.409 34.0679 58.7273 34.0532Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M66.3916 37.9797C66.0407 38.328 65.5671 38.5246 65.0726 38.5273C64.704 38.527 64.3436 38.4175 64.0372 38.2126C63.7307 38.0077 63.4918 37.7166 63.3506 37.376C63.2095 37.0354 63.1725 36.6607 63.2442 36.299C63.3159 35.9374 63.4932 35.6051 63.7537 35.3442C64.1052 34.9973 64.5788 34.802 65.0726 34.8003C65.4406 34.8013 65.8 34.911 66.1057 35.1157C66.4114 35.3205 66.6498 35.611 66.7907 35.9509C66.9317 36.2907 66.9691 36.6647 66.898 37.0257C66.827 37.3867 66.6508 37.7186 66.3916 37.9797ZM65.0824 34.0532C64.7401 34.0528 64.4011 34.1201 64.085 34.2513C63.7688 34.3824 63.4817 34.5748 63.2402 34.8174C63.2096 34.8425 63.1814 34.8707 63.1562 34.9013V34.4304C63.1562 34.3304 63.1165 34.2344 63.0458 34.1637C62.975 34.093 62.8791 34.0532 62.7791 34.0532C62.679 34.0532 62.5831 34.093 62.5123 34.1637C62.4416 34.2344 62.4019 34.3304 62.4019 34.4304V41.843C62.4019 41.943 62.4416 42.0389 62.5123 42.1097C62.5831 42.1804 62.679 42.2201 62.7791 42.2201C62.8791 42.2201 62.975 42.1804 63.0458 42.1097C63.1165 42.0389 63.1562 41.943 63.1562 41.843V38.419C63.1866 38.4445 63.2147 38.4726 63.2402 38.5029C63.5433 38.8059 63.9165 39.0295 64.3267 39.1538C64.7369 39.2781 65.1714 39.2994 65.5917 39.2157C66.012 39.132 66.4052 38.9459 66.7365 38.6739C67.0678 38.4019 67.3268 38.0525 67.4908 37.6565C67.6547 37.2605 67.7185 36.8302 67.6764 36.4036C67.6343 35.9771 67.4877 35.5676 67.2495 35.2112C67.0114 34.8549 66.689 34.5628 66.311 34.3608C65.933 34.1588 65.511 34.0532 65.0824 34.0532Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M69.6088 36.0841C69.7021 35.7795 69.8693 35.5028 70.0956 35.2786C70.2434 35.129 70.4194 35.0102 70.6134 34.9292C70.8074 34.8481 71.0156 34.8064 71.2259 34.8064C71.4362 34.8064 71.6444 34.8481 71.8384 34.9292C72.0325 35.0102 72.2085 35.129 72.3563 35.2786C72.5811 35.507 72.7531 35.7819 72.86 36.0841H69.6088ZM72.8868 34.7456C72.6716 34.5251 72.4141 34.3503 72.1298 34.2315C71.8455 34.1128 71.5401 34.0526 71.232 34.0545C70.9234 34.0494 70.6171 34.1081 70.3323 34.227C70.0476 34.346 69.7905 34.5225 69.5772 34.7456C68.6768 35.719 68.6878 36.7667 69.0431 37.824C69.202 38.2748 69.5131 38.656 69.9228 38.9021C70.3395 39.162 70.8253 39.2893 71.316 39.2671C71.915 39.245 72.5045 39.11 73.0535 38.8692C73.1017 38.852 73.1458 38.825 73.1832 38.7901C73.2205 38.7551 73.2504 38.713 73.2709 38.6661C73.2914 38.6192 73.3021 38.5686 73.3024 38.5175C73.3027 38.4663 73.2925 38.4156 73.2726 38.3685C73.2526 38.3214 73.2232 38.2789 73.1862 38.2436C73.1492 38.2082 73.1054 38.1808 73.0574 38.163C73.0095 38.1451 72.9584 38.1373 72.9073 38.1399C72.8562 38.1425 72.8062 38.1555 72.7603 38.1781C72.3012 38.3889 71.8049 38.5063 71.3001 38.5237C70.9548 38.536 70.6132 38.449 70.3158 38.273C70.0521 38.0934 69.8479 37.8392 69.7293 37.543C69.649 37.3193 69.5932 37.0875 69.5626 36.8519H73.028C73.2166 36.8519 73.8347 36.8932 73.5147 35.8359C73.3997 35.4248 73.1829 35.0494 72.8844 34.7444L72.8868 34.7456Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M75.3276 36.0843C75.4203 35.7795 75.5876 35.5026 75.8144 35.2788C75.9623 35.1292 76.1384 35.0104 76.3325 34.9293C76.5267 34.8483 76.735 34.8065 76.9453 34.8065C77.1557 34.8065 77.364 34.8483 77.5582 34.9293C77.7523 35.0104 77.9284 35.1292 78.0763 35.2788C78.3007 35.5073 78.4723 35.7823 78.5789 36.0843H75.3276ZM79.3162 36.4773V36.2023C79.2991 36.0785 79.2715 35.9564 79.2335 35.8373C79.1198 35.4249 78.9034 35.0482 78.6044 34.7422C78.3895 34.5216 78.1323 34.3467 77.8481 34.228C77.564 34.1092 77.2588 34.0491 76.9508 34.0511C76.6422 34.0459 76.3359 34.1046 76.0511 34.2235C75.7663 34.3425 75.5092 34.5191 75.296 34.7422C74.3956 35.7156 74.4053 36.7633 74.7618 37.8206C74.9205 38.2716 75.2316 38.6529 75.6416 38.8987C76.0583 39.1586 76.5441 39.2859 77.0348 39.2637C77.6338 39.2416 78.2233 39.1066 78.7723 38.8658C78.8205 38.8485 78.8646 38.8216 78.902 38.7867C78.9394 38.7517 78.9692 38.7095 78.9897 38.6627C79.0102 38.6158 79.0209 38.5652 79.0212 38.5141C79.0215 38.4629 79.0114 38.4122 78.9914 38.3651C78.9714 38.318 78.942 38.2755 78.905 38.2402C78.868 38.2048 78.8242 38.1774 78.7762 38.1596C78.7283 38.1417 78.6772 38.1339 78.6261 38.1365C78.575 38.1391 78.525 38.1521 78.4791 38.1747C78.0201 38.3855 77.5237 38.5029 77.019 38.5203C76.6736 38.5326 76.332 38.4456 76.0346 38.2696C75.7706 38.0903 75.5663 37.836 75.4481 37.5396C75.368 37.3157 75.3117 37.0841 75.2802 36.8484H78.7468C78.8843 36.8497 79.2493 36.8716 79.3126 36.4773H79.3162Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M49.8071 48.9919H45.894V43.3059H49.4226C49.4832 43.3055 49.5437 43.3088 49.6039 43.3156C50.1417 43.3753 52.4901 43.7817 52.4901 46.3004C52.4901 48.9894 49.8047 48.9894 49.8047 48.9894L49.8071 48.9919ZM49.116 41.1389H43.6917V55.639H45.894V51.311H49.352C50.5126 51.3223 51.6548 51.0214 52.6592 50.4398C53.8455 49.7377 55.0307 48.5003 55.0307 46.3612C55.0307 44.3548 53.9891 43.082 52.8819 42.2948C51.7768 41.528 50.4609 41.1232 49.116 41.1364V41.1389Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M60.4833 53.6417C59.838 53.6417 59.2073 53.4504 58.6707 53.0921C58.1342 52.7337 57.7159 52.2243 57.4688 51.6283C57.2216 51.0323 57.1567 50.3764 57.2822 49.7435C57.4078 49.1106 57.7181 48.5291 58.174 48.0725C58.6299 47.6159 59.2109 47.3048 59.8436 47.1783C60.4763 47.0518 61.1323 47.1158 61.7287 47.362C62.3251 47.6083 62.8351 48.0258 63.1943 48.5618C63.5534 49.0978 63.7456 49.7283 63.7466 50.3735V50.382C63.746 51.247 63.4018 52.0763 62.7899 52.6875C62.1779 53.2988 61.3482 53.642 60.4833 53.6417ZM63.7466 45.3312V46.3521C62.9856 45.7344 62.0651 45.345 61.0918 45.229C60.1185 45.113 59.1323 45.2751 58.2473 45.6966C57.3624 46.1181 56.615 46.7816 56.0918 47.6105C55.5685 48.4393 55.2908 49.3994 55.2908 50.3796C55.2908 51.3597 55.5685 52.3199 56.0918 53.1487C56.615 53.9775 57.3624 54.6411 58.2473 55.0626C59.1323 55.4841 60.1185 55.6462 61.0918 55.5302C62.0651 55.4141 62.9856 55.0247 63.7466 54.4071V55.5618H65.9465V45.3312H63.7466Z"
                                            fill="#E8451E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M66.9368 45.1915H69.8789L73.3309 51.7986L76.6611 45.1915H79.3125V45.2098L71.4059 59.9265H68.8155L71.8342 54.4572L66.9368 45.1915Z"
                                            fill="#E8451E" />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_681_14896">
                                        <rect width="91.125" height="91.125"
                                            rx="6.75" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1_681_14896">
                                        <rect width="67.5" height="29.5516"
                                            fill="white"
                                            transform="translate(11.8125 30.375)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <div class="credit-card-chip">
                                <img src="{{ asset('image/icon/chip.png') }}"
                                    alt="">
                            </div>
                            <div class="credit-card-holder">John Doe</div>
                            <div class="credit-card-number">1234 5678 9000 1234</div>
                            <div class="credit-card-valid">12/24</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
    </div>
</div>

<!--end::Row-->
<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-5">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Chart widget 26-->
        <div class="card card-flush overflow-hidden h-xl-100">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-4 mb-1">Transaction
                        (-)</span>
                    <span class="fs-7 fw-semibold text-gray-500">Transactions in
                        {{ date('F, Y') }}</span>
                </h3>

                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                    <div data-kt-daterangepicker="true"
                        data-kt-daterangepicker-opens="left"
                        class="btn btn-sm btn-light d-flex align-items-center px-2">
                        <!--begin::Display range-->
                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                        <!--end::Display range-->
                        <i
                            class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                    </div>
                    <!--end::Daterangepicker-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div
                class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
                <!--begin::Info-->
                <div class="px-9 mb-5">
                </div>
                <!--end::Info-->
                <!--begin::Chart-->
                <div id="kt_charts_widget_26" class="min-h-auto ps-4 pe-6"
                    data-kt-chart-info="Transactions" style="height: 400px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Chart widget 26-->
    </div>

    <div class="col-xl-6">
        <!--begin::Charts Widget 2-->
        <div class="card card-flush overflow-hidden h-xl-100">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-4 mb-1">Recent History </span>
                    <span class="text-muted fw-semibold fs-7">Income & Expense</span>
                </h3>
                <!--begin::Toolbar-->
                <div class="card-toolbar" data-kt-buttons="true">
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                        id="kt_charts_widget_2_year_btn">Year</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                        id="kt_charts_widget_2_month_btn">Month</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                        id="kt_charts_widget_2_week_btn">Week</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_2_chart" style="height: 400px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->

    <!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-8">
        <!--begin::Table widget 7-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h4 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Transaction List</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-7">All
                        Transaction</span>
                </h4>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                    <div data-kt-daterangepicker="true"
                        data-kt-daterangepicker-opens="left"
                        class="btn btn-flex btn-sm btn-light d-flex align-items-center px-4">
                        <!--begin::Display range-->
                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                        <!--end::Display range-->
                        <i
                            class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                    </div>
                    <!--end::Daterangepicker-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0"
                        id="kt_ecommerce_sales_table">
                        <!--begin::Table head-->
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Name Category</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($transactions as $itemTransaction)
                                <tr>
                                    <td>{{ $itemTransaction->category->type }}</td>
                                    <td>{{ $itemTransaction->description }}</td>
                                    <td>{{ $itemTransaction->category->name }}</td>
                                    <td>{{ $itemTransaction->date }}</td>
                                    <td>Rp.
                                        {{ number_format($itemTransaction->amount, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Table widget 7-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::List widget 22-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">List Assets</span>
                    {{-- <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social
                        visitors</span> --}}
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Item-->
                @foreach ($assets as $AssetItem)
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-3">
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-abstract-24 fs-2x text-info">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#"
                                    class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $AssetItem->name }}
                                </a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="fw-semibold fs-7 d-block text-start ps-0">Rp.
                                    {{ number_format($AssetItem->value, 0, '', '.') }}</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    @if (!$loop->last)
                        <div class="separator separator-dashed my-4"></div>
                    @endif
                @endforeach

                <!--end::Separator-->

            </div>
            <!--end::Body-->
        </div>
        <!--end::List widget 22-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

@endsection
