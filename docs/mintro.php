<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/index.php');
//     return;
// }

include_once(G5_MOBILE_PATH.'/head.php');
?>

<style>
.box1M {
    margin-top:50px;
    margin-left:30px;
}
.box3M {
    margin-bottom:50px;
    margin-left:30px;
}
.box2M {
    margin-left:30px;
}
.boximgM {
    border-radius:10px;
    border:1px solid #ddd;
} 
.boxtextM {
    margin:20px 30px 30px 30px;
}
</style>

<main class="introM">
    <h2 class="notext">본문:img, text</h2>
    <!-- 회사소개 -->
    <section class="introwrapM">
        <figure class="box1M">
            <img src="<?php echo G5_URL ?>/image/intro1.png" alt="인트로-사람손 일러스트" class="boximgM">
            <figcaption class="boxtextM">디자인이란 사물을 새롭게 재해석 하는 것이며,  
                <br> 만드는 사람과 쓰는 사람 모두가 행복해야 합니다.
            </figcaption>
        </figure>
        <figure class="box2M">
            <img src="<?php echo G5_URL ?>/image/intro2.png" alt="인트로-사람손 일러스트" class="boximgM">
            <figcaption class="boxtextM">제품디자인, 시각디자인, 패키지 디자인 등
                <br> 다양한 제품 개발과 최고의 솔루션을 제시합니다.  
            </figcaption>
        </figure>
        <figure class="box3M">
            <img src="<?php echo G5_URL ?>/image/intro3.png" alt="인트로-사람손 일러스트" class="boximgM">
            <figcaption class="boxtextM">단순한 스타일링 위주의 시각화에 그치지 않고
                <br> 공감의 디자인으로 감성을 자극합니다.
            </figcaption>
        </figure>
    </section>
</main>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>