<?php 
include(dirname(__FILE__).'/config.php');
include(dirname(__FILE__).'/includes/errorcheck.php'); //To see whether or not you have the right extension in your URL

$steamid64 = $_GET["steamid"];

//This basically gets us the information needed to output information about the user.
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $APIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$table2 = json_decode($json, true);
$table = $table2["response"]["players"][0];

//This selects the music in the music folder and plays it out in random order, just put your OGG files in the music folder and it'll pop up here!	
$dir = "music/";
$scan = scandir($dir);
$random = rand(2, sizeof($scan)-1);
// Getting the song name without any extensions
if(!empty($scan[$random])){
$scan_random = explode(".",$scan[$random]);
}

//Gets the timestamp to show when the user joined
$timestamp = time();
$timestamp_whole = (date("Y-m-d h:i:s:a",$timestamp));

?>

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<head>
 <title><?php echo $load_name ?></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/color.css" rel="stylesheet">
<script type="text/javascript" src="includes/jquery.js"></script>
<script type="text/javascript" src="includes/jquery.timeago.js"></script>
<?php include(dirname(__FILE__).'/css/color_changer.php') ?>
<script>
			$(document).ready(function() {
			music = document.getElementById("music");
			music.volume = 0.2;
			music.play();
		});
</script>	
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery("abbr.timeago").timeago();
});</script>
</head>
<body>
<audio id="music" autoplay >
    <source src="music/<?php echo $scan[$random]; ?>" type="audio/ogg">
</audio>
<!--The pictures are located here, if you want to add more you need to add another div and change its name to +1 of whatever the first one was and go to the stylesheet and add duplicate another style div and do the same thing as with the div in this document -->
		<div id="background">
			<div id="bg1"> </div>
			<div id="bg8"> </div>
			<div id="bg7"> </div>
			<div id="bg6"> </div>
			<div id="bg5"> </div>
			<div id="bg4"> </div>
			<div id="bg3"> </div>
			<div id="bg2"> </div>
			<div id="bg9"> </div>
		</div>
		
		<div class="content">
			<div class="top-box">
				<table>
					<td>
						<?php echo "<img class='avatar-img' src=\"" . $table["avatarfull"] . "\" />"; ?>
					</td>
					<td>
						<p class="top-title">
							<?php echo $title ?>
						</p>
						<p class="top-text">
							You are now joining <span class="highlight"><?php echo $custom_sub_title ?></span>,  <?php echo $table["personaname"] ?>
						</p>
					</td>
				</table>
			</div>
			<!--Where all the information is displayed-->
			<div class="center-piece">
				<table class="center-piece-table">
				<tr>
					<td style="width:25%">
						<div class="center-piece-top-box">
						<?php 
						if(empty($scan[$random]))
						{ 
							?>
								<p class="center-piece-top-left-information">
									<?php echo $slider_1 ?>
								</p>
								<p class="center-piece-top-left-information">
									<?php echo $slider_2 ?>
								</p>
								<p class="center-piece-top-left-information">
									<?php echo $slider_3 ?>
								</p>
							<?php
						}
						else
						{ 
							echo "<p class='center-piece-top-box-sub-title'>
								Now playing
								</p><p class='center-piece-top-box-title-audio' style='margin-top: 0px'>" . $scan_random[0] . "</p>";
						} 
						?>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-top-box">
							<p class="center-piece-top-box-title">
								Introduction
							</p>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-top-box">
							<p class="center-piece-top-box-title">
								Information
							</p>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-top-box">
							<p class="center-piece-top-box-title">
								Rules
							</p>
						</div>
					</td>
				</tr>
				<tr>
					<td style="width:25%">
						<div class="center-piece-image">
							<div class="side-pic1"></div>
							<div class="side-pic2"></div>
							<div class="side-pic3"></div>
							<div class="side-pic4"></div>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-box">
							
							<p class="center-piece-intro-text">
								<?php echo $introduction_text ?>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-box">
							<div class="center-piece-inner-boxes">
								<div class="center-piece-inner-box">
									<div class="center-piece-inner-text">
										Joined  <abbr class="timeago" title="<?php echo $timestamp_whole  ?>"></abbr>
									</div>
								</div>
								<div class="center-piece-inner-box">
									<div class="center-piece-inner-text">
										<span id="server">
											Server Name
										</span>
									</div>
								</div>
								<div class="center-piece-inner-box">
									<div class="center-piece-inner-text">
										<span id="map">
											Map Name
										</span>
									</div>
								</div>
								<div class="center-piece-inner-box">
									<div class="center-piece-inner-text">
										<span id="gamemode">
											Gamemode
										</span>
									</div>
								</div>
							</div>
								<div class="center-piece-inner-box-bottom">
									<div class="center-piece-inner-text-bottom">
										<?php echo $community_url ?>
									</div>
								</div>
						</div>
					</td>
					<td style="width:25%">
						<div class="center-piece-box">
							<div class="center-piece-inner-boxes">
								<div class="center-piece-inner-box">
										<table class="center-piece-inner-table">
											<td style="width: 20px">
												1.
											</td>
											<td>
												<?php echo $rule_1 ?>
											</td>
										</table>
								</div>
								<div class="center-piece-inner-box">
										<table class="center-piece-inner-table">
											<td style="width: 20px">
												2.
											</td>
											<td>
												<?php echo $rule_2 ?>
											</td>
										</table>
								</div>
								<div class="center-piece-inner-box">
										<table class="center-piece-inner-table">
											<td style="width: 20px">
												3.
											</td>
											<td>
												<?php echo $rule_3 ?>
											</td>
										</table>
								</div>
								<div class="center-piece-inner-box">
										<table class="center-piece-inner-table">
											<td style="width: 20px">
												4.
											</td>
											<td>
												<?php echo $rule_4 ?>
											</td>
										</table>
								</div>
							</div>
								<div class="center-piece-inner-box-bottom">
									<div class="center-piece-inner-text-bottom">
										<?php echo $rule_bottom ?>
									</div>
								</div>
						</div>
					</td>
				</tr>
				</table>
			</div>
			<!-- Loading bar to show how far they are to get in to the server -->
			<div id="load-box">
				<div id="load-box-width" style="width: 0%;"></div>
			</div>
			<div id="percentage-completege">
				<p></p>
			</div>
			
			<!-- Shows what item being downloaded, more for estethics.-->
			<div id="item-status">
				<p>Loading Server...</p>
			</div>
		</div>
		
		
	
<!--We put scripts at the bottom to load the HTML faster -->
<script type="text/javascript" src="includes/slider.js"></script>
<script type="text/javascript" src="includes/main.js"></script>
</body>
