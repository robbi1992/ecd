(function($) {
    var Pass = {
        constant: {
            tempUrl: 'http://localhost/ecd_temp/temp/'
        },
        init: function() {
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
                $('#theContent').find('.goods_t_m').removeClass('d-none');
                $('#theContent').find('.passengers').addClass('d-none');
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
                // temp be a qr code function
                $.ajax({
                    url: '/passengers/generate_code',
                }).done(function(result) {
                    $('#theContent').find('.goods_detail').addClass('d-none');
                    $('#theContent').find('.qr_code').removeClass('d-none');
                    $('#theContent').find('.qr_code').find('img').attr('src', Pass.constant.tempUrl + result.name);
                });
            });
            // prev function
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
        }
    };

    Pass.init();
})(jQuery);