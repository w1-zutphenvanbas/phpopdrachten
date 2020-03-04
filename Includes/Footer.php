<?php
/**
 *User:Bas van Zutphen
 *Date: 12-2-2020
 *Time: 11:29
 *File: 3.1.php
 */
?>
  <footer>
    <?php
    echo $year;
    echo $name;
    echo $hournow;
    ?>
      <?php
      if($hournow <= 5) {
          echo $daypart = "Goedennacht";
      }
      else if($hournow > 5 && $hournow < 12){
          echo $daypart = "Goedenochtend";
      }
      else if($hournow > 12 && $hournow <17){
          echo $daypart = "Goedemiddag";
      }
      if($hournow > 17 && $hournow <24){
        echo $daypart = "Goedenavond";
      }
      ?>
    </footer>
</body>
</html>
