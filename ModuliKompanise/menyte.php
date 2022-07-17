<nav id="nav">
								<ul>
					<?php
            $result = mysqli_query($conn_Header5,  "CALL Header_Logo1()");
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row); 
if($result==null)
  mysqli_free_result($result);
            ?>
						<li><a class="icon solid fa-home"  href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
			<?php } ?>


									<?php
            $result = mysqli_query($conn_meny2, "CALL Header_Logo2()");
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row);
if($result==null)
  mysqli_free_result($result);
            ?>
						<li><a class="icon fa-chart-bar"  href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
			<?php } ?>


									<?php
            $result = mysqli_query($conn_meny3, "CALL Header_Logo3()");
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row);
if($result==null)
  mysqli_free_result($result);
            ?>
						<li><a  class="icon solid fa-sitemap" href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
			<?php } ?>


												<?php
            $result = mysqli_query($conn_meny4, "CALL Header_Logo4()");
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row);
if($result==null)
  mysqli_free_result($result);
            ?>
                    <li><a class="icon solid fa-retweet" href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
	
			<?php } ?>
      </ul>
            </nav>
       