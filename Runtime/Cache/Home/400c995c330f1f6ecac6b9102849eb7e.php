<?php if (!defined('THINK_PATH')) exit();?><!-- <script src="/e/extend/photo_info/js/photoPic.js"></script>
<div id="photoInfo">
        <div id="photoBox">
        <ul>
<?php
 $pic=explode("\\r\\n",$navinfor['morepic']); foreach($pic as $v) { if(!$v)continue; $picarr[]=explode("::::::",$v); } $picstr=''; foreach($picarr as $v) { $picstr.='<li><span>'.$v[2].'</span><img src="'.$v[0].'" height="600" width="600" /></li>'; } ?>
<?=$picstr?>
        </ul>
        
            <div id="photoTxt"></div>
        </div>
    <div id="photoList"></div>        
</div> -->