
                            <?php
                            $result = mysqli_query($conn_header1,  "CALL Header()");
           // $result = mysqli_query($conn, "SELECT * FROM tedhenat WHERE PageLayout='Header'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);

			  
if($result==null)
  mysqli_free_result($result);

			?>
							<h1 id="logo" style="padding: 2%;"><a    class="fas fa-bicycle" href="ballina.php"><?php echo $Titulli ?></a></h1>
							<p style="text-align:right; font-size:15; padding-right: 5%"> <br>Jeni kycur si: <em> <?php echo $login_user;?>!</em></p>
					
                            <?php } ?>
						