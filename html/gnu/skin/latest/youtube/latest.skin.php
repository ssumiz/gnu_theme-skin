<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        
    <div class="row" style="margin:0px;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $list[$i]['wr_1']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding bg-gray-2">
         <div class="a-box">
            <h2 class="ks4 margin-bottom-20"><?php echo $list[$i]['subject']; ?></h2>
         
                <?php echo $list[$i]['wr_content']; ?>

            <div class="margin-top-20 margin-bottom-20">
               <button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='<?php echo $list[$i]['wr_link1']; ?>'">유튜브 바로가기</button>
            </div>
         </div>
      </div><!-- /col -->

   </div><!-- /row -->



    <?php }  ?>
 