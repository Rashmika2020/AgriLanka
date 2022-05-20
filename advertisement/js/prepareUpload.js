$(document).ready(function(){
	var files;

	$('input[type=file]').change(function(event){
	files = event.target.files;

	var data = new FormData();
	$.each(files, function(key, value)
	{
		data.append(key, value);
	});
    
    $.ajax({
        url: 'image_upload.php?files',
        type: 'POST',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        success: function(result){
			$('#path').val(result);
        }
	});
	});

$(document).ready(function(){
	$('#btnImage').click(function(){
		$('#image').fadeIn();
	});
});

});

