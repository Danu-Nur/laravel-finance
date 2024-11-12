<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    @include('admin.layouts.head')
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
            width: 12%;
            height: 20%;
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
            bottom: 15%;
            color: white;
            font-size: 1em;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-number {
            position: absolute;
            left: 6%;
            bottom: 30%;
            color: white;
            font-size: 1em;
            font-weight: 600;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-valid {
            position: absolute;
            right: 6%;
            bottom: 15%;
            color: white;
            font-size: 1em;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.3));
        }

        .credit-card-valid::before {
            content: "GOOD THRU";
            position: absolute;
            top: 1px;
            left: -40px;
            width: 50px;
            font-size: 0.6em;
        }

        .logo {
            position: absolute;
            right: 6%;
            top: 12%;
            width: 20%;
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
    <script>
        console.log({{ $amountTransactionExpense }});
        console.log({!! $sumPerMonthExpense !!});
        console.log({!! $sumPerMonthIncome !!});
        console.log({!! $sumPerMonthNetIncome !!});

        var KTChartsWidget26 = function() {
            var e = {
                    self: null,
                    rendered: !1
                },
                t = function() {
                    var t = document.getElementById("kt_charts_widget_26");
                    if (t) {
                        var a = parseInt(KTUtil.css(t, "height")),
                            l = KTUtil.getCssVariableValue("--bs-gray-500"),
                            r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                            o = KTUtil.getCssVariableValue("--bs-primary"),
                            i = KTUtil.getCssVariableValue("--bs-primary"),
                            s = {
                                series: [{
                                        name: "Income",
                                        data: {!! $sumPerMonthIncome !!}
                                    },
                                    {
                                        name: "Expense",
                                        data: {!! $sumPerMonthExpense !!}
                                    },
                                    {
                                        name: "Net",
                                        data: {!! $sumPerMonthNetIncome !!}
                                    }
                                ],
                                chart: {
                                    fontFamily: "inherit",
                                    type: "area",
                                    height: a,
                                    toolbar: {
                                        show: !1
                                    }
                                },
                                plotOptions: {},
                                legend: {
                                    show: !1
                                },
                                dataLabels: {
                                    enabled: !1
                                },
                                fill: {
                                    type: "gradient",
                                    gradient: {
                                        shadeIntensity: 1,
                                        opacityFrom: .4,
                                        opacityTo: 0,
                                        stops: [0, 80, 100]
                                    }
                                },
                                stroke: {
                                    curve: "smooth",
                                    show: !0,
                                    width: 3,
                                    colors: [KTUtil.getCssVariableValue("--bs-gray-500"),
                                        KTUtil.getCssVariableValue("--bs-danger"),
                                        KTUtil.getCssVariableValue("--bs-success")
                                    ]
                                },
                                xaxis: {
                                    tickAmount: 12,
                                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                                        "Nov", "Dec"
                                    ],
                                    // categories: {!! $dateTransactionExpense !!},
                                    axisBorder: {
                                        show: !1
                                    },
                                    axisTicks: {
                                        show: !1
                                    },
                                    labels: {
                                        rotate: -50,
                                        rotateAlways: !0,
                                        style: {
                                            colors: l,
                                            fontSize: "10px"
                                        }
                                    },
                                    crosshairs: {
                                        position: "front",
                                        stroke: {
                                            color: o,
                                            width: 1,
                                            dashArray: 3
                                        }
                                    },
                                    tooltip: {
                                        enabled: !0,
                                        formatter: void 0,
                                        offsetY: 0,
                                        style: {
                                            fontSize: "12px"
                                        }
                                    }
                                },
                                yaxis: {
                                    // max: 36.3,
                                    // min: 0,
                                    tickAmount: 15,
                                    labels: {
                                        style: {
                                            colors: l,
                                            fontSize: "10px"
                                        },
                                        formatter: function(e) {
                                            return "Rp " + e.toLocaleString('id-ID')
                                        }
                                    }
                                },
                                states: {
                                    normal: {
                                        filter: {
                                            type: "none",
                                            value: 0
                                        }
                                    },
                                    hover: {
                                        filter: {
                                            type: "none",
                                            value: 0
                                        }
                                    },
                                    active: {
                                        allowMultipleDataPointsSelection: !1,
                                        filter: {
                                            type: "none",
                                            value: 0
                                        }
                                    }
                                },
                                tooltip: {
                                    style: {
                                        fontSize: "12px"
                                    },
                                    y: {
                                        formatter: function(e) {
                                            return "Rp " + e.toLocaleString('id-ID')
                                        }
                                    }
                                },
                                colors: [KTUtil.getCssVariableValue("--bs-gray-500"),
                                    KTUtil.getCssVariableValue("--bs-danger"),
                                    KTUtil.getCssVariableValue("--bs-success")
                                ],
                                grid: {
                                    borderColor: r,
                                    strokeDashArray: 4,
                                    yaxis: {
                                        lines: {
                                            show: !0
                                        }
                                    }
                                },
                                markers: {
                                    strokeColor: o,
                                    strokeWidth: 3
                                }
                            };
                        e.self = new ApexCharts(t, s), setTimeout((function() {
                            e.self.render(), e.rendered = !0
                        }), 200)
                    }
                };
            return {
                init: function() {
                    t(), KTThemeMode.on("kt.thememode.change", (function() {
                        e.rendered && e.self.destroy(), t()
                    }))
                }
            }
        }();
        "undefined" != typeof module && (module.exports = KTChartsWidget26), KTUtil.onDOMContentLoaded((function() {
            KTChartsWidget26.init()
        }));

        (function() {
            var e = document.getElementById("kt_charts_widget_2_chart");
            if (!e) return;

            var chartInstance = {
                self: null,
                rendered: false
            };

            var renderChart = function() {
                var chartHeight = parseInt(KTUtil.css(e, "height")),
                    colorGray500 = KTUtil.getCssVariableValue("--bs-gray-500"),
                    colorGray200 = KTUtil.getCssVariableValue("--bs-gray-200"),
                    chartOptions = {
                        series: [{
                                name: "Income",
                                data: {!! $sumPerMonthIncome !!}
                            },
                            {
                                name: "Expense",
                                data: {!! $sumPerMonthExpense !!}
                            },
                            {
                                name: "Net",
                                data: {!! $sumPerMonthNetIncome !!}
                            }
                        ],
                        chart: {
                            fontFamily: "inherit",
                            type: "bar",
                            height: chartHeight,
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: "70%",
                                borderRadius: 4
                            }
                        },
                        legend: {
                            show: false
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                                "Nov", "Dec"
                            ],
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            labels: {
                                style: {
                                    colors: colorGray500,
                                    fontSize: "10px"
                                }
                            }
                        },
                        yaxis: {
                            labels: {
                                style: {
                                    colors: colorGray500,
                                    fontSize: "11px"
                                },
                                formatter: function(value) {
                                    return 'Rp ' + value.toLocaleString('id-ID');
                                }
                            }
                        },
                        fill: {
                            opacity: 1
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: false,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(val) {
                                    return "Rp " + val.toLocaleString('id-ID');
                                }
                            }
                        },
                        colors: [
                            KTUtil.getCssVariableValue("--bs-gray-500"),
                            KTUtil.getCssVariableValue("--bs-danger"),
                            KTUtil.getCssVariableValue("--bs-success")
                        ],
                        grid: {
                            borderColor: colorGray200,
                            strokeDashArray: 4,
                            yaxis: {
                                lines: {
                                    show: true
                                }
                            }
                        }
                    };

                // Render or re-render the chart
                chartInstance.self = new ApexCharts(e, chartOptions);
                chartInstance.self.render();
                chartInstance.rendered = true;
            };

            renderChart();

            // Re-render on theme mode change
            KTThemeMode.on("kt.thememode.change", function() {
                if (chartInstance.rendered) chartInstance.self.destroy();
                renderChart();
            });
        })();
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
