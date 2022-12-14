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
<link rel="shortcut icon" href="assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
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
    <h1 style="display:none;">Media Mart</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
        <div class="online_support block">
          <div class="new_title">
            <h2 >H??? tr??? tr???c tuy???n</h2>
          </div>
          <div class="block-content">
            <div class="sp_1">
              <p>T?? v???n b??n h??ng 1</p>
              <p>Mr. user: 0987654321</p>
            </div>
            <div class="sp_mail">
              <p>Email li??n h???</p>
              <p>User@mail.com</p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> T??m theo m???c gi?? </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Gi?? t??? &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">?????n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="T??m m???c gi??" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin t???c</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-sidebar"> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?" title="Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; th??? tri???n khai nh?? v?? kh&iacute; ti&ecirc;u di???t v??? tinh c???a ?????i ph????ng, ho???c th??? v?? kh&iacute; ?????ng n??ng ?????n b???t k??? v??? tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i ?????t.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?" title="Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Mua Macbook v?? Macbook Air Plus ch??nh h??ng ??? ????u?</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; th??? tri???n khai nh?? v?? kh&iacute; ti&ecirc;u di???t v??? tinh c???a ?????i ph????ng, ho???c th??? v?? kh&iacute; ?????ng n??ng ?????n b???t k??? v??? tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i ?????t.</p>
                    </p>
                  </div>
                </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=17" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" title="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=17">Samsung v?? Oppo ti???p t???c th???ng tr??? th??? tr?????ng ?????u n??m 2017 t???i Vi???t Nam</a></h3>
                    <p class="desc">
                    <p>(D&acirc;n tr&iacute;) - H???u h???t c&aacute;c s???n ph???m n???m trong top 10 b&aacute;n ch???y th&aacute;ng 2 v&agrave; n???a ?????u th&aacute;ng 3 n??m 2017 c???a c&aacute;c nh&agrave; b&aacute;n l??? ?????u ?????n t??? Samsung v&agrave; Oppo. C&aacute;c th????ng hi???u l???n kh&aacute;c d???n d???n b??? th???t l&ugrave;i v??? sau...</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=16" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" title="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=16">Nh???ng d???u hi???u cho th???y chi???c t??? l???nh nh?? b???n ??ang g???p v???n ?????</a></h3>
                    <p class="desc">
                    <p>(D&acirc;n tr&iacute;) - M???c d&ugrave; l&agrave; m???t thi???t b??? ??i???n t??? v???i ????? b???n cao, th???m ch&iacute; c&oacute; th??? l&ecirc;n t???i 10-20 n??m, nh??ng ??i???u ??&oacute; kh&ocirc;ng c&oacute; ngh??a l&agrave; t??? l???nh kh&ocirc;ng th??? h???ng h&oacute;c hay g???p s??? c???.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=15" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" title="Mua iPhone 6s v?? iPhone 6s Plus ch??nh h??ng ??? ????u?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=15">Oppo kh???i ch???y ch????ng tr??nh ?????t h??ng tr?????c F3 Plus t???i Vi???t Nam</a></h3>
                    <p class="desc">
                    <p>Sau ng&agrave;y ra m???t ch&iacute;nh th???c v&agrave;o 23/3 t???i, Oppo s??? ti???n h&agrave;nh ch????ng tr&igrave;nh ?????t h&agrave;ng tr?????c F3 Plus t??? ng&agrave;y 24/3 ?????n h???t ng&agrave;y 31/3/2017, kh&aacute;ch h&agrave;ng ?????t mua tr?????c s???n ph???m F3 Plus s??? nh???n ???????c b??? qu&agrave; t???ng d&agrave;nh h???p d???n.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
            </div>
          </div>
        </div>
        <!-- end hot news --> 
        <!-- adv --> 
        
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src="assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
    
  </div>
</div>

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
                <img style="witdh: 45%"  src="assets/frontend/images/ios.png" alt="MediaMart iOS App">
              </a>
              <a href="#" title="MediaMart Android App"> 
              <img style="witdh: 45%" src="assets/frontend/images/chplay.png" alt="MediaMart Android App"> 
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