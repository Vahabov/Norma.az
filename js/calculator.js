$(document).ready(function () {

    const data = {
        'tr': {
          minWeightPrice: 2.5,
          halfWeightPrice: 3.5,
          bigHalfWeightPrice: 4.5,
          weightPrice: 5.5,
        },
        'usa': {
            minWeightPrice: 2.5,
            halfWeightPrice: 3.5,
            bigHalfWeightPrice: 4.5,
            weightPrice: 5.5,
        },
        'ch': {
            minWeightPrice: 2.5,
            halfWeightPrice: 3.5,
            bigHalfWeightPrice: 4.5,
            weightPrice: 5.5,
        }
    };

    $("#calculate").click(function(e){
        e.preventDefault();
        calculate();
    });

    $("#reset_calculator").click(function (e) {
        e.preventDefault();
        $("#count").val('');
        $('#length').val('');
        $("#width").val('');
        $("#height").val('');
        $("#weight").val('');
        $('.all_count').text('$0,00');
    });

    function calculate() {
        let cm = 100;
        let country = $("#country").val();
        let region = $("#region").val();
        let count = $("#count").val();
        let lengthType = $("#length-type").val();
        let widthType = $("#width-type").val();
        let heightType = $("#height-type").val();
        let weightType = $("#weight-type").val();

        let length = $('#length').toCm(lengthType);
        let width  = $("#width").toCm(widthType);
        let height  = $("#height").toCm(heightType);
        let weight = $("#weight").toKq(weightType);

        console.log(weight)

        // let weightResult = (length > cm || width > cm || height > cm) ? dimensionalWeight(width, length, height, weight) : weight;
        // console.log(weightResult)
        // let result = 0;
        //
        // if (weightResult ==0) {
        //     result = (count * data[country].minWeightPrice ).toFixed(2);
        // }
        // else if (weightResult > 0 && weightResult <= 0.25) {
        //     result = (count * data[country].minWeightPrice * weightResult).toFixed(2);
        // } else if (weightResult > 0.25 && weightResult <= 0.5) {
        //     result = (count * data[country].halfWeightPrice * weightResult).toFixed(2);
        // } else if (weightResult > 0.5 && weightResult <= 0.7) {
        //     result = (count * data[country].bigHalfWeightPrice * weightResult).toFixed(2);
        // } else {
        //     result = (count * data[country].weightPrice * weightResult).toFixed(2);
        // }
        $.ajax({
            method: 'POST',
            data: {
                length: length,
                width: width,
                height: height,
                weight: weight,
                count: count,
                country: country,
                region: region

            },
            url: '/calculate',
            success: function (result) {
                $('.all_count').text('$' + result);

            }
        })

    }

    $.fn.extend({
        toCm: function (type) {
            var val = this.val();

            function typeFactory(type) {
                switch (type) {
                    case 'sm':
                        return 1;
                    case 'm':
                        return 100;
                    case 'dm':
                        return 10;
                    default:
                        return val;
                }
            }

            return (val * typeFactory(type)).toFixed(2);
        },
        toKq: function (type) {
            var val = this.val();
            function typeFactory(type) {
                switch (type) {
                    case 'kq':
                        return 1;
                    case 'qram':
                        return 1000;
                    default:
                        return val;
                }
            }

            return (val / typeFactory(type)).toFixed(3);
        }
    });

    function dimensionalWeight(width, length, height, weight) {
        var dimensionalWeight = ((width * length * height) / 6000).toFixed(2);

        if (parseFloat(dimensionalWeight) > parseFloat(weight)) {
            return dimensionalWeight;
        } else {
            return weight;
        }
    }

    /*function getVal(selector) {

        var val = selector.val();

        function typeFactory(type) {
            switch (type) {
                case 'sm':
                    return 0.39;
                case 'm':
                    return 39.37;
                case 'dm':
                    return 3.93;
                default:
                    return val;
            }
        }

        return {
            toInch: function (type) {
                return (val * typeFactory(type)).toFixed(2)
            }
        }
    }*/
    function calculateCurrency(currencies,cur1_val,cur1_currency,cur2_val,cur2_currency,target){

        // let currency_pair = cur1_currency + '-' + cur2_currency;
        // let selected_currency = currencies.find(function(el) {
        //     return el.name == currency_pair;
        // })
        // console.log(currency_pair)
        // $('#to').val((selected_currency.val * cur1_val).toFixed(2))

        // if(target != 'to'){
        //     let currency_pair = cur1_currency + '-' + cur2_currency;
        //     let selected_currency = currencies.find(function(el) {
        //         return el.name == currency_pair;
        //     })
        //     $('#to').val((selected_currency.val * cur1_val).toFixed(2))
        // } else {
        //     let currency_pair = cur2_currency + '-' + cur1_currency;
        //     let selected_currency = currencies.find(function(el) {
        //         return el.name == currency_pair;
        //     })
        //     $('#from').val((selected_currency.val * cur2_val).toFixed(2))
        // }
    }

    $("#reset_currency").click(function (e) {
        e.preventDefault();
        $("#from").val('');
        $('#to').val('');
    });

    $("#currency").bind("change keyup", function(e){

        let target = e.target.id;
        let cur1_val = $('#from').val();
        let cur1_currency = $('#from_currency').val();
        let cur2_val = $('#to').val();
        let cur2_currency = $('#to_currency').val();

        if( cur1_currency != cur2_currency ){
            setTimeout(function () {

                $.ajax({
                    method: 'GET',
                    url: '/calculate-currency',
                    success: function (result) {
                        if (result.status === 200) {
                            let currency_pair = cur1_currency + '-' + cur2_currency;
                            let selected_currency = result.currencies.find(function(el) {
                                return el.name == currency_pair;
                            })
                            console.log(cur1_val)
                            $('#to').val((selected_currency.val * cur1_val).toFixed(2))
                        } else{
                            console.log('error')
                        }
                    }
                })
            }, 100)
        } else if(cur1_currency == cur2_currency){
            $('#to').val('');
        }

    });



});
