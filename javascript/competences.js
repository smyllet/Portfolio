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
        y: 40
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
        colors: ["#31cdde","#1d636b","#2b8994","#2acadb","#76d3de","#19b1c2","#2ccadb","#2c8a94","#44eafc"],
        title: {
            style: {
                display: 'none'
            }
        },
        legend: {
            itemStyle: {
                color: 'white'
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
                size: 350,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    color: 'white',
                    style: {
                        textOutline: 0
                    }
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        series: [{
            name: seriesName,
            type: 'pie',
            colorByPoint: true,
            data: data
        }]
    });
}