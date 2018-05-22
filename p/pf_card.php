<?php 

function createPfCard($imagepath, $imagelink, $title, $text){
    echo('<div class="kortti">
        <div class="web_korttiImg">
            <a href="' . $imagelink . '"><img src="' . $imagepath . '" alt="' . $title . '"></a>
        </div>
        <div class="korttiContainer">
            <h3>' . $title . '</h3>
            <p>' . $text . '</p>
        </div>
    </div>
    ');
}

?>
