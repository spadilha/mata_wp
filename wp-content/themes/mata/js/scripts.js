/*
    Spadilha Scripts
    Author: Saulo Padilha
*/

jQuery(function($){

    window.WebApp = {

        // INIT
        init: function() {

            var self = this;

            // WebApp.banners();
            WebApp.navigations();

            if($('.fitvidz').length){
                $('.fitvidz').fitVids();
            }

        },


        navigations: function(){

            $('.hamburger').on('click touch', function(){
                $(this).toggleClass('is-active');
                $('#menu').toggleClass('opened');
            });



            $(document).on('click', function(event) {

                if (!$(event.target).closest('#menu, #menuIcon').length) {
                    $('.hamburger').removeClass('is-active');
                    $('#menu').removeClass('opened');
                }
            });
        },

        shareButtons: function(){

            // SOCIAL MEDIA
            $('.shareFacebook').click(function(e){
                e.preventDefault();
                url = $(this).attr('href');
                window.open('http://www.facebook.com/sharer.php?u=' + url ,"pop","menubar=1,resizable=1,width=665,height=355");
            });
            $('.shareTwitter').click(function(e){
                e.preventDefault();
                url = $(this).attr('href');
                var title = $(this).attr('title');
                window.open(url,"pop","menubar=1,resizable=1,width=660,height=500");
            });
        },
    };

    WebApp.init();

}); /* end of as page load scripts */
