(function($) {
    var Pass = {
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
            $('button[name="btnGoodsTM3Next3]').on('click', function() {
                console.log('tes');
                // $('#theContent').find('.goods_t_m3').removeClass('d-none');
                // $('#theContent').find('.goods_t_m2').addClass('d-none');
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
        }
    };

    Pass.init();
})(jQuery);