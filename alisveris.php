<?php require_once 'header.php' ?>

<title>Ürün Sepete Eklendi</title>
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">



                            <?php if (@$_GET['durum']=="eklendi") { ?>
                                    <b style="color: green">Ürün Başarıyla Sepete Eklendi</b>
                            <?php  } ?>    





                            
                            <form action="islem" method="post">
                                <input type="hidden" name="toplamfiyat" value="<?php echo $_GET['toplamfiyat'] ?>">
                                <input type="hidden" name="kadi" value="<?php echo $kullanicicek['kullanici_id'] ?>"> 
                                <span>Toplam Ödenecek Tutar: <?php echo $_GET['toplamfiyat'] ?>₺</span>
                                
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <select name="odeme">

                                                 <option value="1">Kapıda Ödeme</option>   
                                                 <option value="0">Kart İle Ödeme</option>   

                                            </select>
                                            <br><br>
                                            <button style="background-color:grey;" name="alisverisbitir" type="submit" class="btn btn-info">Alışveriş Tamamla</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php  require_once'footer.php' ?>