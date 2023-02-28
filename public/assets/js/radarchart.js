var options = {
    series: [{
        name: 'Player',
        data: [100, 99, 98, 100, 55, 89],
    }],
    chart: {
        // width: "100%",
        height: "100%",
        type: 'radar',
    },
    // title: {
    //     text: 'Basic Radar Chart'
    // },
    xaxis: {
        categories: ['Pace', 'Shooting', 'Passing', 'Dribbling', 'Defending', 'Physical']
    }
};

var chart = new ApexCharts(document.querySelector("#radarChartPlayer"), options);
chart.render();
