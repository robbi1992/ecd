(function($) {
    var Pass = {
        constant: {
            tempUrl: 'http://localhost/ecd_temp/temp/'
        },
        params: {
            personal: {},
            personalFamily: [],
            rating: 0
        },
        init: function() {
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
                // console.log(personal);
                // return false;
                $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
            });
            // save family information
            var personalFamily = [];
            $('button[name="btnSaveFamily"]').on('click', function() {
                var name = $('#familyName').val(), passport = $('#familyPassport').val();
                if (name != '' || passport != '') {
                    var dataFamily = { name: name, passport: passport };
                    personalFamily.push(dataFamily); 
                    // clear input
                    $('#familyName').val('');
                    $('#familyPassport').val('');
                } else {
                    alert('name or passport of your family cannot be empty');
                }

                console.log(personalFamily);
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
                // console.log('tes');
                $('#theContent').find('.goods_detail').removeClass('d-none');
                $('#theContent').find('.goods_form').addClass('d-none');
            });
            $('button[name="btnGoodsDetailNext"]').on('click', function() {
                $('#theContent').find('.rating').removeClass('d-none');
                $('#theContent').find('.goods_detail').addClass('d-none');
            });
            $('button[name="btnRatingNext"]').on('click', function() {
                // temp be a qr code function
                $.ajax({
                    url: '/passengers/generate_code',
                }).done(function(result) {
                    $('#theContent').find('.rating').addClass('d-none');
                    $('#theContent').find('.qr_code').removeClass('d-none');
                    $('#theContent').find('.qr_code').find('img').attr('src', '/temp/' + result.name);
                });
            });
            // prev function
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