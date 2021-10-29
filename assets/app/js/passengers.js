(function($) {
    var Pass = {
        init: function() {
            $('#starterLink').on('click', function(){
                $('#theContent').find('.starter').addClass('d-none');
                $('#theContent').find('.passengers').removeClass('d-none');
            });
        }
    };

    Pass.init();
})(jQuery);