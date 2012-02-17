(function($) {
    /**
     * Test Skin implementation for module Toc.
     *
     * @author Terrific Composer
     * @namespace Tc.Module.Toc
     * @class Test
     * @extends Tc.Module
     * @constructor
     */
    Tc.Module.Toc.Test = function(parent) {
        /** 
         * override the appropriate methods from the decorated module (ie. this.get = function()).
         * the former/original method may be called via parent.<method>()
         */
        this.dependencies = function() {
            // calling parent method
            parent.dependencies();
        };
        
        this.beforeBinding = function(callback) {
            // calling parent method
            parent.beforeBinding(function() {
                callback();
            });
        };
        
        this.onBinding = function() {
            // calling parent method
            parent.onBinding();
        };
        
        this.afterBinding = function() {
            // calling parent method
            parent.afterBinding();
        };
    };
})(Tc.$);
