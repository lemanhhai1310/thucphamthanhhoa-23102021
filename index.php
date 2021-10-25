<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section">
    <div class="container">
        <!--home__margin1-->
        <div class="home__margin1">
            <div class="grid home__grid19 grid-match">
                <div class="width-expand">
                    <div class="grid home__grid20">
                        <div class="width-1-2-m">
                            <div class="position-relative home__box1">
                                <div class="position-cover home__box1__img" data-src="https://znews-photo.zadn.vn/w960/Uploaded/aobohun/2021_10_22/IMGL9118_.jpg" uk-img></div>
                                <canvas width="532" height="421"></canvas>
                                <a href="" class="position-cover"></a>
                            </div>
                        </div>
                        <div class="width-1-2-m">
                            <h1 class="home__box3__title">Nem, giò, chả Phú Hưng</h1>
                            <div class="home__box3__img"><img src="images/group-3768.png" alt=""></div>
                            <p class="home__box3__desc">Nem được làm bằng thịt lợn nạc lọc kỹ để bỏ gân, giã nhỏ mịn. Bì lợn cạo sạch, luộc chín thái chỉ trộn với thịt nạc xay, nêm muối tinh rang khô, nước mắm ngon, mì chính hạt tiêu và thính. Thính được làm từ gạo rang chín vàng thơm rồi xay thật nhỏ. Cách tra thính nhiều hay ít, sớm hay muộn, cũng là bí quyết riêng của từng nhà nem. Tất cả được ủ một thời gian để lên men.</p>
                            <div>
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
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/aobohun/2021_10_25/IMG_0286zing.jpg',
                                'txt' => '',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/yfsgs/2021_10_25/bay_zin2_1_.jpg',
                                'txt' => '',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/zugttw/2021_10_22/ducanh.jpg',
                                'txt' => '',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/dqvpxpck/2021_10_24/XADV_vietnam.jpg',
                                'txt' => '',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                            <div class="width-1-2 width-1-4-m">
                                <div class="position-relative overflow-hidden home__box2">
                                    <div class="position-cover home__box2__img" data-src="<?= $v['src'] ?>" uk-img></div>
                                    <canvas width="254" height="192"></canvas>
                                    <div class="position-bottom home__box2__txt">Nem, giò, chả Phúc Hưng</div>
                                    <a href="" class="position-cover"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="width-1-3-m">
                    <div class="home__boxtinhoatdong">
                        <h3 class="home__boxtinhoatdong__title">TIN HOẠT ĐỘNG</h3>
                        <ul class="grid home__boxtinhoatdong__list">
                            <?php
                            $data = array(
                                'Nỗ lực sao chép vaccine Moderna',
                                'TP Thủ Đức và quận, huyện chờ TP.HCM hướng dẫn để mở thêm hoạt động',
                                'Giá xăng tiếp tục tăng mạnh vào ngày mai?',
                                'Lời khai nghi phạm thảm sát 3 người ở Bắc Giang',
                                "'Coin chó' lập kỷ lục giá",
                            );
                            foreach ($data as $k=>$v): ?>
                                <li><a href=""><?= $v ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/home__margin1-->

        <!--home__margin1-->
        <div class="home__margin1">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs home__tab" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ĐƠN VỊ ĐƯỢC CẤP CHỨNG NHẬN</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">SẢN PHẨM ĐƯỢC CẤP CHỨNG NHẬN</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="grid home__grid21">
                        <?php for ($i=1;$i<=18;$i++): ?>
                        <div class="width-1-2 width-1-6-m">
                            <div class="position-relative overflow-hidden home__box4__container">
                                <div class="position-cover home__box4__img" data-src="https://znews-photo.zadn.vn/w660/Uploaded/natmzz/2021_10_25/2021_10_24T192031Z_454260450_UP1EHAO1HQ43V_RTRMADP_3_SOCCER_FRANCE_OLM_PSG_REPORT.JPG" uk-img></div>
                                <canvas width="224" height="125"></canvas>
                            </div>
                            <h3 class="home__box4__title"><a href="">Công ty TNHH Sản xuất và thương mại Hiền Nhuân</a></h3>
                            <div class="home__box4__desc">Địa chỉ: Số 111C, Phố Tây Ga, Phường Phú Sơn, TP Thanh Hóa</div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">...</div>
            </div>
        </div>
        <!--/home__margin1-->

        <!--home__margin1-->
        <div class="home__margin1">
            <div class="grid">
                <?php for ($i=0;$i<=3;$i++): ?>
                <div class="width-1-2 width-1-4-m">
                    <div class="position-relative overflow-hidden">
                        <div class="position-cover" data-src="https://znews-photo.zadn.vn/w660/Uploaded/dqvpxpck/2021_10_24/XADV_vietnam.jpg" uk-img></div>
                        <canvas width="398" height="270"></canvas>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <!--/home__margin1-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>