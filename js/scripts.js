$(document).ready(function() { // main doc.ready

//Adds functionality to dropdownlist
	
$("#drop, #drop1, #drop2, #drop3, #drop4, #drop5, #drop6, #drop7, #drop8, #drop9, #drop10, #drop11, #drop12, #drop13, #drop14, #drop15, #drop16, #drop17, #drop18, #drop19, #drop20, #drop21, #drop22, #drop23, #drop24, #drop25, #drop26, #drop27, #drop28, #drop29, #drop30, #drop31, #drop32, #drop33, #drop34, #drop35, #drop36, #drop37, #drop38, #drop39, #drop40, #drop41, #drop42, #drop43, #drop44, #drop45, #drop46, #drop47").change(function() {
		  window.location = $(this).find("option:selected").val();
		});

		
}); // End of main doc.ready



