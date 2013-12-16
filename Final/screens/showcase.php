<?php

include_once('includes/connection.php');
include_once('includes/item.php');




$item = new Item;
$items = $item->fetch_all();

$d = array();

	
?>

<html>
	<head>
		<title>D+T Projects</title>
		<link rel="stylesheet" href="css/main.css"/>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,300,500' rel='stylesheet' type='text/css'>
		<script src="http://www.youtube.com/player_api"></script>

	</head>

	<body>
		<div id="showcase_logo"><img src="img/DT_logo_vector.png"></div>
		<div id="showcase_wrapper">
			<div id="player"></div>
			<div>
				<div id="showcase_info">
					<div id="showcase_title"></div>
<!-- 					<div id="author"> </div>
 -->					<div id="showcase_description"></div>
				</div>
			</div>
		</div>

<!-- 			<?php include_once('main.php'); ?>
 -->
			<div class="index-container">
		
			</div>

			<script type="text/javascript">
				var player_div = document.getElementById("player");
				var showcase_wrapper = document.getElementById("showcase_wrapper");
				var logo = document.getElementById("showcase_logo");
				var arrayjs = <?= json_encode($items) ?>;
				var showcase_description = document.getElementById("showcase_description");
				var showcase_title = document.getElementById("showcase_title");
				var showcase_author = document.getElementById("author");

										
				// console.log(arrayjs[1]);

				var youtubeId = [];
				var youtubeDescription = [];
				var youtubeTitle = [];
				var youtubeAuthor = [];


				var vimeoId = [];
				var counter = 0;

			for (var i = 0; i < arrayjs.length; i++) {
				if(arrayjs[i]['project_url_youtube'] != ""){
					youtubeId.push(arrayjs[i]['project_url_youtube']);
					youtubeDescription.push(arrayjs[i]['project_description']);
					youtubeTitle.push(arrayjs[i]['project_title']);
					youtubeAuthor.push(arrayjs[i]['student_name']);
					var id = arrayjs[i]['project_url_youtube'];

				} else if (arrayjs[i]['project_url_vimeo'] != "")  {
					vimeoId.push(arrayjs[i]['project_url_vimeo']);
				} else {
					console.log("error pushing to array!");
				}
			};

			var insertAuthor = " by <span id='author'>" + arrayjs[counter]['student_name'] + "</span>";
			showcase_title.innerHTML = "<p>"+arrayjs[counter]['project_title'] + insertAuthor + "</p>";
			showcase_description.innerHTML = arrayjs[counter]['project_description'] ;

			// console.log(arrayjs[counter]['project_title']);
			// console.log(arrayjs[counter]['project_description'] );
			// console.log(arrayjs[counter]['student_name']);


			var vid = youtubeId[counter];

				var player;
			    function onYouTubePlayerAPIReady() {
			        player = new YT.Player('player', {
			          height: 100+"%",
			          width: 100+"%",
			          videoId: vid,
			          playerVars: { 'autoplay': 1, 'controls': 0 },
			          events: {
			            'onReady': onPlayerReady,
			            'onStateChange': onPlayerStateChange,
			          }
			        });
			    }

			    // autoplay video
			    function onPlayerReady(event) {
					player.setPlaybackQuality('hd1080');
			        event.target.playVideo();
			    }

			    // when video ends
			    function onPlayerStateChange(event) {        
			        if(event.data === 0) {            
			    		loopvid();
			    	}
     			}

				console.log(youtubeId);	
				console.log(vimeoId);		
				console.log(youtubeId.length);
				
				function loopvid(){
			    	if(counter == youtubeId.length-1){
			    		console.log('youtube video finished');
						location.reload();

			   //  		counter = 0;
						// var id = youtubeId[counter];
						// console.log(id);
				  //   	player.loadVideoById(id);
			    	} else {
						counter ++;
				    	var id = youtubeId[counter];
						showcase_description.innerHTML = arrayjs[counter]['project_description'];
						var insertAuthor = " by <span id='author'>" + arrayjs[counter]['student_name'] + "</span>";
						showcase_title.innerHTML = "<p>"+arrayjs[counter]['project_title'] + insertAuthor + "</p>";
						showcase_description.innerHTML = arrayjs[counter]['project_description'] ;

						// showcase_wrapper.style.marginLeft = -100+"%";
						console.log(id);
				    	player.loadVideoById(id);

			    	}
			    }

			</script>

	</body>
</html>