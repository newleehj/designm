<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');
?>

<section class="m_mainimg">
    <img src="<?php echo G5_URL ?>/image/m_main.png" alt="<?php echo $config['cf_title']; ?>">
</section>    

<?php echo latest('basic', 'portfolio', 12, 22); ?>

<section class="btn_mm">
    <a href="<?php echo G5_URL ?>/intro.php"><input type="button" value="제작서비스 바로가기" class="btn_mmtext"></a>
</section>

<?php echo latest('basic', 'notice', 12, 22); ?>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>