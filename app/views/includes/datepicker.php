
 <script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.1.min.js"></script>
	<script>
	$(function() {	        
		$( "#from" ).datepicker({		
            dateFormat: "yy-mm-dd",
			showOtherMonths: true,
			numberOfMonths: 2,
			onClose: function() {
				 var day1 = $("#from").datepicker('getDate').getDate();                
                 var month1 = $("#from").datepicker('getDate').getMonth()+7; 
                 var year1 = $("#from").datepicker('getDate').getFullYear();

                 if (month1>12){
                 var aux = month1-12;
                 month1 = aux;
                 year1=year1+1;
                 }
                 //document.write( month1 );
                 var fullDate = year1 + "-" + month1 + "-" + day1;                
				$( "#to" ).datepicker( "option", "minDate", fullDate );
			}
		}).datepicker('widget').wrap('<div class="ll-skin-lugo"/>');
		$( "#to" ).datepicker({
			dateFormat: "yy-mm-dd",
			showOtherMonths: true,
			numberOfMonths: 2,
			onClose: function( selectedDate ) {
				//$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
		}).datepicker('widget').wrap('<div class="ll-skin-lugo"/>');
		
		$( "#fCartaPresentacion" ).datepicker({
			dateFormat: "dd 'de' MM 'del' yy",
			showOtherMonths: true,
			numberOfMonths: 2,
			onClose: function( selectedDate ) {
				//$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
		}).datepicker('widget').wrap('<div class="ll-skin-lugo"/>');
		
	});
	</script>