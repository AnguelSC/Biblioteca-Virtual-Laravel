$('.chosen').chosen();
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
$('.datepicker').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }});

$(document).ready(function() {
	
	$('#frm_add_editorial').on('submit',function(){
		var name = $('#editorial_name').val().trim(),
		country = $('#editorial_country').val().trim();
		if (true) {};
		$.ajax({
			url : '/editorial',
			method : 'POST',
			data: {
				name : name,
				country : country
			},
			dataType: 'json',
			error : function(data){
				console.log(data);
			},
			success:function(data){
				console.log(data.message);
				$('#message_editorial').addClass('alert alert-'+data.type).text(data.message);
				$('#editorial_name').val('');
				$('#editorial_country').val('');
				if (data.type=='success') {
					$('#editorials').append('<option value="'+data.editorial.id+'">'+data.editorial.name+'</option>');
					$('#editorials').trigger("chosen:updated");
					console.log(data)
				};
			}
		});
		return false;
	});
	$('#frm_add_author').on('submit',function(){
		var name = $('#author_name').val().trim(),
		country = $('#author_country').val().trim();
		if (true) {};
		$.ajax({
			url : '/author',
			method : 'POST',
			data: {
				name : name,
				country : country
			},
			dataType: 'json',
			error : function(data){
				console.log(data);
			},
			success:function(data){
				console.log(data.message);
				$('#message_author').addClass('alert alert-'+data.type).text(data.message);
				$('#author_name').val('');
				$('#author_country').val('');
				if (data.type=='success') {
					$('#authors').append('<option value="'+data.author.id+'">'+data.author.name+'</option>');
					$('#authors').trigger("chosen:updated");
					console.log(data)
				};
			}
		});
		return false;
	});
});