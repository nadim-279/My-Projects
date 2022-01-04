<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC-profile</title>
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


<!-- بروفايل -->
<form action="studentGrades.php" id="form">
    <div class="profileContainer">
        <div class="pages">  
          <div class="page">
            <img class="brand-logo" src="img/ggg.png" alt="">
            <h2>الملف الشخصي</h2>
            <div class="input">
              <div class="title">الرقم الامتحاني:</div>
              <input class="text" type="number" placeholder="" id="in1"/>
            </div>
            <div class="input" id="sub">
              <input type="submit" value="دخول"/>
            </div>
          </div>
        </div>
    </div>
</form>




    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li3 = document.getElementById("li3"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li3.classList.add('activated');
        }


    </script>

</body>
</html>