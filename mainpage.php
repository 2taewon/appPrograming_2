<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>MRP Site</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        function read_nickname(){
        
        var Temp;

        $.ajax({
            url: 'read_API.php', 
            type: 'get',
            dataType: 'json',
            async :false,
            success: function (data) {

                Temp = data.nickname;

            },

            error: function(e) {
                alert("");  
            }
        });

        return Temp;
    }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/Logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#chart">무비차트</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ranking">일별 박스오피스 순위</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">영화게시판</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#expect">상영예정작</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#support">고객센터</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong><script>document.write(read_nickname())</script></strong>님 안녕하세요</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">영화 리뷰하는 사람들</h1>
            <h1 class="title">MRP</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="chart" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">무비차트</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">2023/06/06 오후 6:00 기준</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <img src="assets/imgs/gangcity.jpg" alt ="">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> 범죄도시3 <h5>
                            <p class="mb-0">베트남 납치 살해범 검거 후 7년 뒤, ‘마석도’(마동석)는 새로운 팀원들과 함께 살인사건을 조사한다.<br>
                                사건 조사 중, ‘마석도’는 신종 마약 사건이 연루되었음을 알게 되고 수사를 확대한다.<br>
                                한편, 마약 사건의 배후인 '주성철'(이준혁)은 계속해서 판을 키워가고 <br>
                                약을 유통하던 일본 조직과 '리키'(아오키 무네타카)까지 한국에 들어오며 사건의 규모는 점점 더 커져가는데...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <img src="assets/imgs/transfomer.jpg" alt ="">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">트랜스포머 : 비스트의 서막<h5>
                            <p class="mb-0">전 우주의 행성을 집어삼키는 절대자,<br>
                                ‘유니크론’의 부하 ‘스커지’는<br>
                                ‘테러콘’들을 이끌고 지구에 당도한다.<br>
                                
                                그에 맞서기 위해 지구에 정체를 숨기고 있던<br>
                                트랜스포머 ‘오토봇’ 군단이 모습을 드러내고<br>
                                또 다른 트랜스포머 진영인 ‘맥시멀’과 힘을 합친다.<br>
                                
                                옵티머스 프라임이 이끄는 ‘오토봇’과<br>
                                옵티머스 프라이멀을 중심으로 한 ‘맥시멀’.<br>
                                모두의 운명을 건 그들의 압도적 전투가 시작된다!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <img src="assets/imgs/flash.jpg" alt ="">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">플래시<h5>
                            <p class="mb-0">빛보다 빠른 스피드, 물체 투과, 전기 방출, 자체 회복, 천재적인 두뇌까지 갓벽한 능력을 자랑하지만 존재감은 제로,
                                ‘저스티스 리그’에서 궂은일을 도맡아 하는 히어로 ‘플래시’.<br>
                                어느 날 자신에게 빛보다 빠른 속도로 달리면 시공간 이동 능력이 있음을 알게 된 그는 ‘브루스 웨인’의 만류를 무시한 채 끔찍한 상처로 얼룩진 과거를 바꾸기 위해 시간을 역행한다.<br>
                                의도치 않은 장소에 불시착한 ‘플래시’는 멀티버스 세상 속 또 다른 자신과 맞닥뜨리고 메타 휴먼이 흔적도 없이 사라지고 모든 것이 뒤엉킨 세상과 마주하게 된다.<br>
                                ‘플래시’는 자신이 알던 모습과 전혀 달라진 나이 들고 은퇴한 ‘배트맨’과 크립톤 행성에서 온 ‘슈퍼걸’의 도움으로 외계의 침공으로부터 시간과 차원이 붕괴된 지구를 구하려 나서는데…</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="ranking">
        <div class="container">
                    <h6 class="section-title text-center">일별 박스오피스 순위</h6>
        <div class="section-subtitle mb-5 text-center">
                    <a href = "dayapi.html"><b>지금 확인하러가기</b><span class ="arrow-right"></span></a>
            </div>            
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    <section id="review" class="section portfolio-section">
        <div class="board_wrap">
            <div class="board_title">
                <strong>영화게시판</strong>
                <p>영화를 자유롭게 토론하는 곳입니다.(스포금지)</p>
            </div>
            <div class="board_list_wrap">
                <div class="board_list">
                    <div class="top">
                        <div class="num">번호</div>
                        <div class="title">제목</div>
                        <div class="writer">글쓴이</div>
                        <div class="date">작성일</div>
                        <div class="count">조회</div>
                    </div>
    
                    <?php
                    // 데이터베이스 연결 설정
                    $host = "localhost";
                    $username = "ltw";
                    $password = "1234";
                    $dbname = "movie";
    
                    $conn = new mysqli($host, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("데이터베이스 연결 실패: " . $conn->connect_error);
                    }
    
                    // 데이터베이스에서 공지사항 데이터 가져오기
                    $query = "SELECT * FROM notice_board";
                    $result = $conn->query($query);
    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $num = $row["num"];
                            $title = $row["title"];
                            $writer = $row["writer"];
                            $date = $row["date"];
                            $count = $row["count"];
    
                            $date = date("Y-m-d"); // 현재 날짜로 업데이트
    
                            // 리스트 출력
                            echo '<div>
                                <div class="num">' . $num . '</div>
                                <div class="title"><a href="view.php?num=' . $num . '">' . $title . '</a></div>
                                <div class="writer">' . $writer . '</div>
                                <div class="date">' . $date . '</div>
                                <div class="count">' . $count . '</div>
                            </div>';
                        }
                    } else {
                        echo "공지사항이 없습니다.";
                    }
    
                    // 데이터베이스 연결 종료
                    $conn->close();
                    ?>
                </div>
                <div class="board_page">
                    <a href="#" class="bt first"><<</a>
                    <a href="#" class="bt prev"><</a>
                    <a href="#" class="num on">1</a>
                    <a href="#" class="num">2</a>
                    <a href="#" class="num">3</a>
                    <a href="#" class="num">4</a>
                    <a href="#" class="num">5</a>
                    <a href="#" class="bt next">></a>
                    <a href="#" class="bt last">>></a>
                </div>
                <div class="bt_wrap">
                    <a href="write.html" class="on">글쓰기</a>
                    <!--<a href="#">수정</a>-->
                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Blog Section -->
    <section class="section" id="expect">
        <div class="container">
            <h6 class="section-title mb-0 text-center">상영 예정작</h6>
            <h6 class="section-subtitle mb-5 text-center">2023/06/06 오후 6:00 기준</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/topgun.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">탑건</h6>
                            <p>쿠거는 항공전대에서 최고의 파일럿이었지만 이 사건으로 전투기 파일럿이라는 업무에 부담감을 느껴 예편을 선택하고, 미첼 대위와 그의 파트너인 후방관제사(Radar interceptor Operator, RIO) 브래드쇼 중위는 쿠거를 대신해 캘리포니아 미라마(Miramar) 해군기지에 있는 탑건 스쿨에 입학한다. <br>이곳에서 미첼과 브래드쇼는 그들과 마찬가지로 각 항모 전단에서 선발된 미해군 최고의 파일럿들과 함께 공중전 훈련과 치열한 경쟁을 벌이게 되는데...</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/the summer.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title"> 그 여름</h5>
                            <p>"서로의 몸은 차라리 꽃잎과 물결에 가까웠다"<br>
                                갈색 눈동자를 가진 평범한 학생 '이경'<br>
                                여름의 햇살을 닮은 고교 축구선수 '수이'<br>
                                
                                열여덟 살의 여름, 예기치 못한 사랑에 빠진<br>
                                '이경'과 '수이'는 함께하는 미래를 그리며 스무살을 맞이한다.<br>
                                
                                대학에 진학한 '이경'과 달리 '수이'는 바로 사회에 뛰어들고,<br>
                                낯선 행복과 사소한 오해 속에서 둘은 새로운 계절을 마주하게 된다</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/maplestory.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">메이플스토리 2023 SUMMER SHOWCASE NEW AGE</h6>
                            <p>극장에서 더 큰 화면, 풍부한 사운드로 즐기는 메이플스토리 NEW AGE 쇼케이스!
                            메이플스토리의 2023년 여름 업데이트 소식을 가장 빠르게 만나볼 수 있는 NEW AGE 쇼케이스에 용사님들을 초대합니다.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        
    </section>
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
    <section id="support" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">전화번호</h6>
                    <p class="mb-4">+82 010-1234-5678</p>

                    <h6 class="mb-0">주소</h6>
                    <p class="mb-4">경기도 안양시 만안구 성결대학로 53 성결대학교 </p>

                    <h6 class="mb-0">이메일</h6>
                    <p class="mb-0">taewon@sungkyul.ac.kr</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form name="frmInput" action="DropWrite.php" method="post" enctype="multipart/form-data">
                        <h4 class="mb-4">고객문의</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" id="name" placeholder="이름">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" id="email" placeholder="이메일">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" id="subject" placeholder="제목">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="내용"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-danger rounded w-md mt-3">보내기</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, MRP Created By LTW </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
