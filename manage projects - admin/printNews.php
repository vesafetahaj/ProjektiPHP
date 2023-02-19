<?php
    function printNews($Imgsrc,$name,$description,$pdf){
    echo "
    
        <div class='newsContent' id='firstContent'>
         <a href=".$pdf." target='_blank'>
            <img src=".$Imgsrc.">
            <h3>".$name."</h3>
            <h5>".$description."
            </h5>
        </a>
        </div>
      
        ";
    }

?>