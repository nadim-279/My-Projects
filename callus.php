<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC-Daraa-CallUs</title>
    <link rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

            <img class="nav_img" src="img/p2.jpg" alt="">

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item" id="li1">
                        <a href="index.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="nav_name">الرئيسية</span>
                        
                        </a>
                    </li>
                    <li class="nav_item" id="li2">
                        <a href="library.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="library-outline"></ion-icon></span>
                            <span class="nav_name">المكتبة</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li3">
                        <a href="profile.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="nav_name">الملف الشخصي</span>                          
                        </a>
                    </li>
                    <li class="nav_item" id="li4">
                        <a href="staff.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="nav_name">كادر المعهد</span>
                        </a>
                    </li>
                    <!-- <li class="nav_item" id="li5">
                        <a href="#" class="nav_link">
                            <span class="nav_icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="nav_name">الخريجين</span>                                                
                        </a>
                    </li> -->
                    <li class="nav_item" id="li6">
                        <a href="callus.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="call-outline"></ion-icon></span>
                            <span class="nav_name">اتصل بنا</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li7">
                        <a href="TCC-login.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span class="nav_name">إدارة المعهد</span> 
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="nav_logo">TCC-Daraa</a>
        </nav>
    </header>
    <!-- ===================== call us ====================== -->
                <!-- call us -->
                <div class="call-us-main">
                    <div class="contain-call">
                        <div class="message">
                            <div id="d1">
                                <p>تواصل معنا للاقتراحات والشكاوي</p>
                                <div class="name">
                                    <input type="text" placeholder="الأسم">
                                </div>
                                <div class="name">
                                    <input type="number" placeholder="الرقم الامتحاني">
                                </div>
                                <div class="name">
                                    <input type="email" placeholder="البريد الإلكتروني">
                                </div>
                    
                                <div class="name">
                                    <textarea placeholder="اكتب رسالتك هنا"></textarea>
                                </div>
                                <div class="btn">
                                    <button>إرسال</button>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div id="d2">
                                <p>معلومات الاتصال</p>
                                <div class="info1">
                                    <ion-icon name="location-outline"></ion-icon>
                                    <span>درعا - حي السبيل بجانب ثانوية الشهيد منصور</span>
                                </div>
                                <div class="info1">
                                    <ion-icon name="call-outline"></ion-icon>
                                    <span><bdi>+963 937 454 211</bdi></span>
                                </div>
                                <div class="info1">
                                    <ion-icon name="paper-plane-outline"></ion-icon>
                                    <span>TCC-Daraa@gmail.com</span>
                                </div>
                                <div class="info1">
                                    <ion-icon name="globe-outline"></ion-icon>
                                    <span>www.TCC-Daraa.edu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li6 = document.getElementById("li6"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li6.classList.add('activated');
        }
    </script>

   
</body>
</html>