/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('materialize-css/dist/js/materialize.min');

$(document).ready(function(){
    $('.carousel').carousel({
    	numVisible: 3,
    	dist: 0,
    	padding: 25
    });
    $('.sidenav').sidenav();
    setInterval(function() {
    	$('.carousel').carousel('next');
  	}, 3500);
  	$('select').formSelect();
});

    
