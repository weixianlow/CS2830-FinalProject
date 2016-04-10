<?php

    $count = 1;
    
    echo '<div class="carousel-inner" role="listbox">';
    
    foreach (glob("*.jpg") as $filename) {
        if(count == 1){
            echo '<div class="item active"><img src="'.$filename.'" alt="'$filename'" width="460" height="345"></div>';
            count++;
        }else
        {
            echo '<div class="item"><img src="'.$filename.'" alt="'$filename'" width="460" height="345"></div>';
            count++;
        }
    }
    
    echo '</div>';
?>