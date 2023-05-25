(function($) {
    "use strict";

    // Home Three All Chart
    // Overview Chart 3
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
        document.querySelector("#overview_chart_3"), 
        options)
    );
    chart.render();

    // Works Stats
    options = { 
        series: [60, 40], 
        chart: { 
            type: "donut", 
            height: 300 
        }, 
        dataLabels: {
            enabled: false
          },
        labels: [
            "Taking Class", 
            "Lesson Discuss", 
            "Lesson Discuss"
        ], 
        colors: [
            "#4FCB8D", 
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
        document.querySelector("#employees_chart_3"), 
        options
        )
    );
    chart.render();

    // Attendance Chart
    var options = {
        series: [
            { name: "Attendance", 
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
        document.querySelector("#attendance_chart"), 
        options
    );
    chart.render();

    // Late Coming Chart
    var options = {
        series: [
            { name: "Late Coming", 
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
        document.querySelector("#late_coming"), 
        options
    );
    chart.render();

    // Absent Chart
    var options = {
        series: [
            { name: "Absent", 
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
        document.querySelector("#absent_chart"), 
        options
    );
    chart.render();
    
    // Total Hiring Chart
    var options = {
        chart: { 
            height: 250, 
            type: "bar", 
            stacked: !0, 
            toolbar: { 
                show: !1 
            }, 
            zoom: { 
                enabled: !0 
            } 
        },
        plotOptions: { 
            bar: { 
                horizontal: !1, 
                columnWidth: "35%", 
                endingShape: "rounded" 
            } 
        },
        dataLabels: { 
            enabled: !1 
        },
        series: [
            { name: "UI/UX Design", data: [50, 30, 30, 50, 50, 43, 36, 52, 24, 18, 36, 48] },
            { name: "Web Development", data: [40, 30, 70, 80, 50, 50, 60, 80, 100, 50, 50, 0] },
            { name: "App Development", data: [50, 30, 30, 50, 50, 43, 36, 52, 24, 18, 36, 48] },
            { name: "Product Manager", data: [40, 30, 70, 80, 50, 70, 80, 50, 40, 100, 0, 100] },
        ],
        xaxis: { 
            categories: ["SAT", "SUN", "MON", "TUE", "WED", "Jun", "THU", "FRI"] 
        },
        colors: ["#4FCB8D", "#1765FD", "#5C31D6", "#FEC107"],
        legend: { position: "top"},
        fill: { opacity: 1 },
    },
    chart = new ApexCharts(
        document.querySelector("#total_hiring_chart"), 
        options
    );
    chart.render();

}(jQuery));