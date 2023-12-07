<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');



// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>


<!-------------------------- 네비게이션 -------------------------->
<?php include_once(G5_THEME_PATH.'/navication.php');?>	

<?php if(defined('_INDEX_')){ ?>
	<!-- 첫페이지 한정 -->
	<div class = "main_container">
<?php } else { ?>

	<div class = "sub_container">
<?php } ?>

<!-------------------------- 구글 아이콘 -------------------------->

<!-- 
<style>
/* mobile */
@media (min-width: 1px) and (max-width: 1089px) {
	.ety-main{margin-bottom:75px;}
}

/* desktop */
@media (min-width: 1090px) {
	.ety-main{margin-bottom:130px;}
}
</style>
<div class="ety-main"></div>
<div class="container">
 -->
