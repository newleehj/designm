<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="indexup_banner">
    <img src="<?php echo G5_URL ?>/images/indexup.png" alt="인덱스 상단 소개 배너">
    <p class="banner_text"><span>구매 문의</span> 010-5904-1603  ㅣ  <span>E-mail</span> goommorning@naver.com  ㅣ  <span>계좌</span> 농협 000-0000-00000(굼모닝)</p>
</div>    

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_list', 'free', 4, 23);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<div class="indexlink">
    <div class="indexlinkbox1">
        <p class="indexlink1T">키우기 세트 구매</P>
        <p class="indexlink1C1">Type1 번데기에서 성충으로 키우기</p>
        <p class="indexlink1C2">Type2 애벌레에서 성충으로 키우기</p>
        <p class="indexlink1C3">Type3 성충에서 알 낳기, 부화하기</p>
        <p class="indexlink1btn"><a href="#">키우기 세트 바로가기</a></p>
        <img src="<?php echo G5_URL ?>/images/link1.png" alt="인덱스 키우기 애벌레">
    </div>
    <div class="indexlinkbox2">
        <p class="indexlink2T">굼벵이 구매</P>
        <p class="indexlink2C1">Type1 건조 분말 굼뱅이 구매</p>
        <p class="indexlink2C2">Type2 건조 통 굼벵이 구매</p>
        <p class="indexlink2C3">Type3 성충,코쿤 등 구매</p>
        <p class="indexlink2btn"><a href="#">굼벵이 구매 바로가기</a></p>
        <img src="<?php echo G5_URL ?>/images/link2.png" alt="인덱스 굼벵이 가루">
    </div>
</div>    

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>