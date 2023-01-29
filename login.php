
 
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    
    <title>login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
  
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-image u-section-1" id="sec-b65d" data-image-width="1440" data-image-height="1031">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-2 u-radius-28 u-shape u-shape-round u-shape-1"></div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-22 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="images/bgadjid.png" alt="" data-image-width="331" data-image-height="391">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-38 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-text u-text-1">Login Pengguna </p>
                  <div class="u-form u-form-1">
                    
                    <form method="post" action="">
                    <div class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                      <div class="u-form-group u-form-name u-label-none">
                        <input type="text" placeholder="Enter your Email" id="name-87c6" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-pass u-form-group u-label-none">
                        <input type="password" placeholder="Enter Your Password" id="pass-87c6" name="pass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-align-right u-form-group u-form-submit u-label-none">
                     
                      <input type="submit" name="submit" value="Login" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-3 u-btn-1"> 
                      </div>
                      </div>
                    </form>
                    <?php
include 'koneksi.php';
if(isset($_POST['email']) and $_POST['pass']){
$username = $_POST['email'];
$pass = $_POST['pass'];
}
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM tb_register where email='$username' and password='$pass'");

$cek = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
if($cek > 0) {

	//menyimpan session user, nama, status dan id login
	$_SESSION['id_login'] = $data['id'];
	header("location:menu.php&id<?= $data[id] ?>");
} else {
  echo "password salah";
	header("location:index.html");
}

?>
                  </div>
                  <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-align-center u-text u-text-2">Belum Punya Akun?<span class="u-text-palette-1-base" style="font-weight: 700;"><a href="regrist.php">Regritasi Sekarang&nbsp;</a> </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Best Free Website Builder</span>
      </a>. 
    </section>
  
</body></html>