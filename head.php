<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
    <h1 class="notext">디자인 맑음 웹사이트 제작</h1>
    <header class="headerD">
        <div class="headerwrapD">
            <h2 class="notext">헤더:메인메뉴,로고,서브메뉴</h2>
            <!-- 서브메뉴 -->
            <ul id="tnbD">
                <li><a href="<?php echo G5_URL ?>/index.php">HOME</a></li>
                <?php if ($is_member) {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                    <?php if ($is_admin) {  ?>
                    <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                    <?php }  ?>
                    <?php } else {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
            </ul>
            <!-- 로고 -->
            <div id="logoD">
                <a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_URL ?>/image/logo.png" alt="헤더로고"></a>
            </div>
            <!-- 메인메뉴 -->
            <nav id="menuD">
                <ul>
                    <li><a href="<?php echo G5_URL ?>/docs/intro.php">맑음 이야기</a></li>
                    <li><a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=portfolio">포트폴리오</a></li>
                    <li><a href="http://pishshic.dothome.co.kr/bbs/board.php?bo_table=notice">맑음 소식</a></li>
                    <li><a href="<?php echo G5_URL ?>/docs/customer1.php">제작 서비스</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!-- } 상단 끝 -->
