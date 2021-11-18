(function($) {
    var Pass = {
        constant: {
            tempUrl: 'http://localhost/ecd_temp/temp/'
        },
        params: {
            personal: {},
            personalFamily: [],
            questionAnswer: [],
            goodsDetail: [],
            rating: 0
        },
        monthList: function(month) {
            var dataList = {
                1: 'Jan', 2: 'Feb', 3: 'Mar', 4: 'Apr', 5: 'May', 6: 'Jun', 7: 'Jul', 8: 'Aug', 9: 'Sep', 10: 'Oct', 11: 'Nov', 12: 'Dec'
            };
            return dataList[month];
        },
        setIdr: function(value) {
            var output = value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            return output;
        },
        unsetIdr: function(value) {
            newValue = value.split('.').join('');
            return newValue;
        },
        init: function() {
            $('.bc-link').on('click', function() {
                // console.log('ok');
                $('.bc-link-menu').removeClass('bc-active');
                $(this).closest('.bc-link-menu').addClass('bc-active');

                var value = $(this).attr('value');
                $('.bc-page').addClass('d-none');
                if (value == '0') {
                    $('.passengers').removeClass('d-none');
                } else if (value == '1') {
                    $('.family-container').removeClass('d-none');
                } else if (value == '2') {
                    $('.goods_form').removeClass('d-none');
                } else if (value == '3') {
                    $('.preview').removeClass('d-none');
                } else if (value == '4') {
                    $('.qr_code').removeClass('d-none');
                }
            });
            $('#agreement').on('change', function() {
                var checked = $(this).prop('checked');
                if (checked) {
                    $('button[name="btnPreviewNext"]').removeAttr('disabled');
                } else {
                    $('button[name="btnPreviewNext"]').attr('disabled', 'disabled');
                }

                // console.log(checked);
            });
            // clear all cached data
            // no need for now
            /*
            Pass.params.personal = {};
            Pass.params.personalFamily = [];
            Pass.params.questionAnswer = [];
            Pass.params.rating = 0;
            */
            
            $('#starterLink').on('click', function(){
                $('#theContent').find('.starter').addClass('d-none');
                $('#theContent').find('.headers').removeClass('d-none');
            });

            $('button[name="btnheaderNext"]').on('click', function(){
                $('#theContent').find('.headers').addClass('d-none');
                $('#theContent').find('.passengers').removeClass('d-none');
            });

            // family numbers
            // family changed on diff page
            /*
            $('#familyNumber').on('change', function() {
                if (parseInt($(this).val()) > 0) {
                    $('.family-container').removeClass('d-none');
                } else {
                    $('.family-container').addClass('d-none');
                } 
            });
            */

            // action next after personal data filled
            $('form[name="formPassenger"]').on('submit', function() {
                // pull personal data then save on param
                var year = $('[name="birthYear"] option:selected').val(), month = $('[name="birthMonth"] option:selected').val(), date = $('[name="birthDate"] option:selected').val();
                var arrivalYear = $('[name="arrivalYear"] option:selected').val(), arrivalMonth = $('[name="arrivalMonth"] option:selected').val(), arrivalDate = $('[name="arrivalDate"] option:selected').val();
                var birthText = date + ' ' + Pass.monthList(parseInt(month)) + ' ' + year;
                var personal = {
                    name: $('#fullName').val(), birth: year + '-' + month + '-' + date, birthText: birthText,
                    occupation: $('#occupation').val(), nationality: $('#nationality').val(), nationalityText: $('select[name="nationality"] option:selected').text(), passport: $('#passport').val(),
                    address: $('#address').val(), flight: $('#flightNumber').val(), baggageIn: $('#baggageIn').val(), baggageEx: $('#baggageEx').val(),
                    arrival: arrivalYear + '-' + arrivalMonth + '-' + arrivalDate
                };
                // save personal info
                Pass.params.personal = personal;
                // console.log(personal);
                // $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.family-container').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
                return false;
            });

            // save goods detail information
            var goodsDetail = [];
            $('button[name="btnSaveGoods"]').on('click', function() {
                var desc = $('#goodsDesc').val(), amount = $('#goodsAmount').val(), value = $('#goodsValue').val(),
                    currency = $('#goodsCurrency').val();
                if (desc != '' || amount != '' || value != '' || currency != '') {
                    var dataGoods = { desc: desc, amount: amount, value: value, currency: currency};
                    goodsDetail.push(dataGoods);

                    $('#goodsDesc').val('');
                    $('#goodsAmount').val('');
                    $('#goodsValue').val('');
                    $('#goodsCurrency').val('');
                } else {
                    alert('Description or amount or value of goods cannot be empty');
                }

                if (goodsDetail.length > 0) {
                    var theTable = $('table[name="goods_table"]');
                    var theBody = theTable.find('tbody').empty();
                    var number = 1;

                    $.each(goodsDetail, function(index, value) {
                        var row = '<tr index="'+index+'">\
                            <th scope="row">' + number + '</th>\
                            <td>'+value.desc+'</td>\
                            <td>'+value.amount+'</td>\
                            <td>'+Pass.setIdr(value.value)+' '+value.currency+'</td>\
                        </tr>';
                        theBody.append(row);
                        number++;
                    });
                }

                Pass.params.goodsDetail = goodsDetail;
            });

            // save family information
            var personalFamily = [];
            $('button[name="btnSaveFamily"]').on('click', function() {
                var name = $('#familyName').val(), passport = $('#familyPassport').val(),
                    year = $('[name="familyBirthYear"] option:selected').val(), month = $('[name="familyBirthMonth"] option:selected').val(), date = $('[name="familyBirthDate"] option:selected').val(),
                    birth = year + '-' + month + '-' + date;
                var birthText = date + ' ' + Pass.monthList(parseInt(month)) + ' ' + year;

                if (name != '' && passport != '' && year != '' && month != '' && date != '') {
                    var dataFamily = { name: name, passport: passport, birth: birth, birthText: birthText };
                    personalFamily.push(dataFamily); 
                    // clear input
                    $('#familyName').val('');
                    $('#familyPassport').val('');

                    $('[name="familyBirthYear"]').val('').trigger('change');
                    $('[name="familyBirthMonth"]').val('').trigger('change');
                    $('[name="familyBirthDate"]').val('').trigger('change');
                } else {
                    alert('name or passport or birth of date cannot be empty');
                }

                if (personalFamily.length > 0) {
                    var theTable = $('table[name="familyTable"]');
                    var theBody = theTable.find('tbody').empty();
                    var number = 1;
                    $.each(personalFamily, function(index, value) {
                        var row = '<tr index="'+index+'">\
                            <th scope="row">' + number + '</th>\
                            <td>'+value.name+'</td>\
                            <td>'+value.passport+'</td>\
                            <td>'+value.birthText+'</td>\
                        </tr>';
                        theBody.append(row);
                        number++;
                    });
                }
                // console.log(personalFamily);
                Pass.params.personalFamily = personalFamily;
                return false;
            });
            $('button[name="btnFamilyNext"]').on('click', function() {
                $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.family-container').addClass('d-none');
            });
            $('button[name="btnGoodsTMNext"]').on('click', function() {
                $('#theContent').find('.goods_t_m2').removeClass('d-none');
                $('#theContent').find('.goods_t_m').addClass('d-none');
            });
            $('button[name="btnGoodsTM2Next"]').on('click', function() {
                $('#theContent').find('.goods_t_m3').removeClass('d-none');
                $('#theContent').find('.goods_t_m2').addClass('d-none');
            });
            $('button[name="btnGoodsTM3Next"]').on('click', function() {
                // console.log('tes');
                $('#theContent').find('.goods_form').removeClass('d-none');
                $('#theContent').find('.goods_t_m3').addClass('d-none');
            });
            $('button[name="btnGoodsTM3Next"]').on('click', function() {
                // console.log('tes');
                $('#theContent').find('.goods_form').removeClass('d-none');
                $('#theContent').find('.goods_t_m3').addClass('d-none');
            });
            $('button[name="btnGoodsFormNext"]').on('click', function() {
                // save answer of questions
                var questions = [];
                for (var i= 1; i<=questionNum; i++) {
                   var theQuestions = $('input[name=question_' + i +']').is(':checked');
                   if (theQuestions) {
                        var theText = $('input[name=question_' + i +']').closest('.form-switch').find('.form-check-label').text();
                        var dataAnswer = {
                            id: i, value: 1, text: theText 
                        };

                        questions.push(dataAnswer);
                   }
                }
                /*
                var questions = [];
                for (var i= 1; i<=questionNum; i++) {
                   var theQuestions = $('input[name=question_' + i +']:checked').val();
                   if (theQuestions == '1') {
                        var theText = $('input[name=question_' + i +']').closest('.mb-3').find('.form-label').text();
                        var dataAnswer = {
                            id: i, value: theQuestions, text: theText 
                        };

                        questions.push(dataAnswer);
                   }
                }*/
                // console.log(questions);
                // return false;
                // save answer of questions
                Pass.params.questionAnswer =  questions;
                
                $('#theContent').find('.goods_detail').removeClass('d-none');
                var container = $('#theContent').find('.goods_detail').find('.goods_declare').empty();
                // render answer here
                if (questions.length > 0) {
                    var row = '<ul>';
                    $.each(questions, function(index, value) {
                        row += '<li>' + value.text + '</li>';
                    });
                    row += '</ul>';
                    container.append(row);
                }
                $('#theContent').find('.goods_form').addClass('d-none');
            });
            $('button[name="btnGoodsDetailNext"]').on('click', function() {
                $('#theContent').find('.rating').removeClass('d-none');
                $('#theContent').find('.goods_detail').addClass('d-none');
            });
            $('button[name="btnRatingNext"]').on('click', function() {
                $('#theContent').find('.rating').addClass('d-none');
                // set value of review
                $('span[name="reviewName"]').html(Pass.params.personal.name);
                $('span[name="reviewBirth"]').html(Pass.params.personal.birth);
                $('span[name="reviewNation"]').html(Pass.params.personal.nationalityText);
                $('span[name="reviewPassport"]').html(Pass.params.personal.passport);
                $('span[name="reviewAddress"]').html(Pass.params.personal.address);
                $('span[name="reviewFlight"]').html(Pass.params.personal.flight);
                $('span[name="reviewArrival"]').html(Pass.params.personal.arrival);
                $('span[name="reviewBaggageIn"]').html(Pass.params.personal.baggageIn);
                $('span[name="reviewBaggageEx"]').html(Pass.params.personal.baggageEx);
                $('span[name="reviewNumofFamily"]').html(Pass.params.personalFamily.length);

                // render table review of goods
                var theContainer = $('table[name="reviewGoods"]').find('tbody').empty();
                if (Pass.params.questionAnswer.length > 0) {
                    $.each(Pass.params.questionAnswer, function(index, value) {
                        var row = '<tr>\
                            <td>' + value.text + '</td>\
                        </tr>';

                        theContainer.append(row);
                    });
                }

                // render table of goods detail
                var theContainer = $('table[name="reviewDetailGoods"]').find('tbody').empty();
                if (Pass.params.goodsDetail.length > 0) {
                    $.each(Pass.params.goodsDetail, function(index, value) {
                        var row = '<tr>\
                            <td>' + index+1 + '</td>\
                            <td>' + value.desc + '</td>\
                            <td>' + value.amount + '</td>\
                            <td>' + Pass.setIdr(value.value) + ' ' + value.currency + '</td>\
                        </tr>';

                        theContainer.append(row);
                    });
                }

                $('#theContent').find('.preview').removeClass('d-none');
            });

            $('button[name="btnPreviewNext"]').on('click', function() {
                // save function
                var params = {
                    personal: Pass.params.personal,
                    family: Pass.params.personalFamily,
                    goodsDetail: Pass.params.goodsDetail,
                    answer: Pass.params.questionAnswer,
                    rating: Pass.params.rating
                }
                $.ajax({
                    url: '/passengers/save_data',
                    type: 'post',
                    dataType: 'json',
                    data: JSON.stringify(params)
                }).done(function(result) {
                    if (result) {
                        $.ajax({
                            url: '/passengers/generate_code',
                        }).done(function(result) {
                            $('#theContent').find('.preview').addClass('d-none');
                            $('#theContent').find('.qr_code').removeClass('d-none');
                            $('#theContent').find('.qr_code').find('img').attr('src', '/temp/' + result.name);
                            $('#theContent').find('.qr_code').find('a[name="btnSaveQR"]').attr('href', '/temp/' + result.name);
                        });
                    } else {
                        alert('There is something wrong, try again later..');
                    }  
                }).fail(function() {
                    alert('There is something wrong, try again later..');
                });
                return false;
                // end save function
            });

            // prev function
            $('button[name="btnPreviewPrev"]').on('click', function() {
                $('#theContent').find('.preview').addClass('d-none');
                $('#theContent').find('.rating').removeClass('d-none');
            });
            $('button[name="btnRatingPrev"]').on('click', function() {
                $('#theContent').find('.rating').addClass('d-none');
                $('#theContent').find('.goods_detail').removeClass('d-none');
            });
            $('button[name="btnheaderPrev"]').on('click', function() {
                $('#theContent').find('.starter').removeClass('d-none');
                $('#theContent').find('.headers').addClass('d-none');
            });
            $('button[name="btnPersonalPrev"]').on('click', function() {
                $('#theContent').find('.headers').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
            });
            $('button[name="btnFamilyPrev"]').on('click', function() {
                $('#theContent').find('.passengers').removeClass('d-none');
                $('#theContent').find('.family-container').addClass('d-none');
            });
            $('button[name="btnGoodsTMPrev"]').on('click', function() {
                $('#theContent').find('.family-container').removeClass('d-none');
                $('#theContent').find('.goods_t_m').addClass('d-none');
            });
            $('button[name="btnGoodsTM2Prev"]').on('click', function() {
                $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.goods_t_m2').addClass('d-none');
            });
            $('button[name="btnGoodsTM3Prev"]').on('click', function() {
                $('#theContent').find('.goods_t_m2').removeClass('d-none');
                $('#theContent').find('.goods_t_m3').addClass('d-none');
            });
            $('button[name="btnGoodsFormPrev"]').on('click', function() {
                // console.log('tes');
                $('#theContent').find('.goods_t_m3').removeClass('d-none');
                $('#theContent').find('.goods_form').addClass('d-none');
            });
            $('button[name="btnGoodsDetailPrev"]').on('click', function() {
                // console.log('tes');
                $('#theContent').find('.goods_form').removeClass('d-none');
                $('#theContent').find('.goods_detail').addClass('d-none');
            });

            // rating function
            $('.bc-rate').on('click', function() {
                $('.bc-rate').removeClass('bc-checked');
                var value = $(this).attr('value');
                if (value == '5') {
                    $('[name="bc-rate1"], [name="bc-rate2"], [name="bc-rate3"], [name="bc-rate4"], [name="bc-rate5"]').addClass('bc-checked');   
                } else if (value == '4') {
                    $('[name="bc-rate1"], [name="bc-rate2"], [name="bc-rate3"], [name="bc-rate4"]').addClass('bc-checked');   
                } else if (value == '3') {
                    $('[name="bc-rate1"], [name="bc-rate2"], [name="bc-rate3"]').addClass('bc-checked');   
                } else if (value == '2') {
                    $('[name="bc-rate1"], [name="bc-rate2"]').addClass('bc-checked');   
                } else {
                    $('[name="bc-rate1"]').addClass('bc-checked');   
                }

                // save rating value
                Pass.params.rating =  parseInt(value);
            });
        }
    };

    Pass.init();
})(jQuery);