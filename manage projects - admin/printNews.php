<?php
    function printNews($Imgsrc,$name,$description){
    echo "
        <div class='newsContent' id='firstContent'>
            
            <img src=".$Imgsrc.">
            <h3>".$name."</h3>
            <h5>".$description."
            </h5>
        
        </div>
            
        ";
    }

?>