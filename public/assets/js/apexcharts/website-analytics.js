(function($) {
    "use strict";

    // Overview Chart
    var options = {
        chart: { 
            height: 230, 
            type: "area", 
            stacked: !0, 
            toolbar: { 
                show: !1, 
                autoSelected: "zoom" 
            } 
        },
        colors: [
            "#1765fd", 
            "#bbc6cf"
        ],
        dataLabels: { 
            enabled: !1 
        },
        stroke: { 
            curve: "smooth", 
            width: [5, 2], 
            dashArray: [0, 4], 
            lineCap: "round"
        },
        grid: { 
            padding: { 
                left: 0, 
                right: 0 
            }, 
            strokeDashArray: 1
        },
        markers: { 
            size: 0, 
            hover: { 
                size: 0 
            } 
        },
        series: [
            { name: "New Visits", data: [0, 60, 20, 90, 45, 110, 55, 130, 44, 110, 75, 120] },
            { name: "Unique Visits", data: [0, 45, 10, 75, 35, 94, 40, 115, 30, 105, 65, 110] },
        ],
        xaxis: { 
            type: "month", 
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], axisBorder: { 
                show: !0 
            }, 
            axisTicks: { 
                show: !0 
            } 
        },
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 1, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [0, 90, 100] 
            } 
        },
        tooltip: { 
            x: { 
                format: "dd/MM/yy HH:mm" 
            } 
        },
        legend: { 
            position: "bottom", 
            horizontalAlign: "right",  
            show: false 
        },
    };
    (chart = new ApexCharts(
        document.querySelector("#overview_chart"), 
        options)
    );
    chart.render();
    
    // Traffic Chart
    options = { 
        series: [60, 20, 15, 5], 
        chart: { 
            type: "donut", 
            height: 300 
        }, 
        dataLabels: {
            enabled: false
          },
        labels: [
            "Email", 
            "Social Media",
            "Referrals", 
            "Organic Search"
        ], 
        colors: [
            "#4FCB8D", 
            "#5C31D6", 
            "#FEC107",
            "#1765FD", 
        ], 
        legend: { 
            show: !1 
        }, 
        plotOptions: { 
            pie: { 
                donut: { 
                    size: "60%" 
                } 
            } 
        } 
    };
    (chart = new ApexCharts(
        document.querySelector("#traffic_chart"), 
        options
        )
    );
    chart.render();

    // Device Chart
     var walletOptions = {
        series: [65, 50, 30],
        chart: { 
            height: 302, 
            type: "radialBar" 
        },
        plotOptions: {
            radialBar: {
                offsetY: 0,
                startAngle: 0,
                endAngle: 400,
                hollow: { 
                    margin: 5, 
                    size: "10%", 
                    background: "transparent", 
                    image: void 0 
                },
                track: { 
                    show: !0, 
                    startAngle: void 0, 
                    endAngle: void 0, 
                    background: "#f2f2f2", 
                    strokeWidth: "97%", 
                    opacity: 1, 
                    margin: 15, 
                    dropShadow: { 
                        enabled: !1, 
                        top: 0, 
                        left: 0, 
                        blur: 3, 
                        opacity: 0.5 
                    } 
                },
                dataLabels: {
                    name: { 
                        show: !0, 
                        fontSize: "16px", 
                        fontWeight: 600, 
                        offsetY: -10 
                    },
                    value: {
                        show: !0,
                        fontSize: "14px",
                        offsetY: 4,
                        formatter: function (e) {
                            return e + "%";
                        },
                    },
                },
            },
        },
        stroke: { 
            lineCap: "round" 
        },
        colors: [
            "#4FCB8D", 
            "#1765FD", 
            "#FEC107"
        ],
        labels: [
            "Desktop", 
            "Mobile", 
            "Tablet"
        ],
        legend: { 
            show: !1 
        },
    };
    (chart = new ApexCharts(
        document.querySelector("#device_chart"), 
        walletOptions
        )
    );
    chart.render();

    // Click Chart
    var options = {
        series: [
            { name: "CLICK", 
                data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#4FCB8D"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#click_chart"), 
        options
    );
    chart.render();

    // View Chart
    var options = {
        series: [
            { name: "VIEW", 
                data: [0, 50, 70, 5, 42, 15, 47, 75, 65, 19, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#1765FD"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#view_chart"), 
        options
    );
    chart.render();

    // Conversions Chart
    var options = {
        series: [
            { name: "CONVERSIONS", 
                data: [0, 50, 100, 50, 42, 150, 47, 75, 10, 100, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#5C31D6"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#conversions_chart"), 
        options
    );
    chart.render();

    // Bounce Rate Chart
    var options = {
        series: [
            { name: "Bounce Rate (avg)", 
                data: [0, 50, 100, 50, 42, 150, 47, 75, 10, 100, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#5C31D6"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#bounce_rate"), 
        options
    );
    chart.render();

    // Page Views Chart
    var options = {
        series: [
            { name: "Page Views (avg)", 
                data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#4FCB8D"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#page_views"), 
        options
    );
    chart.render();

    // Time On Site Chart
    var options = {
        series: [
            { name: "Time On Site (avg)", 
                data: [0, 50, 100, 50, 42, 150, 47, 75, 10, 100, 14] 
            }
        ],
        chart: { 
            type: "area", 
            height: 50, 
            sparkline: { 
                enabled: !0 
            } 
        },
        stroke: { 
            curve: "smooth", 
            width: 4,
            lineCap: "round" 
        },
        colors: [
            "#5C31D6"
        ],
        fill: { 
            type: "gradient", 
            gradient: { 
                shadeIntensity: 0, 
                inverseColors: !0, 
                opacityFrom: 0, 
                opacityTo: 0, 
                stops: [
                    75, 100, 100, 100
                ] 
            } 
        },
        tooltip: { 
            fixed: { 
                enabled: !1 
            }, 
            x: { 
                show: !1 
            }, 
            marker: { 
                show: !1 
            } 
        },
    },
    chart = new ApexCharts(
        document.querySelector("#time_on_site"), 
        options
    );
    chart.render();

    // Sessions Chart
    var options = {
        chart: {
          height: 230,
          type: "candlestick",
          zoom: {
            enabled: false
          }
        },
        colors: ["#4FCB8D", "#1765FD"],
        series: [{
          data: [{
                x: new Date(15388452e5),
                y: [6595.97, 6602.01, 6588.17, 6602]
            }, {
                x: new Date(1538847e6),
                y: [6602, 6607, 6596.51, 6599.95]
            }, {
                x: new Date(15388488e5),
                y: [6600.63, 6601.21, 6590.39, 6591.02]
            }, {
                x: new Date(15388506e5),
                y: [6591.02, 6603.08, 6591, 6591]
            }, {
                x: new Date(15388524e5),
                y: [6591, 6601.32, 6585, 6592]
            }, {
                x: new Date(15388542e5),
                y: [6593.13, 6596.01, 6590, 6593.34]
            }, {
                x: new Date(1538856e6),
                y: [6593.34, 6604.76, 6582.63, 6593.86]
            }, {
                x: new Date(15388578e5),
                y: [6593.86, 6604.28, 6586.57, 6600.01]
            }, {
                x: new Date(15388596e5),
                y: [6601.81, 6603.21, 6592.78, 6596.25]
            }, {
                x: new Date(15388614e5),
                y: [6596.25, 6604.2, 6590, 6602.99]
            }, {
                x: new Date(15388632e5),
                y: [6602.99, 6606, 6584.99, 6587.81]
            }, {
                x: new Date(1538865e6),
                y: [6587.81, 6595, 6583.27, 6591.96]
            }, {
                x: new Date(15388668e5),
                y: [6591.97, 6596.07, 6585, 6588.39]
            }, {
                x: new Date(15388686e5),
                y: [6587.6, 6598.21, 6587.6, 6594.27]
            }, {
                x: new Date(15388704e5),
                y: [6596.44, 6601, 6590, 6596.55]
            }, {
                x: new Date(15388722e5),
                y: [6598.91, 6605, 6596.61, 6600.02]
            }, {
                x: new Date(1538874e6),
                y: [6600.55, 6605, 6589.14, 6593.01]
            }, {
                x: new Date(15388758e5),
                y: [6593.15, 6605, 6592, 6603.06]
            }]
        }],
        title: {
            text: "",
            align: "left"
        },
        xaxis: {
            type: "datetime",
            labels: {
                minHeight: 20,
                maxHeight: 20,
            }
        },
        yaxis: {
            tooltip: {
                enabled: !0
            },
            labels: {
                offsetX: -1,
                offsetY: 0,
                minWidth: 20,
                maxWidth: 20,
            }
        },
        plotOptions: {
            candlestick: {
                    colors: {
                    upward: '#4FCB8D',
                    downward: '#1765FD'
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#sessions_chart"), options);
    chart.render();

}(jQuery));