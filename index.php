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

<main>
        <h2 class="notext">본문:슬라이드,베스트 포트폴리오</h2>
        <!-- 슬라이드 -->
        <section id="slideD">
            <div class="sliderD">
                <div><img src="image/slide1.png" alt="첫번째 슬라이드"></div>
                <div><img src="image/slide2.png" alt="두번째 슬라이드"></div>
                <div><img src="image/slide3.png" alt="번째 슬라이드"></div>
            </div>
        </section>
        <!-- 검색 -->
        <section class="hd_sch_wr">
            <fieldset id="hd_sch">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <!-- <input type="hidden" name="sop" value="and"> -->
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>

            </fieldset>
        </section>
        <!-- 베스트 포트폴리오 -->
        <section id="bestprD">
            <h3 class="titleD">BEST 포트폴리오</h3>
            <a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=portfolio"><p class="moreD">더보기 +</p></a>
            <figure class="best1D"> 
                <div class="bestImgD"><img src="image/best1.PNG" alt="베스트 포트폴리오 첫번째 사진"></div>
                <figcaption class="besttextD">패키지 디자인<br/>2015 디자인 어워드 수상</figcaption>
                <a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=portfolio&wr_id=6"><input type="button" value="VIEW" class="btnD"></a>
            </figure> 
            <figure class="best2D"> 
                <div class="bestImgD"><img src="image/best2.png" alt="베스트 포트폴리오 두번째 사진"></div>
                <figcaption class="besttextD">제품 디자인<br/>유리 보틀(3개국 수출 제품)</figcaption>
                <a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=portfolio&wr_id=5"><input type="button" value="VIEW" class="btnD"></a>
            </figure> 
            <figure class="best3D"> 
                <div class="bestImgD"><img src="image/best3.png" alt="베스트 포트폴리오 세번째 사진"></div>
                <figcaption class="besttextD">패키지 디자인<br/>지기구조 개발,포장지,라벨 등</figcaption>
                <a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=portfolio&wr_id=7"><input type="button" value="VIEW" class="btnD"></a>
            </figure> 
        </section>
    </main>
    <script>
        $(document).ready(function(){
        $('.sliderD').bxSlider({
            auto: true,
            autoControls: true,
            stopAutoOnClick: true,
            pager: true,
            slideWidth:1260
        })
        });
    </script>
<?php
include_once(G5_PATH.'/tail.php');
?>