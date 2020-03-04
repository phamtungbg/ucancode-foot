<?php
function hienLoi($dsLoi,$tenInput){
    if ($dsLoi->has($tenInput)) {
        echo '<div class="alert alert-danger" role="alert">
                <strong>'.$dsLoi->first($tenInput).'</strong>
            </div>';
    }
}
