@extends('admin.layouts.index')
@section('style')
    <style>
        .credit-card {
            width: 100%;
            /* max-width: 395px; */
            /* Default width for larger screens */
            height: auto;
            aspect-ratio: 1.72;
            /* Preserves the height ratio based on width */
            border-radius: 10px;
            perspective: 1000px;
        }

        .credit-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: transform 600ms ease;
            transform-style: preserve-3d;
            box-shadow: 0 0 25px 2px rgba(0, 0, 0, 0.2);
        }

        .credit-card-front {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            backface-visibility: hidden;
            background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
        }

        .credit-card-bg {
            position: absolute;
            top: -5%;
            right: -30%;
            width: 100%;
            height: 120%;
            background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
            border-top-left-radius: 100%;
        }

        .credit-card-bg::before {
            content: "";
            position: absolute;
            top: -5%;
            right: -20%;
            width: 100%;
            height: 120%;
            background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
            border-top-left-radius: 100%;
        }

        .credit-card-glow {
            position: absolute;
            top: -140px;
            left: -65px;
            height: 100%;
            width: 120%;
            background: rgba(0, 183, 255, 0.4);
            filter: blur(10px);
            border-radius: 100%;
            transform: skew(-15deg, -15deg);
        }

        .credit-card-contactless {
            position: absolute;
            right: 3%;
            top: 25%;
            transform: scale(0.5);
        }

        .credit-card-chip {
            position: absolute;
            top: 30%;
            left: 6%;
            width: 10%;
            height: 18%;
            border-radius: 5px;
            /* background-color: #000000; */
        }

        .credit-card-chip img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .credit-card-holder {
            position: absolute;
            left: 6%;
            bottom: 30%;
            color: white;
            font-size: 1em;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-number {
            position: absolute;
            left: 6%;
            bottom: 15%;
            color: white;
            font-size: 1em;
            font-weight: 600;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-valid {
            position: absolute;
            right: 6%;
            bottom: 30%;
            color: white;
            font-size: 0.8em;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-type {
            position: absolute;
            right: 6%;
            bottom: 15%;
            color: white;
            font-size: 0.8em;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .logo {
            position: absolute;
            right: 6%;
            top: 12%;
            width: 18%;
            border-radius: 5px
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .credit-card {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .credit-card {
                width: 100%;
            }
        }
    </style>
@endsection
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
                <a href="{{ route('account.create') }}" class="btn btn-primary">Add {{ $pageTitle }}</a>
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
                        <th class="text-center min-w-100px">Bank</th>
                        <th class="text-center min-w-100px">Account</th>
                        <th class="text-center min-w-100px">Status</th>
                        <th class="text-center min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($account as $data)
                        <tr>
                            <td class="text-center pe-0">
                                <span class="fw-bold">{{ $data->id }}</span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold">{{ $data->bank->name }}</span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold">{{ $data->account_name }}</span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold">{{ $data->status }}</span>
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
                                        <a href="{{ route('account.show', $data->id) }}" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('account.edit', $data->id) }}" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="javascript:void(0);" class="menu-link px-3"
                                            data-kt-ecommerce-order-filter="delete_row"
                                            onclick="event.preventDefault(); deleteAccount('{{ route('account.destroy', $data->id) }}');">
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

    <!--begin::Products-->
    <div class="row g-5 g-xl-5 mb-5 mb-xl-5">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <div class="card-header my-2">
                <div class="card-title d-flex justify-content-between fs-3">
                    <span class="text-start">My Accounts</span>
                </div>
            </div>
            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-5">
                @foreach ($account as $accounts)
                    <div class="col">
                        <div class="credit-card">
                            <div class="credit-card-inner">
                                <div class="credit-card-front">
                                    <div class="credit-card-bg"></div>
                                    <div class="credit-card-glow"></div>

                                    <img width="92" src="{{ asset($pathImg . $accounts->bank->image) }}" alt=""
                                        class="logo">

                                    <div class="credit-card-chip">
                                        <img src="{{ asset('image/icon/chip.png') }}" alt="">
                                    </div>
                                    <div class="credit-card-holder">{{ $accounts->account_name }}</div>
                                    <div class="credit-card-number">Rp. 1.000.000.000</div>
                                    <div class="credit-card-valid">
                                        ({{ $accounts->bank->name }})
                                    </div>
                                    <div class="credit-card-type">
                                        ({{ $accounts->bank->type }})
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--end::Row-->
        </div>
    </div>
@endsection
