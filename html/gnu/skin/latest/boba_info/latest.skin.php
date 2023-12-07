<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="lat">
    <h2 class="text-center mb-5">
        <?php echo $bo_subject ?>
    </h2>
    <ul class = "row">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="col-3 p-5 border <?php echo $list[$i]['subject']; ?>">
            
            <?php
       
            echo $list[$i]['wr_content'];

            ?>
           
        </li>
    <?php }  ?>
  
    </ul>
    

</div>
