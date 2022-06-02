<?php require_once 'header.php' ?>

<title>Siparişler</title>
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">



                            <?php if (@$_GET['durum']=="eklendi") { ?>
                                    <b style="color: green">Ürün Başarıyla Sepete Eklendi</b>
                            <?php  } ?>    





                            
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sipariş Numarası</th>
                                                <th class="li-product-thumbnail">Resim</th>
                                                <th class="cart-product-name">Başlık</th>
                                                <th class="li-product-price">Fiyat</th>
                                                <th class="li-product-quantity">Adet</th>
                                                <th class="li-product-quantity">Özellik</th>
                                                <th class="li-product-quantity">Zaman</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                            <?php 


                            $kid=$kullanicicek['kullanici_id'];
    
                            $siparis=$baglanti->prepare("SELECT * FROM  siparisler where kullanici_id=:kullanici_id");
                            $siparis->execute(array(
                                'kullanici_id'=>$kid

                            ));
                           while ( $sipariscek=$siparis->fetch(PDO::FETCH_ASSOC)) {
                            $alinanid=$sipariscek['urun_id'];




                            $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id");
                                $urunler->execute(array(
                                    'urun_id'=>$alinanid

                                ));

                                $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
                             


                            ?>








                                            <tr>
                                                
                                                <td><?php echo $sipariscek['siparis_id'] ?></td>

                                                <td class="li-product-thumbnail"><a href="#"><img style="width:200px"; src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image"></a></td>


                                                <td class="li-product-name"><a href="#"><?php echo $urunlercek['urun_baslik'] ?></a></td>


                                                <td class="li-product-price"><span class="amount"><?php echo $sipariscek['urun_fiyat'] ?></span>₺</td>


                                                <td class="quantity">
                                                    <label>Adet</label>
                                                    <div class="cart-plus-minus">
                                                        <input value="<?php echo $sipariscek['urun_adet'] ?>" class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>

                                                <td class="li-product-name"><a href="#"><?php echo $sipariscek['urun_ozellik'] ?></a></td>


                                                <td class="li-product-price"><span class="amount"><?php echo $sipariscek['siparis_zaman'] ?></span></td>
                                                <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Siparişi Güncelle
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Siparişinizi güncellemek mi istiyorsunuz?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Eğer siparişi vermenizin üzerinden 24 saat geçmedi ise siparişinizi güncelleyebilirsiniz.<br>
        24 saat sonra kargoya çıkacağı için siparişinizi güncelleyemezsiniz.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        <a href="siparisguncelle"><button type="button" class="btn btn-primary">Siparişi Güncelle</button></a>
      </div>
    </div>
  </div>
</div></td>


                                                
                                            </tr>
                                            
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php  require_once'footer.php' ?>