<?php
ob_start();
?>
<?php
if(isset($info_expo)) {
    while($r = $info_expo->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="expo_card">
            <div class="expo_infos">
                <h2>'.$r['title'].'</h2>
                <h3>'.$r['type'].'</h3>
                <h4>Du '.$r['start_date'].'<br>
                au '.$r['end_date'].'</h4>
                <p>'.$r['description'].'</p>
            </div>
            <div class="expo_img">
                <img src="./public/images/'.$r['name'].'" alt="'.$r['presentation'].'">
            </div>
        </div>';
    }
}



$content = ob_get_clean();

require 'template.php';