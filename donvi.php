<?php $data["title"] = "Don vi"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section donvi__section">
    <div class="container">
        <!--home__margin1-->
        <div class="home__margin1">
            <div class="grid home__grid19">
                <div class="width-expand">
                    <div class="home__margin1">
                        <div class="grid home__grid20 grid-match">
                            <div class="width-1-2-m">
                                <div class="position-relative home__box1">
                                    <div class="position-cover home__box1__img" data-src="https://znews-photo.zadn.vn/w960/Uploaded/aobohun/2021_10_22/IMGL9118_.jpg" uk-img></div>
                                    <canvas width="532" height="421"></canvas>
                                    <a href="" class="position-cover"></a>
                                </div>
                            </div>
                            <div class="width-1-2-m">
                                <div class="" style="flex-direction: column;display: flex">
                                    <div class="width-1-1" style="flex: auto">
                                        <h1 class="home__box3__title">Nem, giò, chả Phú Hưng</h1>
                                        <div class="home__box3__img"><img src="images/group-3768.png" alt=""></div>
                                        <div class="home__box3__item">
                                            <h3>Phú Hưng</h3>
                                            <div>Địa chỉ: Số 111C, Phố Tây Ga, Phường Phú Sơn, TP Thanh Hóa</div>
                                        </div>
                                        <div class="home__box3__item">
                                            <h3>Giấy chứng nhận cơ sở đủ điều kiện ATTP</h3>
                                            <div>
                                                Số chứng nhận: 12/2018/KT-037 <br>
                                                Ngày cấp: 22/05/2018 - Hết hạn: 01/01/2022 <br>
                                                Đơn vị cấp: Phòng Kinh tế - Hạ tầng/ Kinh tế
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <article class="home__box3__desc">
                                    <p>Nem được làm bằng thịt lợn nạc lọc kỹ để bỏ gân, giã nhỏ mịn. Bì lợn cạo sạch, luộc chín thái chỉ trộn với thịt nạc xay, nêm muối tinh rang khô, nước mắm ngon, mì chính hạt tiêu và thính. Thính được làm từ gạo rang chín vàng thơm rồi xay thật nhỏ. Cách tra thính nhiều hay ít, sớm hay muộn, cũng là bí quyết riêng của từng nhà nem. Tất cả được ủ một thời gian để lên men.</p>
                                    <p>Nem được làm bằng thịt lợn nạc lọc kỹ để bỏ gân, giã nhỏ mịn. Bì lợn cạo sạch, luộc chín thái chỉ trộn với thịt nạc xay, nêm muối tinh rang khô, nước mắm ngon, mì chính hạt tiêu và thính. Thính được làm từ gạo rang chín vàng thơm rồi xay thật nhỏ. Cách tra thính nhiều hay ít, sớm hay muộn, cũng là bí quyết riêng của từng nhà nem. Tất cả được ủ một thời gian để lên men.</p>
                                    <p>Nem được làm bằng thịt lợn nạc lọc kỹ để bỏ gân, giã nhỏ mịn. Bì lợn cạo sạch, luộc chín thái chỉ trộn với thịt nạc xay, nêm muối tinh rang khô, nước mắm ngon, mì chính hạt tiêu và thính. Thính được làm từ gạo rang chín vàng thơm rồi xay thật nhỏ. Cách tra thính nhiều hay ít, sớm hay muộn, cũng là bí quyết riêng của từng nhà nem. Tất cả được ủ một thời gian để lên men.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="home__margin1">
                        <h3 class="home__boxtinhoatdong__title"><a href="">SẢN PHẨM</a></h3>
                    </div>
                    <div class="home__margin1">
                        <h3 class="home__boxtinhoatdong__title"><a href="">CHUỖI THỰC PHẨM AN TOÀN</a></h3>
                    </div>
                </div>
                <div class="width-1-3-m">
                    <div class="home__boxtinhoatdong" style="display: flex;flex-direction: column">
                        <h3 class="home__boxtinhoatdong__title"><a href="">ĐƠN VỊ KHÁC</a></h3>
                        <div>
                            <?php
                            $img = array(
                                'https://znews-photo.zadn.vn/w960/Uploaded/natmzz/2021_11_07/2021_11_07T142046Z_1887921114_UP1EHB713UK7W_RTRMADP_3_SOCCER_ENGLAND_EVE_TOT_REPORT.JPG',
                                'https://znews-photo.zadn.vn/w480/Uploaded/mdf_reovdl/2021_10_30/1EBF396C_E4CE_4A97_A153_4F31A783451F.jpeg',
                                'https://znews-photo.zadn.vn/w480/Uploaded/lce_qjlcv/2021_11_07/tiem_2.jpg',
                                'https://znews-photo.zadn.vn/w210/Uploaded/ngotgs/2021_11_07/A05zing.jpg',
                                'https://znews-photo.zadn.vn/w210/Uploaded/wpdhnwhnw/2021_11_07/p_1.jpg',
                                'https://znews-photo.zadn.vn/w210/Uploaded/mdf_reovdl/2021_10_28/Ma_lang_1_.jpg',
                            );
                            for ($i=1;$i<=6;$i++): ?>
                            <div class="donvi__item">
                                <div class="grid home__grid20">
                                    <div class="width-1-2">
                                        <div class="donvi__item__boxImg position-relative overflow-hidden">
                                            <div class="position-cover donvi__item__img" data-src="<?= $img[array_rand($img)] ?>" uk-img></div>
                                            <canvas width="440" height="250"></canvas>
                                            <a href="" class="position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="width-1-2">
                                        <h3 class="donvi__item__title"><a href="">Công ty TNHH Sản xuất và thương mại Hiền Nhuân</a></h3>
                                        <div class="donvi__item__desc">Địa chỉ: Số 111C, Phố Tây Ga, Phường Phú Sơn, TP Thanh Hóa</div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/home__margin1-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>