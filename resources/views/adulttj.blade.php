<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">-->
        <script src="https://kit.fontawesome.com/667b41aa07.js" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: white;
            }
            img {
                width: 100%;
                }
            .button {
                /*margin-top: -1em;*/
                text-align: center;
                font-weight: bold;
                font-family:"MS Pゴシック",sans-serif;
            }
            video {
                width: 100%;
            }
            p {
                font-family:"MS Pゴシック",sans-serif;
                font-weight: bold;
                color: black;
                text-align: center;
            }
            .button-top {
                margin-top: -1.5em;
            }
            
            /*ボタン*/
            /*@import "https://use.fontawesome.com/releases/v5.13.0/css/all.css";*/

            *,
            *:before,
            *:after {
              -webkit-box-sizing: inherit;
              box-sizing: inherit;
            }
            
            html {
              -webkit-box-sizing: border-box;
              box-sizing: border-box;
              font-size: 62.5%;
            }
            
            .btn,
            a.btn,
            button.btn {
              font-size: 1.6rem;
              font-weight: 700;
              line-height: 1.5;
              position: relative;
              display: inline-block;
              padding: 1rem 4rem;
              cursor: pointer;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              -webkit-transition: all 0.3s;
              transition: all 0.3s;
              text-align: center;
              vertical-align: middle;
              text-decoration: none;
              letter-spacing: 0.1em;
              color: #212529;
              border-radius: 0.5rem;
            }
            
            a.btn-custom01 {
              margin-bottom: 0.5rem;
              padding: 0;
              border-radius: 0.75rem;
            }
            
            a.btn-custom01:before {
              position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
            
              width: 100%;
              height: 100%;
            
              content: "";
              -webkit-transition: all 0.3s;
              transition: all 0.3s;
              -webkit-transform: translate3d(0, 0.75rem, -1rem);
              transform: translate3d(0, 0.75rem, -1rem);
            
              border: 2px solid #000;
              border-radius: inherit;
              background: #ccc100;
              -webkit-box-shadow: 0 0.6rem 0 0 rgba(0, 0, 0, 0.2);
              box-shadow: 0 0.6rem 0 0 rgba(0, 0, 0, 0.2);
            }
            
            a.btn-custom01:after {
              font-family: "Font Awesome 5 Free";
              font-size: 2rem;
              font-weight: normal;
              line-height: 1;
              position: absolute;
              top: calc(50% - 1rem);
              left: 1.5rem;
              margin: 0;
              padding: 0;
              content: "\f144";
            }
            
            .btn-custom01-front {
              position: relative;
              display: block;
              padding: 1.5rem 5rem 1.5rem 5rem;
            
              -webkit-transition: all 0.3s;
              transition: all 0.3s;
              border: 2px solid #000;
              border-radius: inherit;
              background: #fff100;
            }
            
            .fa-position-left {
              position: absolute;
              top: calc(50% - 0.5em);
              left: 1rem;
            }
            
            .fa-position-right {
              position: absolute;
              top: calc(50% - 0.5em);
              right: 1rem;
            }
            
            a.btn-custom01:hover {
              -webkit-transform: translate(0, 0.25rem);
              transform: translate(0, 0.25rem);
              background: #fff100;
            }
            
            a.btn-custom01:hover:before {
              -webkit-transform: translate3d(0, 0.5rem, -1rem);
              transform: translate3d(0, 0.5rem, -1rem);
              -webkit-box-shadow: 0 0.35rem 0 0 rgba(0, 0, 0, 0.2);
              box-shadow: 0 0.35rem 0 0 rgba(0, 0, 0, 0.2);
            }
            
            a.btn-custom01:hover:after {
              content: "\f144";
            }
            
            a.btn-custom01:active {
              -webkit-transform: translate(0rem, 0.75rem);
              transform: translate(0rem, 0.75rem);
            }
            
            a.btn-custom01:active:before {
              -webkit-transform: translate3d(0, 0, -1rem);
              transform: translate3d(0, 0, -1rem);
              -webkit-box-shadow: 0 0.35rem 0 0 rgba(0, 0, 0, 0.2);
              box-shadow: 0 0.35rem 0 0 rgba(0, 0, 0, 0.2);
            }
            
            a.btn-custom01:active:after {
              content: "\f144";
            }
        </style>
        <title>MyNews</title>
    </head>
    <body>
        <img src="image/unnamed.jpg">
        <img src="image/adbu_ed.png" class="button-top">
        
        <div class="button">
            <a href="./check" class="btn btn-custom01"><span class="btn-custom01-front">匿名ライブ配信アプリ</span><i class="fas fa-angle-right fa-position-right"></i></a>
            <!--<a class="btn btn-custom01"><span class="btn-custom01-front">素人特集</span><i class="fas fa-angle-right fa-position-right"></i></a>-->
            <!--<a href="./os"><img src="image/adbutton.png" class="button"></a>-->
        </div>
        
        <br>
        <img src="image/unnamed-3.jpg">
        <a href="./check"><img src="image/IMG_1505.jpg"></a>
        <img src="image/adbut_ed2.png">
        
        <div class="button">
            <a href="./check" class="btn btn-custom01"><span class="btn-custom01-front">ライブ配信は公式アプリから</span><i class="fas fa-angle-right fa-position-right"></i></a>
            <!--<a href="./os"><img src="image/adbutton2.png"></a>-->
        </div>
        
        <br>
        <p>※グループ内配信切り取り（ID：23994）</p>
        <video src="image/adsammple.mp4" controls muted autoplay playsinline loop></video>
        <br>
        <br>
        <img src="image/campaign-2.png">
        <div class="button">
            <a href="./check" class="btn btn-custom01"><span class="btn-custom01-front">簡易登録して2万円GETする</span><i class="fas fa-angle-right fa-position-right"></i></a>
        </div>
        <br>
    </body>
</html>