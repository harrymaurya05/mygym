<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CMA Tutorials">
    <meta name="keywords" content="">
    <meta type="UTF-8">
    <link rel="stylesheet" href="src/css/intro.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <head>
    </head>
    <style>
         .ham-burger{
            display: inline-block;
            position: relative;
            z-index: 100;
            position: absolute;
            top:25px;
            right: 70px;
        }
         .ham-burger span{
            height: 3px;
            margin-bottom:8px;
            display: block;
            background-color:#ffffff;
            width:30px;
            -webkit-transition: transform .5s ease;
            transition: transform .5s ease;
        }
         .ham-burger span:nth-child(1){
            transform-origin: left top;
        }
         .ham-burger span:nth-child(2){
            transform-origin: left bottom;
        }

         .ham-burger.active span:nth-child(1){
            -webkit-transform: rotate(45deg) translateY(-6px);
            transform: rotate(45deg) translateY(-6px);
        }
         .ham-burger.active span:nth-child(2){
            -webkit-transform: rotate(-45deg) translateY(6px);
            transform: rotate(-45deg) translateY(6px)
        }
         .nav{
            position: fixed;
            background-color: #c11325;
            width: 280px;
            top:0;
            right:0;
            height: 100%;
            z-index: 99;
            padding:100px 0px 15px; 
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -webkit-transition: transform .5s ease;
            transition: transform .5s ease;
        }
         .nav.open{
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
         .nav ul{
            list-style: none;
            margin:0;
            padding:0px;
        }
         .nav ul li{
        display: block;
        }
         .nav ul li a{
            text-decoration: none;
            font-size: 30px;
            font-weight: 400;
            color:#ffffff;
            display: block;
            position: relative;
            padding:10px 30px;
        }
         .nav ul li a.active::before{
            content: '';
            position: absolute;
            left:0px;
            top:0px;
            height: 100%;
            width:100%;
            background-color:#000000;
            opacity:.2;
            -webkit-transition: width .5s ease;
            transition: width .5s ease;
            z-index: -1;
        }
         .nav ul li a::before{
            content: '';
            position: absolute;
            left:0px;
            top:0px;
            height: 100%;
            width:0px;
            background-color:#000000;
            opacity:.2;
            -webkit-transition: width .5s ease;
            transition: width .5s ease;
            z-index: -1;
        }
         .nav ul li a:hover::before{
            width: 100%;
        }
    </style>
    <body>   
        <div class="container">
            <div class="background"></div>
            <div class="logo">
                <h1><b>GYM</b> Time</h1>
            </div>
            <a href="javascript:void(0)" class="ham-burger" >
                <span></span>	
                <span></span>
              </a>
              <div class="nav">
                <ul>
                    <li><a href="src/index.php" >Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#classes">Classes</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#price">Price</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
                <div class="image">
                <img src="img/myimg.png" alt="">
                </div>
                <div class="text">
                    <h6>Shape Your Body</h6>
                    <h2>BE <span>STRONG </span>TRANING HARD</h2>
                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi scing elit. Donec frin gill a tinc idunt dictum. Phasellus mollis tellus et cur sus laci nia.Donec vitae rhon cus lorem.</p>
                    <button>Read More</button>
                </div>
            <div class="icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){

            $(".ham-burger, .nav ul li a").click(function(){
            
                $(".nav").toggleClass("open")

                $(".ham-burger").toggleClass("active");
            }) 
            $(".nav ul li a, .go-down").click(function(event){
                if(this.hash !== ""){

                    event.preventDefault();

                    var hash=this.hash; 

                    $('html,body').animate({
                        scrollTop:$(hash).offset().top
                    },800 , function(){
                        window.location.hash=hash;
                    });

                    // add active class in navigation
                    $(".nav ul li a").removeClass("active")
                    $(this).addClass("active")
                }
            })
        })
      </script>
    </body>
</html>