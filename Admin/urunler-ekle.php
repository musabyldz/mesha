<?php 
include 'header.php';
require_once 'sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">

            <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Ürünler </h3>  </div> <?php 
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
                  <label>Kategori</label>
                  <select name="urunkategori" class="form-control select2" style="width: 100%;">
                    <?php 

                    $katid=$_GET['katid'];
                      $kategori=$baglanti->prepare("SELECT * FROM kategori order by kategori_id ASC");
                      $kategori->execute();
                      while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { 

                    $kategoriid=$kategoricek['kategori_id'];
                    #veritabanındaki kategori

                      ?>
                    <option <?php if ($katid==$kategoriid) {
                      echo "selected";
                    } ?> value="<?php echo $kategoriid ?>" ><?php echo $kategoricek['kategori_adi']; ?></option>
                  <?php } ?>
                  </select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ürün Resim</label>
                    <input  name="urunlerresim" type="file" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ürün Başlık</label>
                    <input  name="urunlerbasik" type="text" class="form-control" placeholder="Lütfen Ürün Başlık giriniz.">
                  </div>

                  <label>Ürün Açıklama</label>
                  <textarea name="urunleraciklama" class="ckeditor" id="editor1"></textarea>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Sıra</label>
                    <input  name="urunlersira" type="text" class="form-control"  placeholder="Lütfen Ürün Sıra giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Model</label>
                    <input  name="urunlerlink" type="text" class="form-control"  placeholder="Lütfen Ürün Model giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Renk</label>
                    <input  name="urunlerbutton" type="text" class="form-control"  placeholder="Lütfen Ürün Renk giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Adet</label>
                    <input  name="urunlerbutton" type="text" class="form-control"  placeholder="Lütfen Ürün Adet giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Fiyat</label>
                    <input  name="urunlerbutton" type="text" class="form-control"  placeholder="Lütfen Ürün Fiyat giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Anahtar Kelime</label>
                    <input  name="urunlerbutton" type="text" class="form-control"  placeholder="Lütfen Ürün Anahtar Kelime giriniz.">
                  </div>
                  
                <div class="form-group">
                  <label>Ürün Durum</label>
                  <select name="urunlerdurum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0">Pasif</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Öne Çıkar</label>
                  <select name="urunlerbanner" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Öne Çıkar</option>
                    <option value="0">Çıkarma</option>
                  </select>
                </div>

                

                <div class="card-footer">
                  <button name="urunlerkaydet" type="submit" class="btn btn-primary">Gönder</button>
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