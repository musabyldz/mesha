<?php 
include 'header.php';
require_once 'sidebar.php';

$slider=$baglanti->prepare("SELECT * FROM slider where slider_id=:slider_id");
$slider->execute(array(

'slider_id'=>$_GET['id']

));
$slidercek=$slider->fetch(PDO::FETCH_ASSOC);



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">

            <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Sliderler </h3>  </div> <?php 
                if (@$_GET['yuklenme']=="basarili") { ?>
                  <h6 style="color:green">(Yükleme İşlemi Başarılı)</h6>  
                <?php }
                elseif (@$_GET['yuklenme']=="basarisiz"){ ?>
                  <h6 style="color:red">(Yükleme İşlemi Başarısız)</h6><?php }
                elseif (@$_GET['yuklenme']=="kullanicivar"){ ?>
                  <h6 style="color:red">(Bu Kullanıcı Kayıtlı)</h6>

              <?php } ?>  

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <input  name="sliderresim" type="file" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input  value="<?php echo $slidercek['slider_baslik'] ?>" name="sliderbasik" type="text" class="form-control" placeholder="Lütfen Slider Başlık giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Açıklama</label>
                    <input value="<?php echo $slidercek['slider_aciklama'] ?>" name="slideraciklama" type="text" class="form-control"  placeholder="Lütfen Slider Açıklama giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Sıra</label>
                    <input value="<?php echo $slidercek['slider_sira'] ?>" name="slidersira" type="text" class="form-control"  placeholder="Lütfen Slider Sıra giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Link</label>
                    <input value="<?php echo $slidercek['slider_link'] ?>" name="sliderlink" type="text" class="form-control"  placeholder="Lütfen Slider Link giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider Buton Adı</label>
                    <input value="<?php echo $slidercek['slider_button'] ?>" name="sliderbutton" type="text" class="form-control"  placeholder="Lütfen Slider Buton Adı giriniz.">
                  </div>
                  
                <div class="form-group">
                  <label>Slider Durum</label>
                  <select name="sliderdurum" class="form-control select2" style="width: 100%;">
                    <option <?php if ($slidercek['slider_durum']=="1") {
                      echo "selected";
                    } ?> value="1" selected="selected">Aktif</option>
                    <option <?php if ($slidercek['slider_durum']=="0") {
                      echo "selected";
                    } ?> value="0">Pasif</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Slider Banner</label>
                  <select name="sliderbanner" class="form-control select2" style="width: 100%;">
                    <option <?php if ($slidercek['slider_banner']=="1") {
                      echo "selected";
                    } ?> value="1" selected="selected">Slider Yap</option>
                    <option <?php if ($slidercek['slider_banner']=="0") {
                      echo "selected";
                    } ?> value="0">Banner Yap</option>
                  </select>
                </div>

                

                <div class="card-footer">
                  <button name="sliderkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php require_once 'footer.php'; ?>