<?php 
include(dirname(__FILE__).'/../config.php');
?>
<style>
	.center-piece-top-box{
		border-top: 1px solid #3bcdb6;
		background: rgba(28, 29, 34, 0.60);
		width: 100%;
		height: 60px;
		 -webkit-animation-name: blinker;
		-webkit-animation-duration: <?php echo $color_change_speed ?>s;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;

		-moz-animation-name: blinker;
		-moz-animation-duration: <?php echo $color_change_speed ?>s;
		-moz-animation-timing-function: linear;
		-moz-animation-iteration-count: infinite;

		animation-name: blinker;
		animation-duration: <?php echo $color_change_speed ?>s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
		}
		
		.center-piece-box{
		background: rgba(28, 29, 34, 0.60);
		width: 100%;
		height: 400px;
		border-top: 1px solid #3bcdb6;
		-webkit-animation-name: blinker;
		-webkit-animation-duration: <?php echo $color_change_speed ?>s;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;

		-moz-animation-name: blinker;
		-moz-animation-duration: <?php echo $color_change_speed ?>s;
		-moz-animation-timing-function: linear;
		-moz-animation-iteration-count: infinite;

		animation-name: blinker;
		animation-duration: <?php echo $color_change_speed ?>s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
		}
		
		
		@-moz-keyframes blinker {  
			 0% { border-top: 1px solid #<?php echo $color_1 ?>; }
			 25% { border-top: 1px solid #<?php echo $color_2 ?>; }
			50% { border-top: 1px solid #<?php echo $color_3 ?>; }
			75% { border-top: 1px solid #<?php echo $color_4 ?>; }
			100% { border-top: 1px solid #<?php echo $color_1 ?>; }
		}

		@-webkit-keyframes blinker {  
			  0% { border-top: 1px solid #<?php echo $color_1 ?>; }
			 25% { border-top: 1px solid #<?php echo $color_2 ?>; }
			50% { border-top: 1px solid #<?php echo $color_3 ?>; }
			75% { border-top: 1px solid #<?php echo $color_4 ?>; }
			100% { border-top: 1px solid #<?php echo $color_1 ?>; }
		}

		@keyframes blinker {  
			 0% { border-top: 1px solid #<?php echo $color_1 ?>; }
			 25% { border-top: 1px solid #<?php echo $color_2 ?>; }
			50% { border-top: 1px solid #<?php echo $color_3 ?>; }
			75% { border-top: 1px solid #<?php echo $color_4 ?>; }
			100% { border-top: 1px solid #<?php echo $color_1 ?>; }
		}
		@-moz-keyframes blinker2 {  
			  0% { background-color: #<?php echo $color_1 ?>;}
			 25% { background-color: #<?php echo $color_2 ?>;}
			50% {background-color: #<?php echo $color_3 ?>;	}
			75% { background-color: #<?php echo $color_4 ?>;	}
			100% { background-color: #<?php echo $color_1 ?>;}
		}

		@-webkit-keyframes blinker2 {  
			0% { background-color: #<?php echo $color_1 ?>;}
			 25% { background-color: #<?php echo $color_2 ?>;}
			50% {background-color: #<?php echo $color_3 ?>;	}
			75% { background-color: #<?php echo $color_4 ?>;	}
			100% { background-color: #<?php echo $color_1 ?>;}
		}

		@keyframes blinker2 {  
			 0% { background-color: #<?php echo $color_1 ?>;}
			 25% { background-color: #<?php echo $color_2 ?>;}
			50% {background-color: #<?php echo $color_3 ?>;	}
			75% { background-color: #<?php echo $color_4 ?>;	}
			100% { background-color: #<?php echo $color_1 ?>;}
		}
		
			#load-box-width{
		background-color: #3bcdb6;
		height: 1px;
		opacity: 1;
		-webkit-animation-name: blinker2;
		-webkit-animation-duration: <?php echo $color_change_speed ?>s;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;

		-moz-animation-name: blinker2;
		-moz-animation-duration: <?php echo $color_change_speed ?>s;
		-moz-animation-timing-function: linear;
		-moz-animation-iteration-count: infinite;

		animation-name: blinker2;
		animation-duration: <?php echo $color_change_speed ?>s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
		}
</style>