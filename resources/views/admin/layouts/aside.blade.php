<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky"
    data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}" data-kt-sticky-left="auto"
    data-kt-sticky-top="94px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <!--begin::Aside nav-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1" id="kt_aside_menu_wrapper"
        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100"
            id="#kt_aside_menu" data-kt-menu="true">
            <!--begin::Heading-->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Menu</span>
                </div>
            </div>
            <!--end::Heading-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('dashboard.index') }}" class="menu-link {!! $pageTitle == 'Dashboard' ? 'active' : '' !!}">
                    <span class="menu-title">Dashboard</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-chart-simple-3 fs-2 text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('bank.index') }}" class="menu-link {!! $pageTitle == 'Banks' ? 'active' : '' !!}">
                    <span class="menu-title text-grey">Bank</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-two-credit-cart fs-2 text-dark">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('type.index') }}" class="menu-link {!! $pageTitle == 'Types' ? 'active' : '' !!}">
                    <span class="menu-title text-grey">Type</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-two-credit-cart fs-2 text-dark">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('category.index') }}" class="menu-link {!! $pageTitle == 'Category' ? 'active' : '' !!}">
                    <span class="menu-title">Category</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('account.index') }}" class="menu-link {!! $pageTitle == 'Accounts' ? 'active' : '' !!}">
                    <span class="menu-title text-grey">Accounts</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-two-credit-cart fs-2 text-dark">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('transaction.index') }}" class="menu-link {!! $pageTitle == 'Transaction' ? 'active' : '' !!}">
                    <span class="menu-title">Transaction</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-cheque fs-2 text-danger">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Collapse-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('budget.index') }}" class="menu-link {!! $pageTitle == 'Budget' ? 'active' : '' !!}">
                    <span class="menu-title">Budget</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-finance-calculator fs-2 text-warning">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Collapse-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('asset.index') }}" class="menu-link {!! $pageTitle == 'Asset' ? 'active' : '' !!}">
                    <span class="menu-title">Asset</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-bank fs-2 text-info">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Collapse-->
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('user.index') }}" class="menu-link {!! $pageTitle == 'User' ? 'active' : '' !!}">
                    <span class="menu-title">User</span>
                    <div class="symbol symbol-40px ms-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-badge fs-2 text-dark">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                </a>
            </div>
            <!--end::Collapse-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside nav-->
</div>
