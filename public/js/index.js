$( function()
	{
		var site_url = 'http://localhost/slf/';

		var loader = $('#loader');
		loader.hide();


		var featured_tab = $('#featured_tab');
		var location_tab = $('#location_tab');
		var rating_tab = $('#rating_tab');

		var featured = $('#featuredContainer');
		var rating = $('#ratingContainer');
		var location = $('#locationContainer');

		//Load Featured tab immediately page loads

		$.post(
			{
				url : site_url + "pages/get_featured_lodge",
				cache : "true",
				data : { "get_featured_lodge" : true },
				beforeSend: function(){
					featured.html(loader);
					loader.show();
				},
				success : function (response){
					featured.html(response);
				}

			});


		//Load rating tab on click

		rating_tab.click(

			function()
			{

				$.post(
				{
					url : site_url + "pages/get_rated_lodge",
					cache : "true",
					data : { "get_rated_lodge" : true },
					beforeSend: function(){
						rating.html(loader);
						loader.show();
					},
					success : function (response){
						rating.html(response);
					}

				});
				


			});


		//Load rating tab on click

		location_tab.click(

			function()
			{

				$.post(
				{
					url : site_url + "pages/get_locations",
					cache : "true",
					data : { "get_locations" : true },
					beforeSend: function(){
						location.html(loader);
						loader.show();
					},
					success : function (response){
						location.html(response);
					}

				});
				


			});


	});