
                            <?php
            $result = mysqli_query($conn_header1,  "CALL Header()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);

			  
if($result==null)
  mysqli_free_result($result);

			?>
							<h1 id="logo" style="padding-bottom: 10%;"><a    class="fas fa-bicycle" href="ballina.php"><?php echo $Titulli ?></a></h1>
					
                            <?php } ?>
			