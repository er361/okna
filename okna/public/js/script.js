// JavaScript Document
$(document).ready(function() {
  
  $("#slider").owlCarousel({
	  
      slideSpeed : 300,
	  autoPlay: 4000,
	  pagination: true,
      paginationSpeed : 400,
      singleItem: true,
	  
  });
  var owl = $("#slider").data('owlCarousel');
  
  $('a[href="#prev"]').click(function() {
	  owl.prev()
  });
  $('a[href="#next"]').click(function() {
	  owl.next()
  });
  
});