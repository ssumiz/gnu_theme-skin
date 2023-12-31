<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="bg-light py-5">
    <h2 class="container py-5">
        <?php echo $bo_subject ?>
    <ul class= "row mx-0">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <li class="bg-white p-4 mx-1">
            
             <p>
                <i class = "<?php echo $list[$i]['wr_2']; ?>"></i>
                <span><?php echo $list[$i]['wr_1']; ?></span>        
            </p>
            <a href="<?php echo $wr_href; ?>" class="lt_img">

            <span class = "d-block"><?php echo $list[$i]['subject']; ?></span>
            <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
            </a>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
 
</div>

