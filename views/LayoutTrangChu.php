 <!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>Media Mart</title>
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62caefdf7b967b117998e03d/1g7kbi15k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">User</h1>
    <div class="row">
      <!-- <div class="col-xs-12 col-md-3">
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anhle1.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anhle2.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row">
          <div class="col-md-12"><img src="assets/frontend/images/anhle3.jpg" class="img-thumbnail"></div>
        </div>
      </div> -->
      <!-- class="col-md-9" -->
      <div > 
        <!-- slide -->
        <div class="owl-slider">
        
          <div class="item" > 
            <!-- ============================ -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active"> <img src="assets/frontend/images/anhbia2.jpg" alt="Los Angeles"> </div>
                <div class="item"> <img src="assets/frontend/images/anhbia3.jpg" alt="Los Angeles"> </div>
                <div class="item"> <img src="assets/frontend/images/anhbia.jpg" alt="Chicago"> </div>
                <!-- <div class="item"> <img src="assets/frontend/images/anhbia4.jpg" alt="New York"> </div> -->
              </div>
              
              <!-- Left and right controls --> 
            </div>
            <!-- ============================ --> 
          </div>
        </div>
        <!-- end slide --> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12"> 
        <!-- main -->
        
        <?php echo $this->view; ?> 
        
        <!-- end main --> 
      </div>
    </div>
  </div>
</div>
<!-- <div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao h??ng mi???n ph??" title="Giao h??ng mi???n ph??" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao h??ng mi???n ph??</h3>
          <p>Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuy???n m???i" title="Khuy???n m???i"> </div>
        <div class="info">
          <h3>Khuy???n m???i</h3>
          <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Ho??n tr??? l???i ti???n" title="Ho??n tr??? l???i ti???n"> </div>
        <div class="info">
          <h3>Ho??n tr??? l???i ti???n</h3>
          <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p>
        </div>
      </div>
    </div>
  </div>
</div> -->
<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>TH??NG TIN MEDIAMART</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/he-thong-sieu-thi">H??? th???ng 350 Si??u th??? (8:00-21:30)</a></li>
            <li><a href="https://mediamart.vn/thong-tin-chung/gioi-thieu-cong-ty">Gi???i thi???u c??ng ty</a></li>
            <li><a href="https://mediamart.vn/tuyen-dung">Tuy???n d???ng</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-thanh-toan">Ph????ng th???c thanh to??n</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>H??? tr??? kh??ch h??ng</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/ho-tro-mua-hang/huong-dan-mua-hang-online">H?????ng d???n mua h??ng Online</a></li>
            <li><a href="https://mediamart.vn/uu-dai-tra-gop">Mua h??ng tr??? g??p</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-doi-tra-hang">Ch??nh s??ch b???o h??nh, ?????i tr???</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-giao-nhan">Giao h??ng v?? l???p ?????t</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-bao-mat">Ch??nh s??ch b???o m???t TT c?? nh??n</a></li>
            <li><a href="https://tracuuhoadon.mediamart.com.vn/">In h??a ????n ??i???n t???</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>T???ng ????i g???i h??? tr???</h3>
          <ul class="list-unstyled">
            <li><a href="tel:19006788">B??n h??ng: 1900 6788</a></li>
            <li><a href="tel:19006743">B???o h??nh: 1900 6743</a></li>
            <li><a href="tel:19006741">Khi???u n???i: 1900 6741</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Theo d??i MediaMart tr??n</h3>
          <ul class="list-unstyled">
            <li>
              <a style="margin-left: 10px" href="https://www.facebook.com/DienmayMediaMart" title="MediaMart Facebook Fanpage"> 
                <img src="assets/frontend/images/fb.png" alt="MediaMart Facebook Fanpage">
              </a>
              <a style="margin-left: 10px" href="https://www.youtube.com/c/CongtyMediamart" title="MediaMart Youtube Channel"> 
                <img src="assets/frontend/images/yt.png" alt="MediaMart Youtube Channel"> 
              </a>
              <a style="margin-left: 10px" href="https://www.tiktok.com/@mediamart.official" title="MediaMart Tiktok Channel"> 
                <img src="assets/frontend/images/tt.png" alt="MediaMart Tiktok Channel"> 
              </a>
            </li>
            <h3 style="margin-top: 15px">Theo d??i MediaMart tr??n</h3>
            <li>
              <a href="https://apps.apple.com/vn/app/mediamartvn/id1572630752" title="MediaMart iOS App"> 
                <img style="witdh: 45%"  src="https://cdn.mediamart.vn/images/menu/mediamart-ios-app_4b5435b9.png" alt="MediaMart iOS App">
              </a>
              <a href="#" title="MediaMart Android App"> 
              <img style="witdh: 45%" src="https://cdn.mediamart.vn/images/menu/mediamart-android-app_0f2f434d.png" alt="MediaMart Android App"> 
              </a>
            </li>
          </ul>
          
        </div>
      </div>
      <div class="payments-method"> <img src="assets/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Ph????ng th???c thanh to??n" title="Ph????ng th???c thanh to??n"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> ?? B???n quy???n User</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang ch???</a></li>
            <li><a href="#">Gi???i thi???u</a></li>
            <li><a href="#">Tin t???c</a></li>
            <li><a href="#">Li??n h???</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
</body>
</html>