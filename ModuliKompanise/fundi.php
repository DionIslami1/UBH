<section>
					
																								
								
					<div id="copyright" class="container">
						<table>
                        <?php
                 $result = mysqli_query($conn_footer, "CALL Footer_Adresa()");
            // $result = mysqli_query($conn, "SELECT * FROM tedhenat WHERE PageLayout='Footer_Adresa'");
             while ($row = mysqli_fetch_assoc($result)) {
              extract($row);			  
             if($result==null)
              mysqli_free_result($result);

             ?>

									<td > <p><?php echo $Pershkrimi; ?></td>
							
                                    <?php } ?>

                                    <?php
             $result = mysqli_query($conn_footer2, "CALL Footer_Phone()");
            //$result = mysqli_query($conn, "SELECT * FROM tedhenat WHERE PageLayout='Footer_Phone'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
            <td  > <p><?php echo $Pershkrimi; ?></td>
           
            <?php } ?>

            
            <?php
            $result = mysqli_query($conn_footer3, "CALL Footer_Email()");
           // $result = mysqli_query($conn, "SELECT * FROM tedhenat WHERE PageLayout='Footer_Email'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
              <td  > <p><?php echo $Pershkrimi; ?></td>
              </table>
            <?php } ?>


									<hr>
					
																			
											
						
                        <?php
                         $result = mysqli_query($conn_footer4, "CALL Footer_CopyRight()");
          //  $result = mysqli_query($conn, "SELECT * FROM tedhenat WHERE PageLayout='Footer_CopyRight'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
             <td>
             
                          
                               <p style="padding-left:25%"><?php echo $Pershkrimi; ?></td>
            
             <?php } ?>

            
							<!-- <li class="icon brands fa-facebook-f">
							<a href="#">facebook.com/untitled</a>	
							<li class="icon brands fa-instagram">
							<a  href="#">instagram.com/untitled</a> -->
					</div>
				</section>
				

		</div>
