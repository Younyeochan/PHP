<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header"> 
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
            <?php
                // echo "<pre>";
                // var_dump($_SESSION);
                // echo "</pre>";
            ?>
            <h3>여찬이의 포트폴리오</h3>
                <p>여찬이의 20살 부터 30살까지의 인생 포트폴리오입니다. 살아온 모든 과정을 담은 포트폴리오로  궁금한 사항이 있으시다면 언제든지 연락주신다면 성심성의껏 답변드리겠습니다. E-Mail : ducks0413@naver.com</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="http://naver.me/GnGS76zz"  title="현장 사진">
                                <img src="../assets/img/card01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>인테리어 디자이너</strong>
                                <span>실내건축디자인과 졸업 후 인테리어 회사에 취업하여 설계, 시공 기사로 근무함.</span>
                                <span class="keyword">
                                    <span>#실내건축기사</span>
                                    <span>#실내건축디자이너</span>
                                    <span>#디자이너</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/14jtyugyktKEU7_LyLakS4NUuctciTcxv/view?usp=sharing"  title="기획서">
                                <img src="../assets/img/card02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>기획자</strong>
                                <span>건설 현장에서 만난 IT 사장님의 사업 제안으로 같이 어플리케이션을 출시해보다.</span>
                                <span class="keyword">
                                    <span>#AViewer</span>
                                    <span>#도면관리시스템</span>
                                    <span>#건설 현장 맞춤 기획</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>개발자</strong>
                                <span>기획자로 재직중 안된다는게 많은 개발자들의 태도로 개발자로 전향하다.</span>
                                <span class="keyword">
                                    <span>#안되면 되게하라.</span>
                                    <span>#될때까지 한다.</span>
                                </span>
                            </div>
                        </li>

                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">웹스토리보이 강의 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">강의 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://www.youtube.com/embed/Z7xzk8c1Ku0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>기본에 충실한 개발자</h5>
                            <p>페이퍼 프로토타입의 제작 과정과 내용을 설명하는 동영상입니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../../assets/img/svg-pizza.svg" alt="윤여찬">
                                        <span>#윤여찬</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../../assets/img/svg-vanilla-cupcake.svg" alt="전대섭">
                                        <span>#전대섭</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../../assets/img/svg-pear.svg" alt="인재연">
                                        <span>#인재연</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../../assets/img/svg-cherries.svg" alt="조범수">
                                        <span>#조범수</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>어떻게 발전했는가?</h3>
                <p>20살부터 30살까지의 점차 발전한 윤여찬의 일대기를 다룬 페이지입니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="https://drive.google.com/file/d/0BzMtWOSU4aKVWnl5OTVKd1FIODQ/view?usp=sharing&resourcekey=0-bK4-1mxAcjg24lktxW7bbg" target=_blank>
                                <img src="../../assets/img/Rectangle 23.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>학생 작업물 모음</strong>
                                <span class="keyword">
                                    <span>계원예대-한세대까지 학생일때 작업했던 작업물을 모았습니다.</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="http://naver.me/GnGS76zz" target=_blank>
                                <img src="../../assets/img/Rectangle 24.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>인테리어 디자이너 활동</strong>
                                <span class="keyword">
                                    <span>인테리어 디자이너 재직 당시 시공, 설계 작업물을 모았습니다.</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/14jtyugyktKEU7_LyLakS4NUuctciTcxv/view?usp=sharing" target=_blank>
                                <img src="../../assets/img/Rectangle 25.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>기획자 활동</strong>
                                <span class="keyword">
                                    <span>기획자 재직 당시 작업했던 작업물과 설계했던 앱 작업물을 모았습니다.</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../../assets/img/Rectangle 26.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>웹 프론트앤드 활동</strong>
                                <span class="keyword">
                                    <span>웹 프론트앤드 작업물과 사이트, 코딩에 관한 작업물들을 모았습니다.</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>로그인 후 소통해봐요!</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT myBoardID, boardTitle, regTime FROM myBoard99 ORDER BY myBoardID DESC LIMIT 4";
                                $result = $connect -> query($sql);
                                if($result){
                                    $count = $result -> num_rows;
                                    if($count > 0){
                                        for($i = 1; $i <= $count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<li><a href='../board/boardView.php?boardID=".$info['myBoardID']."'>".$info['boardTitle']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                        <a href="board.html" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT youText, regTime FROM myComment ORDER BY regTime DESC LIMIT 4";
                                $result = $connect -> query($sql);
                                if($result){
                                    $count = $result -> num_rows;
                                    if($count > 0){
                                        for($i = 1; $i <= $count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<li><a href='../comment/comment.php'>".$info['youText']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                        <a href="comment.html" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </articel>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>