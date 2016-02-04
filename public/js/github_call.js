// f01ba26e28709c83c2854942b82017fe


// $.ajax("https://api.github.com/users/allantito")
// 	.done(function( data )
// 	{

// 		console.log(data);
// 		var img = "<img src='"+data.avatar_url+"'>";

		// var img = "<img src="+someimage.jpg+">";
		// <img src=someimage.jpg>

	// 	$( '#result' ).append(img);
	// })
	// .fail(function(){
	// console.log('AJAX call failed');
	// });


$.ajax({
	url: "https://api.github.com/users/allantito",
	type: "GET",
	success: function(data){
		$( '#result' ).append(data.login );
	}
});

$.get("https://api.github.com/users/allantito")
	.done(function(){
		console.log(data);
		// $('#result').append(data.login );
	}
	});


//

