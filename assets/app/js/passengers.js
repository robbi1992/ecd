(function($) {
    var Pass = {
        constant: {
            tempUrl: 'http://localhost/ecd_temp/temp/'
        },
        params: {
            personal: {},
            personalFamily: [],
            questionAnswer: [],
            rating: 0
        },
        init: function() {
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
            Pass.params.personal = {};
            Pass.params.personalFamily = [];
            
            $('#starterLink').on('click', function(){
                $('#theContent').find('.starter').addClass('d-none');
                $('#theContent').find('.passengers').removeClass('d-none');
            });

            // family numbers
            $('#familyNumber').on('change', function() {
                if (parseInt($(this).val()) > 0) {
                    $('.family-container').removeClass('d-none');
                } else {
                    $('.family-container').addClass('d-none');
                } 
            });

            // action next after personal data filled
            $('button[name="btnPersonalNext"]').on('click', function() {
                // pull personal data then save on param
                var personal = {
                    name: $('#fullName').val(), birth: $('[name="birthYear"]').val() + '-' + $('[name="birthMonth"]').val() + '-' + $('[name="birthDate"]').val(),
                    occupation: $('#occupation').val(), nationality: $('#nationality').val(), passport: $('#passport').val(),
                    address: $('#address').val(), flight: $('#flightNumber').val(), baggageIn: $('#baggageIn').val(), baggageEx: $('#baggageEx').val(),
                    arrival: $('[name="arrivalYear"]').val() + '-' + $('[name="arrivalMonth"]').val() + '-' + $('[name="arrivalDate"]').val()
                };
                // save personal info
                Pass.params.personal = personal;

                $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
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
                            <td>'+value.value+' '+value.currency+'</td>\
                        </tr>';
                        theBody.append(row);
                        number++;
                    });
                }
            });


            // save family information
            var personalFamily = [];
            $('button[name="btnSaveFamily"]').on('click', function() {
                var name = $('#familyName').val(), passport = $('#familyPassport').val(),
                    birth = $('[name="familyBirthYear"]').val() + '-' + $('[name="familyBirthMonth"]').val() + '-' + $('[name="familyBirthDate"]').val();
                if (name != '' || passport != '', birth != '--') {
                    var dataFamily = { name: name, passport: passport, birth: birth };
                    personalFamily.push(dataFamily); 
                    // clear input
                    $('#familyName').val('');
                    $('#familyPassport').val('');
                    $('[name="familyBirthYear"]').val('');
                    $('[name="familyBirthMonth"]').val()
                    $('[name="familyBirthDate"]').val()
                } else {
                    alert('name or passport of your family cannot be empty');
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
                            <td>'+value.birth+'</td>\
                        </tr>';
                        theBody.append(row);
                        number++;
                    });
                }
                // console.log(personalFamily);
                Pass.params.personalFamily = personalFamily;
                return false;
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
                   var theQuestions = $('input[name=question_' + i +']:checked').val();
                   if (theQuestions == '1') {
                        var theText = $('input[name=question_' + i +']').closest('.mb-3').find('.form-label').text();
                        var dataAnswer = {
                            id: i, value: theQuestions, text: theText 
                        };

                        questions.push(dataAnswer);
                   }
                }

                // save answer of questions
                Pass.params.questionAnswer =  questions;
                
                $('#theContent').find('.goods_detail').removeClass('d-none');
                // render answer here
                if (questions.length > 0) {
                    var container = $('#theContent').find('.goods_detail').find('.goods_declare').empty();
                    $.each(questions, function(index, value) {
                        var row = '<ul>\
                            <li>' + value.text + '</li>\
                        </ul>';

                        container.append(row);
                    });
                }
                $('#theContent').find('.goods_form').addClass('d-none');
            });
            $('button[name="btnGoodsDetailNext"]').on('click', function() {
                $('#theContent').find('.rating').removeClass('d-none');
                $('#theContent').find('.goods_detail').addClass('d-none');
            });
            $('button[name="btnRatingNext"]').on('click', function() {
                $('#theContent').find('.rating').addClass('d-none');
                $('#theContent').find('.preview').removeClass('d-none');
            });

            $('button[name="btnPreviewNext"]').on('click', function() {
                $.ajax({
                    url: '/passengers/generate_code',
                }).done(function(result) {
                    $('#theContent').find('.preview').addClass('d-none');
                    $('#theContent').find('.qr_code').removeClass('d-none');
                    $('#theContent').find('.qr_code').find('img').attr('src', '/temp/' + result.name);
                });
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
            $('button[name="btnPersonalPrev"]').on('click', function() {
                $('#theContent').find('.starter').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
            });
            $('button[name="btnGoodsTMPrev"]').on('click', function() {
                $('#theContent').find('.passengers').removeClass('d-none');
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