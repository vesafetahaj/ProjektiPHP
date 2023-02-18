<?php
    function printProject($Imgsrc,$name){
    echo "
            <div class = 'project-content'>
                <img src='" . $Imgsrc . "' alt='' class='app'>
                <h3 style='font-size: 15px; text-align:center;font-family:'Roboto Condensed', sans-serif; background-color:#FFE6EE;height:40px;margin-top:-5px'>".$name."</h4>
            </div>
            
        ";
    }

?>
