<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="assets/css/css.css">
</head>
<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>영화게시판</strong>
            <p>영화를 자유롭게 토론하는 곳입니다. (스포금지)</p>
        </div>
        <div class="board_view_wrap">
            <div class="board_view">
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

// 선택한 공지사항의 번호 가져오기
$num = $_GET['num'];

// 데이터베이스에서 공지사항 데이터 가져오기
$query = "SELECT * FROM notice_board WHERE num = '$num'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row["title"];
    $writer = $row["writer"];
    $date = $row["date"];
    $count = $row["count"];
    $content = $row["content"];

    $date = date("Y-m-d"); // 현재 날짜로 업데이트

    // 출력
    echo '<div class="title">' . $title . '</div>';
    echo '<div class="info">';
    echo '<dl><dt>번호</dt><dd>' . $num . '</dd></dl>';
    echo '<dl><dt>글쓴이</dt><dd>' . $writer . '</dd></dl>';
    echo '<dl><dt>작성일</dt><dd>' . $date . '</dd></dl>';
    echo '<dl><dt>조회</dt><dd>' . $count . '</dd></dl>';
    echo '</div>';
    echo '<div class="cont">' . $content . '</div>';
} else {
    echo "공지사항이 없습니다.";
}

// 데이터베이스 연결 종료
$conn->close();
?>

            </div>
            <div class="bt_wrap">
                <a href="mainpage.php" class="on">목록</a>
            </div>
        </div>
    </div>
</body>
</html>
