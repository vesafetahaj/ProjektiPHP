<?php
    function printProject($Imgsrc,$name){
    echo "
            <div class = 'project-content'>
                <a href='#'><img src='" . $Imgsrc . "' alt='' class='app'></a>
                <h3 style='font-size: 15px; text-align:center;font-family:'Roboto Condensed', sans-serif; background-color:#FFE6EE;height:40px;margin-top:-5px'>".$name."</h4>
            </div>
            
        ";
    }

?>
