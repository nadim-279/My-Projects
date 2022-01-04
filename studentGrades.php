<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Profile</title>
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


<main>
    <!-- ===================== studentGrades ====================== -->
    <section class="container studentGrades" id="staff">
        <h2 class="section_title">الملف الشخصي</h2>
        <table class="student_info">
            <tr>
                <td>الرقم الامتحاني</td>
                <td id="student_num">20010</td>
            </tr>
            <tr>
                <td>اسم الطالب</td>
                <td>أبو علي</td>
            </tr>
            <tr>
                <td>الاختصاص</td>
                <td>هندسة برمجيات</td>
            </tr>
        </table>
        <details class="det_table">
            <summary class="det_title">السنة الإولى - الفصل الأول</summary>
            <table class="table">
                <tr>
                    <td>المادة</td>
                    <td>درجة الأعمال</td>
                    <td>درجة الامتحان</td>
                    <td>المجموع</td>
                    <td>النتيجة</td>
                </tr>
                <tr>
                    <td>أسس كهربائية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>رياضيات 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>برمجة 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>مدخل إلى الحاسوب</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>نظم التشغيل 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>لغة عربية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>ثقافة قومية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
            </table>      
    
        </details>
        <details class="det_table">
            <summary class="det_title">السنة الإولى - الفصل الثاني</summary>
            <table class="table">
                <tr>
                    <td>المادة</td>
                    <td>درجة الأعمال</td>
                    <td>درجة الامتحان</td>
                    <td>المجموع</td>
                    <td>النتيجة</td>
                </tr>
                <tr>
                    <td>أسس كهربائية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>رياضيات 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>برمجة 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>مدخل إلى الحاسوب</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>نظم التشغيل 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>لغة عربية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>ثقافة قومية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
            </table>      
    
        </details>
        <details class="det_table">
            <summary class="det_title">السنة الثانية - الفصل الأول</summary>
            <table class="table">
                <tr>
                    <td>المادة</td>
                    <td>درجة الأعمال</td>
                    <td>درجة الامتحان</td>
                    <td>المجموع</td>
                    <td>النتيجة</td>
                </tr>
                <tr>
                    <td>أسس كهربائية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>رياضيات 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>برمجة 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>مدخل إلى الحاسوب</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>نظم التشغيل 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>لغة عربية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>ثقافة قومية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
            </table>      
    
        </details>
        <details class="det_table">
            <summary class="det_title">السنة الثانية - الفصل الثاني</summary>
            <table class="table">
                <tr>
                    <td>المادة</td>
                    <td>درجة الأعمال</td>
                    <td>درجة الامتحان</td>
                    <td>المجموع</td>
                    <td>النتيجة</td>
                </tr>
                <tr>
                    <td>أسس كهربائية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>رياضيات 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>برمجة 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>مدخل إلى الحاسوب</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>نظم التشغيل 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>لغة عربية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>ثقافة قومية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
            </table>      
    
        </details>
        <details class="det_table">
            <summary class="det_title">الدورة الصيفية</summary>
            <table class="table">
                <tr>
                    <td>المادة</td>
                    <td>درجة الأعمال</td>
                    <td>درجة الامتحان</td>
                    <td>المجموع</td>
                    <td>النتيجة</td>
                </tr>
                <tr>
                    <td>أسس كهربائية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>رياضيات 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>برمجة 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>مدخل إلى الحاسوب</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>نظم التشغيل 1</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>لغة عربية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
                <tr>
                    <td>ثقافة قومية</td>
                    <td>33</td>
                    <td>40</td>
                    <td>73</td>
                    <td>ناجح</td>
                </tr>
            </table>      
        
        </details>
    </section>
</main>
    

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