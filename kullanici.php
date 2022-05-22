<?php   
require_once 'header.php';


if ($var==0){
    #kullanıcı yoksa

    Header("Location:giris?durum=girisyap");
}













?>

            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="Admin/islem/islem.php" method="POST" >
                                <div class="login-form">
                                    <h4 class="login-title">Kullanıcı Bilgileri 
                                        
                                            <?php if (@$_GET['yuklenme']=="basarisiz") { ?>
                                            <i style="color:red;"> HATA </i>

                                            <?php } elseif(@$_GET['yuklenme']=="basarili") { ?>

                                            <i style="color:green;"> BAŞARILI </i>

                                            <?php } ?>
                                            

                                    <input type="hidden" name="kullaniciid" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                                    </h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı Ad Soyad</label>
                                            <input value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" name="adsoyad" required="" class="mb-0" type="text" placeholder="Kullanıcı Ad Soyad Giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Email</label>
                                            <input value="<?php echo $kullanicicek['kullanici_email'] ?>" name="email" required="" class="mb-0" type="text" placeholder="Email Giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Adres</label>
                                            <input value="<?php echo $kullanicicek['kullanici_adres'] ?>" name="adres" required="" class="mb-0" type="text" placeholder="Adres Giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>İl</label>
                                            <input value="<?php echo $kullanicicek['kullanici_il'] ?>" name="il" required="" class="mb-0" type="text" placeholder="İl Giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>İlçe</label>
                                            <input value="<?php echo $kullanicicek['kullanici_ilce'] ?>" name="ilce" required="" class="mb-0" type="text" placeholder="İlçe Giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Telefon</label>
                                            <input value="<?php echo $kullanicicek['kullanici_tel'] ?>" name="telefon" required="" class="mb-0" type="text" placeholder="Telefon Giriniz">
                                        </div>

                                        
                                        
                                        <div class="col-md-12">
                                            <button name="kullaniciduzenle" class="register-button mt-0">Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="islem.php" method="POST">
                                <div class="login-form">
                                    <h4 class="login-title">Kayıt Ol


                                      
                                     <?php  if (@$_GET['durum']=="kullanicivar") { ?>
                                            <i style="color:red;">Bu Kullanıcı Sistemde Kayıtlı</i>
                                     <?php  } elseif (@$_GET['durum']=="sifrehata")   { ?> 
                                            <i style="color:red;">Şifreniz Uyuşmuyor Lütfen İki Şifreyi de Aynı Giriniz</i>
                                     <?php  }  elseif (@$_GET['durum']=="sifreeksik") { ?>
                                            <i style="color:red;">Lütfen Minimum 8 Karakter Olacak Şekilde Şifre Giriniz</i>
                                     <?php  }  elseif (@$_GET['durum']=="basarisiz") { ?>
                                            <i style="color:red;">İşlem Başarısız</i>
                                     <?php } ?>







                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Kullanıcı Adı</label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı Adı Giriniz">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Ad Soyad</label>
                                            <input name="adsoyad" required="" class="mb-0" type="text" placeholder="Ad Soyad Giriniz">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Adresi</label>
                                            <input name="email" required="" class="mb-0" type="email" placeholder="Email Adresini Giriniz">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi Giriniz">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre Tekrar</label>
                                            <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi Tekrar Giriniz">
                                        </div>
                                        <div class="col-12">
                                            <button name="register" class="register-button mt-0">Kayıt Ol</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                         

                    </div> 
                    <a href="cikis"><button style="float: right;" class="btn btn-info">
                        <i class="fa fa-sign-out"></i>Çıkış Yap</button></a>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <?php require_once 'footer.php'; ?>