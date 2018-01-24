$(document).ready(function() {
    $('select').material_select();
 });



 $(document).ready(function(){
    $('ul.tabs').tabs();
	onShow : true;
	swipeable: true;
	responsiveThreshold :true;
  });
  
  
$(document).ready(function(){     
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
});

$(document).ready(function() {
	  // Show sideNav
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');
  // Destroy sideNav
  $('.button-collapse').sideNav('destroy');
	
 });
 
$( document ).ready(function(){
	 $(".button-collapse").sideNav();  
})
 
 
 
 