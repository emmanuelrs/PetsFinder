$(document).ready(function() {
	$('form').submit(function(e){
		e.preventDefault();

		var data = $(this).serializedArray();
		data.push({name: 'tag', value: 'login'});

		$.ajax({
			url: 'process.php',
			type: 'post',
			dataType: 'json',
			data: data,
			beforeSend: function(){
				$('.fa').css('display', 'inline');
			}
		})
		.done(function(){ //true
			
			$('span').php("correcto");
		})
		.fail(function(){ // false
			$('span').php("incorrecto");
		})
		.always(function(){
			setTimeout(function() {
				$('.fa').hide();
			}, 1000);
		});
	})
})
