<?php
function hienLoi($dsLoi,$tenInput){
    if ($dsLoi->has($tenInput)) {
        echo '<div class="alert alert-danger" role="alert">
                <strong>'.$dsLoi->first($tenInput).'</strong>
            </div>';
    }
}

function dmSelectOpt($mang,$idCha,$cap,$idChon){
    foreach($mang as $item){
		if($item['id_cha']==$idCha){
            if ($item['id']==$idChon) {
                echo '<option selected value='.$item['id'].'>'.$cap.$item['ten'].'</option>';
            }else{
                echo '<option value='.$item['id'].'>'.$cap.$item['ten'].'</option>';
            }

			dmSelectOpt($mang,$item['id'],$cap.'--|',$idChon);
		}
	}
}


function dmMenu($mang,$idCha,$cap){
	foreach($mang as $item){
		if($item['id_cha']==$idCha){
			echo    '<div class="item-menu"><span>'.$cap.$item['ten'].'</span>
                        <div class="category-fix">
                            <a class="btn-category btn-primary" href="/admin/category/edit/'.$item['id'].'"><i class="fa fa-edit"></i></a>
                            <a onclick="return xoaDm('."'".$item['ten']."'".')" class="btn-category btn-danger" href="/admin/category/del/'.$item['id'].'"><i class="fas fa-times"></i></i></a>
                        </div>
                     </div>';
                     dmMenu($mang,$item['id'],$cap.'--|');
		}
	};
}
