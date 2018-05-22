<?php 

function createPfCard($imagepath, $imagelink, $title, $text){
    echo('<div class="kortti">
        <div class="web_korttiImg" style="min-width: 200px; max-width: 300px;">
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
