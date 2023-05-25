(function($) {
    "use strict";

    // Home Two All Chart
    // Works Stats
    options = { 
        series: [50, 20, 15], 
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
            "#FEC107",
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
        document.querySelector("#works_chart_2"), 
        options
        )
    );
    chart.render();

    // Sessions Chart 2
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
        },
        colors:['green', 'green', 'green']
    };

    var chart = new ApexCharts(document.querySelector("#sessions_chart_2"), options);
    chart.render();

}(jQuery));