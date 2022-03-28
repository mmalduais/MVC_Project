<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>librrary</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="app/views/css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="app/views/css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="app/views/css/about.css" />
    <link rel="stylesheet" href="app/views/css/gategory.css" />
    <link rel="stylesheet" href="app/views/css/Details1.css" />
    <!-- <link rel="stylesheet" href="app/views/css/details1.css" /> -->
    <!-- Google Fonts -->
   
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cairo:wght@200&family=Fruktur&family=Griffy&family=Lobster&family=Lobster+Two&family=Luxurious+Roman&family=Mochiy+Pop+One&family=Open+Sans:wght@300&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">

</head>

<body dir="rtl">
    <header>
        <!-- <div class="container"> -->
        <nav>

            <ul>
                <i class="fas fa-bars toggle"></i>
                <li class="head" id="openForm">
                    <i class="fas fa-user"></i>
                    <label>ادخل لحسابك أو سجل الآن</label>
                </li>
                <li class="head">
                    <i class="fas fa-star"></i>
                    <label> المفضلة</label>
                <li>
                <li class="head">
                    <i class="fas fa-caravan"></i>
                    <label>تتبع الشحنه</label>
                </li>
                <li class="head">

                    <i class="fas fa-star"></i>
                    <label> طلبات الصيانه</label>
                </li>
                <li class="head">
                    <i class="fas fa-info-circle" style=""></i>
                    <label>المساعدة</label>
                </li>
                <li class="head">
                    <i class="fas fa-shield-alt"></i>
                    <label>سياسة الخصوصيه</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label> اليمن</label>
                </li>
                <li class="head">
                    <i class="fas fa-language"></i>
                    <label>English</label>
                </li>

            </ul>

        </nav>

        <!-- </div> -->

    </header>
    <!--------------------Starts Search-------------------->

    <div class="serch">
        <div class="container">
            <div class="icon">

                <img src="app/views/image/اogo.PNG">
                <form>
                    <input class="main-input" type="search" placeholder="البحث" rirc>
                    <i class="fas fa-search"></i>
                </form>
                <!-- <i class="fas fa-search"></i> -->
                <div class="app/views/image-trash">
                    <div id="conter">0</div>
                    <a href="checkout.html"><img src="app/views/image/trash.PNG"></a>
                </div>
                <!-- <i class="fas fa-trash " style="background-color: #eeeeee; border-radius: 50%; width: 4%; height: 40px; position: relative;"></i>
                -->
            </div>
        </div>
    </div>
    <!--------------------End Search----------------------------------->



    <!--------------------modelogin-------------Layout-->

    <!--------------------modelogin-------------Layout-->


    <!-----------------------Star modelogin-------------------------->
    <div class="overlay hide"></div>

    <div class="contact hide" id="myForm">

        <div class="container">
            <button class="hide-form">Close</button>
            <form style="width: 100%;" action="#" method="post">
                <h2>تسجيل الدخول</h2>

                <input class="main" type="text" name="name" placeholder="البريد الالكتروني او رقم الجوال">
                <input class="main" type="password" name="name" placeholder="كلمة السر">
                <p>نسيت؟</p>

                <input class="main-sub" type="submit" value="تسجيل الدخول">
            </form>
            <div class="info">
                <button class="btn">ليس لدي حساب</button>
                <button> <a href="sing.html">انشاء حساب جديد</a> </button>

            </div>
        </div>
    </div>
    <!------------------End--modelogin------------------------>
