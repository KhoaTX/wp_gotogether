$(function() {
	$( ".send_contact" ).click(function() {
		$.ajax({
		  url: template_url + "/contact.php",
		  data: $('#form_contact').serializeArray(),
		  cache: false,
		  success: function(html){
		    $("#results").append(html);
		  }
		});
	});
});