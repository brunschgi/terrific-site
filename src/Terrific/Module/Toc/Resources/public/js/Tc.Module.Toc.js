(function ($) {
    /**
     * Toc module implementation.
     *
     * @author Your Name
     * @namespace Tc.Module
     * @class Toc
     * @extends Tc.Module
     */
    Tc.Module.Toc = Tc.Module.extend({

        /**
         * Initializes the Toc module.
         *
         * @method init
         * @return {void}
         * @constructor
         * @param {jQuery} $ctx the jquery context
         * @param {Sandbox} sandbox the sandbox to get the resources from
         * @param {String} id the unique module id
         */
        init: function ($ctx, sandbox, id) {
            // call base constructor
            this._super($ctx, sandbox, id);
        },

        /**
         * Hook function to do the module stuff.
         *
         * @method on
         * @param {Function} callback
         * @return void
         */
        on: function (callback) {
            var $ctx = this.$ctx;

            // scroll to the appropriate position
            $('a', $ctx).on('click', function () {
                var pos = $('#' + $(this).attr('href').substring(1)).offset().top;

                $('html:not(:animated), body:not(:animated)').animate({
                    scrollTop:pos
                }, 500);

                return false;
            });

            // fix the navigation
            var $nav = $ctx;
            var top = $nav.offset().top;
            $(window).scroll(function() {
                // whats the y position of the scroll
                var y = $(this).scrollTop();

                // whether that's below the fold
                if (y >= top) {
                    // if so, ad the fixed class
                    $nav.addClass('fixed');
                } else {
                    // otherwise remove it
                    $nav.removeClass('fixed');
                }
            });
            
            callback();
        }
    });
})(Tc.$);
