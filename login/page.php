 <!DOCTYPE html>

 <html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

     <title>เข้าสู่ระบบ | CPW swimming test record</title>

     <meta name="description" content="" />

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

     <!-- Fonts -->
     <?php
        echo '<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />';
        echo ' <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />';
        echo '<link rel="stylesheet" href="../dist/style/font.css" />';
        echo '<link rel="stylesheet" href="../dist/css/core.css" class="template-customizer-core-css" />';
        echo '<link rel="stylesheet" href="../dist/css/theme-default.css" class="template-customizer-theme-css" />';
        echo ' <link rel="stylesheet" href="../assets/css/main.css" />';
        echo ' <script src="../assets/vendor/js/helpers.js"></script>';
        echo ' <link rel="stylesheet" href="../dist/style/mainStyle.css' . $datavertion . '" />';
        echo ' <link rel="stylesheet" href="../dist/menu/menu.css' . $datavertion . '" />';
        echo ' <link rel="stylesheet" href="../dist/plugin/popupCheckBook/pcb.css' . $datavertion . '" />';
        echo ' <link rel="stylesheet" href="style.css' . $datavertion . '" />';
        echo $distcss;
        ?>
     <!-- Page -->
     <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
     <!-- Helpers -->
     <script src="../assets/vendor/js/helpers.js"></script>
     


 </head>

 <body>
     <!-- Content -->

     <div class="container-xxl">
         <div class="authentication-wrapper authentication-basic container-p-y">
             <div class="authentication-inner">
                
                 <!-- Register -->
                 <div class="card">
                     <div class="card-body">

                         <!-- /Logo -->
                         <h4 class="mb-2">Welcome swimming test record</h4>
                         <p class="mb-4">กรุณาเข้าสู่ระบบ</p>

                         <form id="formAuthentication" class="mb-3" action="javascript:void(0)">
                             <div class="mb-3">
                                 <label for="username" class="form-label">เลขประจำตัว</label>
                                 <input type="text" class="form-control" id="username" name="username" placeholder=" เลขประจำตัว" autofocus />
                             </div>
                             <div class="mb-3 form-password-toggle">
                                 <div class="d-flex justify-content-between">
                                     <label class="form-label" for="password">รหัสผ่าน</label>

                                 </div>
                                 <div class="input-group input-group-merge">
                                     <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                             </div>
                             <div class="mb-3 noti"></div>

                             <div class="mb-3">
                                 <button class="btn btn-primary d-grid w-100" type="submit">เข้าสู่ระบบ</button>
                             </div>
                             
                         </form>
                        </div>    

                     </div>
                 </div>
                 <!-- /Register -->
             </div>
         </div>
         
     </div>
     <?php
        echo '<script src="../assets/vendor/libs/jquery/jquery.js"></script>';
        echo '<script src="../assets/vendor/libs/popper/popper.js"></script>';
        echo '<script src="../assets/vendor/js/bootstrap.js"></script>';
        echo '<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>';
        echo '<script src="../assets/vendor/js/menu.js"></script>';
        echo ' <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>';
        echo ' <script src="../assets/js/main.js"></script>';
        echo ' <script src="../dist/plugin/mavin/marvinj-0.8.js"></script>';
        echo ' <script src="../dist/menu/menu.js' . $datavertion . '"></script>';
        echo ' <script src="../dist/plugin/popupCheckBook/pcb.js' . $datavertion . '"></script>';
        echo ' <script src="../dist/plugin/Inputmask/dist/jquery.inputmask.js"></script>';
        echo ' <script src="../dist/script/mainScript.js' . $datavertion . '"></script>';
        echo ' <script src="script.js' . $datavertion . '"></script>';
        ?>
        

 </body>


 
 </html>