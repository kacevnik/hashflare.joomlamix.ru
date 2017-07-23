$(document).ready(function() {

    $('.click_chenge_sec').click(function(){
        var flag = $('.btc_change_select li').detach();
        flag.appendTo('.btc_change_list');         

        var flag = $(this).detach();
        flag.appendTo('.btc_change_select');  
  
        $('.btc_change_select').next('i').remove();
        if($('.btc_change_select').attr('data') == 'hide'){
            $('.btc_change_select').attr('data', 'show');
            $('.btc_change_select').after('<i class="fa fa-caret-up"></i>');
            $('.btc_change_list').css({'left': $(this).position().left + 'px', 'display': 'inline-block'});
        }else{
            var curs = getCurs($(this).find('img').attr('src').split('/')[$(this).find('img').attr('src').split('/').length-1].split('.')[0]);
            $('.btc_change_select').attr('data', 'hide');
            $('.btc_change_select').after('<i class="fa fa-caret-down"></i>');
            $('.btc_change_list').css({'display': 'none'});
        }  

    });

    function getCurs(naminal){
        $.post( "../json/get_curs.php", {naminal: naminal}, function(data){
            var result = JSON.parse(data);
            $('.btc_chenge').html(number_format(result.curs, 2, '.', ' '));     
        });
    }

    $('input[name=submit_1]').click(function(){
        var a = $('input[name=help_1_invest]').val();
        var b = $('input[name=help_1_days]').val();
        var c = $('input[name=help_1_proc]').val();
        if(a && b && c){
            $('.help_result_1 .table-responsive').remove();
            $.post( "../json/help_1.php", {sum: a, days: b, proc: c}, function(data){
                var result = JSON.parse(data);
                console.log(result);
                var i = 0;
                var show = '';
                show += '<div class="table-responsive">';
                show += '<div><i>';
                show += 'Курс: ' + number_format(result.curs, 2, '.', ' ') + '$/BTC';
                show += '   Сложность: ' + result.sour.difficulty;
                show += '   Инвестированно: ' + result.sum + '$';
                show += '</i></div>';
                show += '<div class="dataTables_wrapper form-inline" id="DataTables_Table_0_wrapper">';
                show += '<div class="clear"></div>';
                show += '<table class="table table-striped table-bordered table-hover dataTable" style="font-size: 12px;">';
                show += '<thead>';
                show += '<tr role="row">';
                show += '<th class="sorting" colspan="1" rowspan="1" style="width: 80px;" tabindex="0">#День</th>';
                show += '<th class="sorting" colspan="1" rowspan="1" style="width: 80px;" tabindex="0">Профит BTC/день</th>';
                show += '<th class="sorting_desc" colspan="1" rowspan="1" style="width: 80px;" tabindex="0">Профит USD/день</th>';
                show += '<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Баланс</th>';
                show += '<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Реинвестировано сегодня</th>';
                show += '<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Реинвестировано всего</th>';
                show += '</tr>';
                show += '</thead><tbody>';
                console.log(result.data);
                for(var key in result.data){
                    i++;
                    show += '<tr>';
                    show += '<td>день# '+ i +'</td>';
                    show += '<td>'+ result.data[key]['profit_per_day_btc'] +'BTC</td>';
                    show += '<td>'+ result.data[key]['profit_per_day_usd'] +'$</td>';
                    show += '<td>'+ result.data[key]['profit'] +'$</td>';
                    show += '<td>'+ result.data[key]['reinvest'] +'$</td>';
                    show += '<td>'+ result.data[key]['total_reinvest'] +'$</td>';
                    show += '</tr>';
                }
                show += '</tbody></table>';                  
                $('.help_result_1').append(show);             
            });
        }
    });

    function number_format(number, decimals, dec_point, thousands_sep) {
      number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
      var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
          var k = Math.pow(10, prec);
          return '' + (Math.round(n * k) / k)
            .toFixed(prec);
        };
      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
      if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '')
        .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
          .join('0');
      }
      return s.join(dec);
    }

    $('.add_settings input[name="add"]').keyup(function(){
        solution();
    });    

    $('.add_settings input[name="minus"]').keyup(function(){
        solution();
    });

    $('.add_settings input[name="balans"]').val(SetObject.balans_yestoday);

    function solution(){
        $('.add_settings_input_proc').html('');
        $('.add_settings input[name="balans"]').val(SetObject.balans_yestoday);
        var add = $('.add_settings input[name="add"]').val();
        var minus = $('.add_settings input[name="minus"]').val();
        var balans = $('.add_settings input[name="balans"]').val();
        console.log(add);
        console.log(minus);
        console.log(balans);

        if(add && minus && minus/(add/100) != Infinity && add != 0 && minus != 0){
            $('.add_settings_input_proc').html(number_format(minus/(add/100), 2, '.', '')+'%');
            $('.add_settings input[name="balans"]').val(number_format((SetObject.balans_yestoday*1 + add*1 - minus*1), 8, '.', ''));
        }
    }

	$().fancybox({
		selector : '[data-fancybox="images"]'
	});

    $('.show_chart').click(function(){
        if($(this).attr('data') == 'hide'){
            $('#container').slideDown(300);
            showCart();
            $(this).attr('data', 'show');
        }else{
            $('#container').slideUp(300);
            $(this).attr('data', 'hide');
        }
    });

    function showCart(){
        Highcharts.setOptions({
            lang: {
                rangeSelectorZoom: 'период'
            }
        });

    var series_charts = [{
        name: 'Баланс',
        type:'area',
        threshold:null,
        pointStart: 1499212800000,
        pointInterval: 86400000,
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
                pointStart: 1499212800000,
                pointInterval: 86400000,
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
                pointStart: 1499212800000,
                pointInterval: 86400000,
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
                },
                min: 0
            },{
                title: {
                    text: 'Выплачено'
                },
                opposite: false,
                min: 0
            }]

        });
    }


});
