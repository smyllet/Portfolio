$(document).ready(() => {
    initPie('pie_skills', 'Compétence', [{
        name: 'Développement',
        y: 60
    }, {
        name: 'Système',
        y: 40
    }])

    initPie('pie_development', 'Développement', [{
        name: 'Node JS / Javascript',
        y: 35
    }, {
        name: 'SQL',
        y: 20
    }, {
        name: 'Java',
        y: 20
    }, {
        name: 'PHP',
        y: 10
    }, {
        name: 'Python',
        y: 6
    }, {
        name: 'Flutter',
        y: 5
    }, {
        name: 'HTML / CSS',
        y: 4
    }])

    initPie('pie_system', 'Système', [{
        name: 'Windows',
        y: 30
    }, {
        name: 'Linux',
        y: 15
    }, {
        name: 'Installation Réseau',
        y: 20
    }, {
        name: 'Git',
        y: 15
    }, {
        name: 'Docker',
        y: 10
    }, {
        name: 'Hardware',
        y: 5
    }, {
        name: 'VOIP',
        y: 3
    }, {
        name: 'Autres',
        y: 2
    }])
})

function initPie(idContainer, seriesName, data) {
    Highcharts.chart(idContainer, {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            borderWidth: 0
        },
        colors: ["#31cdde","#1d636b","#2b8994","#2acadb","#76d3de","#19b1c2","#2ccadb","#2c8a94","#44eafc"],
        title: {
            style: {
                display: 'none'
            }
        },
        legend: {
            itemStyle: {
                color: '#1C1C24'
            },
            itemHoverStyle:{
                color: '#D4D4D4'
            }
        },
        plotOptions: {
            series: {
                // borderColor: false
            },
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                size: "100%",
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    color: '#1C1C24',
                    style: {
                        textOutline: 0
                    }
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                chartOptions: {
                    legend: {
                        enabled: true,
                        width: 400,
                        floating: false,
                        align: 'left',
                        x: 50
                    },
                    plotOptions: {
                        pie: {
                            size: "85%",
                            showInLegend: true,
                            dataLabels: {
                                format: "{point.percentage}%",
                                distance: -20
                            }
                        }
                    }
                }
            }]
        },
        series: [{
            name: seriesName,
            type: 'pie',
            colorByPoint: true,
            data: data
        }]
    });
}