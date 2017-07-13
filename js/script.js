$(document).ready(function() {

	$().fancybox({
		selector : '[data-fancybox="images"]'
	});

Highcharts.setOptions({
    lang: {
        rangeSelectorZoom: 'период'
    }
});

var series_charts = [{
	name: 'Баланс',
	type:'area',
	threshold:null,
	tooltip: {
        valueDecimals: 8,
        valueSuffix: ' ВТС',
        },
        fillColor: {
            linearGradient: {
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 1
            },
            stops: [
                [0, Highcharts.getOptions().colors[0]],
                [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
        }, 
        data: resultJsonBalans},
        {
        	name: 'Выплачено',
        	type:'column',
        	data: resultJsonMax,
        	threshold: null,
            yAxis: 1,
            color: 'rgba(184, 178, 186, 0.71)',
            tooltip: {
                valueSuffix: ' ВТС'
            }
        }, 
        {
            name: 'Процент системы',
            type:'column',
            data: resultJsonMin,
            threshold: null,
            yAxis: 1,
            color: 'rgba(123, 121, 120, 0.46)',
            tooltip: {
                valueSuffix: ' ВТС'
            }
        }]

    // Create the chart
    Highcharts.stockChart('container', {
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'week',
            text: '1нед'
        }, {
            count: 1,
            type: 'month',
            text: '1мес'
        }, {
            count: 6,
            type: 'month',
            text: '6мес'
        }, {
            count: 1,
            type: 'ytd',
            text: 'Год'
        }, {
            type: 'all',
            text: 'Все'
        }],
        inputEnabled: false,
        selected: 1
    },      

    plotOptions: {
        column: {
            grouping: false,
        }
    },

    title: {
            text: 'Баланс-Выплата-Сбор'
        },

        series: series_charts,

        yAxis: [{
            title: {
                text: 'Баланс'
            }
        },{
            title: {
                text: 'Выплачено'
            },
            opposite: false
        }]

    });


});
