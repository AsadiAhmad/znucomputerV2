<?php
  function htmlVideoGenerator($lesson_name, $count) {
    for ($x = 0; $x <= $count; $x++) {
      echo '<div class="part" data-lesson="'. $lesson_name .'" data-section="'. $x .'"><p class="section-txt">Section '. $x .'</p><p class="date-txt">1400/00/00</p></div>';
    } 
  }
?> 