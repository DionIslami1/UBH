<section id="header">
					<div style="padding-bottom: 0%" class="container">
			

						<!-- Logo -->
						<?php
           $result = mysqli_query($conn_header1,  "CALL Header()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
							<h1 id="logo"><h1><?php echo $Titulli ?></h1></a></h1>
							<br>
							<p style="text-align:right; font-size:15;padding-right: 5%"> <br>Jeni kycur si: <em> <?php echo $login_user;?>!</em></p>
							<hr>
							<?php } ?>
							
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="ballina.php"><span>Ballina</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>Raportet</span></a>
										<ul>
											<li><a href="#">Raporte ditore</a></li>
											<li><a href="#">Raporte javore</a></li>
											<li><a href="#">Raporte mujote</a></li>
											<li><a href="#">Raporte vjetore</a></li>
											
											
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="kerkesat.php"><span>Kerkesat</span></a></li>
									<li><a class="icon solid fa-retweet" href="logout.php"><span>Ckycu</span></a></li>
									
								</ul>
							</nav>
							

					</div>
				</section>
