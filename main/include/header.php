<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="daily tour"/>
    <meta property="og:image" content="images/logo.jpg"/>
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css" class="css">
    <link rel="stylesheet" href="css/jquery.bxslider.css" class="css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.4/swiper-bundle.css" integrity="sha512-303pOWiYlJMbneUN488MYlBISx7PqX8Lo/lllysH56eKO8nWIMEMGRHvkZzfXYrHj4j4j5NtBuWmgPnkLlzFCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" class="css">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


    <script>
        $(document).ready(function(){
            var slide = $(".slide").bxSlider({
                controls:false,
                pagerCustom:".slideTap",
                mode:"vertical",
                touchEnabled: false,
                infiniteLoop: false,
            });

        });
        $(document).ready(function(){
            $("#sdate1,#edate1,#sdate2,#edate2,#sdate3,#edate3,#sdate4,#edate4").datepicker({
                dateFormat: 'yy/mm/dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                yearSuffix: '년'
            })
        })

        
    </script>



</head>
<body>
    <header class="header">
        <div class="headerWrap">
            <div class="headerTop">
                <a href="./index.html"><h1><img src="images/logo1.png" alt=""></h1></a>
                <div class="formWrap">
                    <div class="searchForm">
                        <form action="#">
                            <p class="inpTxt">SEARCH</p>
                            <input type="text" name="search" placeholder="검색어를 입력하세요" class="inp">
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </form>
                    </div><!-- w290 h30 -->
                </div>
                <div class="headerInfo">
                    <p>+82 02 1234 5678</p>
                    <ul class="clearfix">
                        <li><a href="#"><img src="images/sns_icon1.png" alt=""></a></li>
                        <li><a href="#"><img src="images/sns_icon2.png" alt=""></a></li>
                        <li><a href="#"><img src="images/sns_icon3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/sns_icon4.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <div class="navlist">
                <ul class="clearfix">
                    <li><a href="./sub01.html">여행도시</a></li>
                    <li><a href="./sub02.html">호텔예약</a></li>
                    <li><a href="./sub03.html">렌트카</a></li>
                    <li><a href="./sub04.html">여행준비</a></li>
                    <li><a href="./sub05.html">회사소개</a></li>
                    <li><a href="./sub06.html">고객센터</a></li>
                </ul>
            </div>
        </nav>
    </header>