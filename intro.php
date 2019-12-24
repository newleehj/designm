<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<main class="introD">
    <h2 class="notext">본문:img, text</h2>
    <!-- 회사소개 -->
    <section class="introwrapD">
        <figure class="box1D">
            <img src="image/intro1.png" alt="인트로-사람손 일러스트" class="boximgD">
            <figcaption class="boxtextD">창조란 "창의(creative)"의 힘으로, 사물을 새롭게 재해석 하는 것이며,  
                만드는 사람과 사용하는 사람 모두가 행복해 질 수 있어야  합니다. 
                디자인을 통해 인류의 행복과 발전에 기여하고 싶은것이 디자인 맑음의 생각입니다.
            </figcaption>
        </figure>
        <figure class="box2D">
            <img src="image/intro2.png" alt="인트로-사람손 일러스트" class="boximgD">
            <figcaption class="boxtextD">제품디자인, 산업디자인, 기구설계, 시각디자인, 패키지 디자인 등 시제품 개발과 
                양산 컨설팅을 주 업무로하며, 다양한 제품 개발 경험과 지식으로 최고의 솔루션을 제시합니다.  
            </figcaption>
        </figure>
        <figure class="box3D">
            <img src="image/intro3.png" alt="인트로-사람손 일러스트" class="boximgD">
            <figcaption class="boxtextD">단순한 스타일링 위주의 시각화 작업에 그치는것이 아니라 사용자의 소유욕구와 감성을 자극합니다. 
                또 공감할 수 있는 마케팅 요소를 디자인에 적용하여, 제품의 퀄리티를 향상시키고 시장경쟁력을 갖출 수 있습니다.
            </figcaption>
        </figure>
        <figure class="mapD">
            <p class="mapDtitle">디자인 맑음 오시는 길</p>
            <img src="image/map.png" alt="맑음 지도" class="mapDimg">
            <figcaption class="mapDtext">▷ 광주광역시 북구 삼정로 92 한영B <br> ▷ 대표번호 : 070-123-1234</figcaption>
        </figure>
    </section>
</main>
 
<?php
include_once(G5_PATH.'/tail.php');
?>