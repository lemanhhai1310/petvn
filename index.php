<?php $title = 'Trang chủ'; ?>
<?php include 'header.php'; ?>
<div class="uk-container">
    <div class="home_header uk-margin" style="background-color: #F15A24">
        <img src="imgs/home_icon_khoanhkhac.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khoảnh khắc</span>
    </div>
    <div class="uk-margin-large-bottom">

    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
</div>
<div class="uk-section-small home_block1 uk-margin-medium uk-text-center">
    <div class="uk-container uk-container-small">
        <img src="imgs/weather.jpg" alt="">
    </div>
</div>
<div class="uk-container">
    <div class="home_header uk-margin" style="background-color: #FBB03B">
        <img src="imgs/home_icon_nhatky.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">nhật ký</span>
    </div>
    <div class="uk-margin-large-bottom">
        <div class="uk-grid-small uk-grid-divider" uk-grid>
            <div class="uk-width-expand">
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-cover-container">
                            <img src="imgs/nk4.jpg" alt="" uk-cover>
                            <canvas width="456" height="291"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first@m">
                        <h2 class="home_title1"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h2>
                        <p class="home_desc1">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-cover-container">
                    <img src="imgs/nk3.jpg" alt="" uk-cover>
                    <canvas width="211" height="124"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
        </div>
        <hr>
        <div class="uk-grid-divider uk-grid-medium uk-child-width-1-4@m" uk-grid>
            <div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
            <div>
                <div class="uk-cover-container uk-border-circle">
                    <img src="imgs/nk1.jpg" alt="" uk-cover>
                    <canvas width="519" height="519"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small uk-text-center"><a href="#">Chim sợ hãi điều gì</a></h3>
            </div>
            <div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
            <div>
                <div class="uk-cover-container uk-border-circle">
                    <img src="imgs/nk2.jpg" alt="" uk-cover>
                    <canvas width="519" height="519"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small uk-text-center"><a href="#">Chỉ số iq của chó</a></h3>
            </div>
        </div>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="home_header uk-margin" style="background-color: #39B54A">
        <img src="imgs/home_icon_khoedep.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khỏe - đẹp</span>
    </div>
    <div class="uk-child-width-1-4@m uk-grid-medium uk-margin-large-bottom" uk-grid>
        <div class="uk-width-3-4@m">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-cover-container">
                        <img src="imgs/img2.jpg" alt="" uk-cover>
                        <canvas width="519" height="346"></canvas>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex-first@m">
                    <h2 class="home_title1"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h2>
                    <p class="home_desc1">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-cover-container">
                <img src="imgs/kd1.jpg" alt="" uk-cover>
                <canvas width="209" height="143"></canvas>
            </div>
            <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
            <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
        </div>
        <?php
        $cars = array
        (
            'imgs/kd2.jpg',
            'imgs/kd3.jpg',
            'imgs/kd4.jpg',
            'imgs/kd5.jpg',
        );
        foreach ($cars as $key => $value) { ?>
        <div>
            <div class="uk-cover-container">
                <img src="<?= $value; ?>" alt="" uk-cover>
                <canvas width="210" height="161"></canvas>
            </div>
            <h3 class="title_list1 uk-margin-small"><a href="#">Mặc gì cho cún yêu</a></h3>
        </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="banner uk-margin-medium">
        <a href="#"><img src="imgs/banner1.jpg" alt=""></a>
    </div>
    <div class="home_header uk-margin" style="background-color: #0071BC">
        <img src="imgs/home_icon_khampha.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khám phá</span>
    </div>
	<div class="uk-grid-medium uk-child-width-1-2@m uk-margin-large-bottom" uk-grid>
		<div>
			<div class="uk-card home_card1 uk-height-1-1">
				<div class="uk-cover-container">
					<img src="imgs/img1.jpg" alt="" uk-cover>
					<canvas width="459" height="306"></canvas>
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="#" title="">Bí mật từ ánh nhìn của chú cún</a></h3>
					<p>Uce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms. Stewart would have an advisory role and assist with the development and brand positioning of a new line of offerings for humans and animals. He said they hoped to</p>
				</div>
			</div>	
		</div>
		<div>
            <?php
            $cars = array
            (
                'imgs/list1.jpg',
                'imgs/list2.jpg',
                'imgs/list3.jpg',
                'imgs/list4.jpg',
            );
            foreach ($cars as $key => $value) { ?>
            <div class="item_home">
                <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                    <div>
                        <div class="uk-cover-container">
                            <img src="<?= $value; ?>" alt="" uk-cover>
                            <canvas width="223" height="149"></canvas>
                        </div>
                    </div>
                    <div>
                        <h3 class="title_list1"><a href="#">Em ấy thích ngủ vào ban ngày và chỉ chơi</a></h3>
                    </div>
                </div>
            </div>
            <?php } ?>
		</div>
	</div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
</div>		
<?php include 'footer.php'; ?>