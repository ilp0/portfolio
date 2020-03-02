<?php 

function createPfCard($imagepath, $imagelink, $title, $text, $textEng, $highlight = 0){
    $t = "";
    $h = "unhighlighted"
    if ($highlight === 1) $h = "highlighted";
    if($_GET["lang"] === 'en') {
        $t = $textEng; 
    } else {
        $t = $text;
    } 
    echo('<div class="kortti '. $h . '">
        <div class="web_korttiImg">
            <a href="' . $imagelink . '"><img src="' . $imagepath . '" alt="' . $title . '"></a>
        </div>
        <div class="korttiContainer">
            <h3>' . $title . '</h3>
            <p>' . $t . '</p>
        </div>
    </div>
    ');
}

function createCvCard($imagepath, $title, $text, $textEng, $fromDate, $toDate, $highlight = 0){
    $t = "";
    $h = "unhighlighted"
    if ($highlight === 1) $h = "highlighted";
    if($_GET["lang"] === 'en') {
        $t = $textEng; 
    } else {
        $t = $text;
    } 
    echo('<div class="kortti '. $h . '">
        <div class="korttiImg">
            <img src="' . $imagepath . '" alt="' . $title . '" style="width:100%">
        </div>
            <div class="korttiContainer">
                <table class="workTable">
                    <tr>
                        <td colspan="3"><h3>' . $title . '</h3></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><p>' . $fromDate . '</p></td><td><p>-</p></td><td style="text-align:left;"><p>' . $toDate . '</p></td>
                    </tr>
                    <tr>
                        <td style="width:100%;" colspan="3"><p>'. $t .'</p></td>
                    </tr>
                </table>
            </div>
    </div>');

}

function createHobbyCard($imagepath, $title, $text, $textEng){
     $t = "";
    if($_GET["lang"] === 'en') {
        $t = $textEng; 
    } else {
        $t = $text;
    }
     echo('<div class="kortti">
        <div class="web_korttiImg">
                <img src="' . $imagepath . '"  alt="' . $title . '" style="width:100%">
            </div>
        <div class="korttiContainer">
            <h3>' . $title . '</h3>
                <p>' . $t . '</p>
        </div>
    </div>'
    );
}

?>
