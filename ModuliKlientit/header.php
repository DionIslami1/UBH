<section id="header">

					<div style="padding-bottom: 0%" class="container">

						<!-- Logo -->
						<?php
           $result = mysqli_query($conn_ph,  "CALL Header_prd()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?><h1 id="logo" style="padding: 1%;"> <a    class="fas fa-bicycle" ><?php echo $Titulli ?></h1></a></h1>
							<br>
							<h3><?php echo $Pershkrimi ?></h3></a></h3>
							<?php } ?>
							
						

							<?php
							$visits =1;
							if(isset($_COOKIE["visits"])) {
								$visits=(int) $_COOKIE["visits"];
							}   $Month = 2592000 + time();
							setcookie("visits", date("F jS - g:i a"), $Month);
							if(isset($_COOKIE['visits'])) 
							{
								$last = $_COOKIE['visits'];
								echo "<p style='text-align:right; font-size:12px; padding-right: 5%;'>Vizita juaj e fundit ishte me: " . $last."</p>";

							}
							else 

							{ echo"<p style='text-align:right; font-size:12px; padding-right: 5%;'> Vizita juaj e pare ne webaplikacion, ju deshirojm mireseardhje</p>";

							}
						?>

<?php include_once("menyte.php")?>	
						<!-- Nav -->
						
					</div>
				</section>