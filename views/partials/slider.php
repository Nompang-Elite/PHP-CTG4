<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .swiper{
            width: 80%;
            height:60vh;
        }
        .swiper-slide img{
            width: 100%;
        }
        .swiper .swiper-button-next, .swiper .swiper-button-prev{
            color: #fff;
        }
        .swiper .swiper-pagination-bullet-active{
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="/images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="/images/4.avif" alt=""></div>
                <div class="swiper-slide"><img src="/images/5.jpeg" alt=""></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        autoplay:{
            delay:3000,
            disableOnInterAction:false,
        },
    loop: true,
    navigation: {
        next: '.swiper-button-next',
        prev: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>