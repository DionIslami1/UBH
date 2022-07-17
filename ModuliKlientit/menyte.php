	<!-- Nav -->
    <nav id="nav">
    
								<ul>
                                <?php
        // $result = mysqli_query($conn_Kli, "CALL ZgjedhMenyKli();");
       $result =  mysqli_query($conn, "CALL zgjedhMenyKlientiLogoK1();");
        /*SELECT m_menu_name, m_menu_link  FROM main_menu WHERE Modul='ModuliAdministratorit'*/
        while ($row = mysqli_fetch_assoc($result)) {

          extract($row);
          
          
if($result==null)
mysqli_free_result($result);

        ?>
                                <li><a class="icon solid fa-home"  href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
                <?php } 		?>
                <?php
        // $result = mysqli_query($conn_Kli, "CALL ZgjedhMenyKli();");
       $result =  mysqli_query($conn_L3, "CALL zgjedhMenyKlientiLogoK3();");
        /*SELECT m_menu_name, m_menu_link  FROM main_menu WHERE Modul='ModuliAdministratorit'*/
        while ($row = mysqli_fetch_assoc($result)) {

          extract($row);
          
          
if($result==null)
mysqli_free_result($result);

        ?>
                                <li><a class="icon solid fa-sitemap"  href="<?php echo $row['Linku']; ?>"> <span><?php echo $row['Emri']; ?></span></a></li> 
                <?php }         ?>
            </ul>
            
        </nav>
    