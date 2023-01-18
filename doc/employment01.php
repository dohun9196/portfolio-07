<?php
include_once('../../../common.php');
$num = 1;
$title = 'about';
include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <section class="about01_ceoE">
        <div class="top">
            <img src="<?php echo G5_THEME_URL ?>/img/about/about_all_visual.jpg" alt="">
            <div class="t_txt">
                <h2>인재채용</h2>
                <p>고객만족을 넘어 고객가치를 실천하는 선도기업</p>
            </div>
        </div>
        <div class="inner nav">
            <ul class="ab_nav">
                <li class="home_gnb"><a href="/"><i class="xi-home"></i></a></li>
                <li class="head_gnb"><a href="#!">About 비락<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_nav">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about01.php">About 비락</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business01.php">BUSUNESS</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">News Room</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/employment01.php">인재채용</a></li>
                    </ul>
                </li>
                <li class="ab_gnb"><a href="#!">인재채용<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_nav">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/employment01.php">인재채용</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    <section class="employment01 sec">
      <div class="inner emp">
            <h2>비락의 인재상</h2>
        </div>
    <div class="flex_inner emp">
        <div class="emp_img">
            <img src="<?php echo G5_THEME_URL ?>/img/employment/recrlist01.jpg" alt="">
        </div>
        <div class="emp_img">
            <img src="<?php echo G5_THEME_URL ?>/img/employment/recrlist02.jpg" alt="">
        </div>
        <div class="emp_img">
            <img src="<?php echo G5_THEME_URL ?>/img/employment/recrlist03.jpg" alt="">
        </div>
    </div>
    <div class="emp_lnk">
        <a href="http://recruit.vilac.co.kr/">진행중인 채용정보 확인하기</a>
    </div>
<?php
include_once(G5_THEME_PATH . '/tail.php');
?>