<?php 
use minapp\siteModel;

$home = new siteModel('homedata');
$dataHome = $home->getAll();
$dataHome = json_decode($dataHome);
$dataHome = $dataHome->data[0];
// var_dump($dataHome);

$homeBanner = new siteModel('banner');
$dataBanner = $homeBanner->getAll();
$dataBanner = json_decode($dataBanner);
$dataBanner = $dataBanner->data;
$total = count((array)$dataBanner);

$homeTeach = new siteModel('teach');
$dataTeach = $homeTeach->getAll();
$dataTeach = json_decode($dataTeach);
$dataTeach = $dataTeach->data;
$total2 = count((array)$dataTeach);
 ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
<?php require_once(__DIR__.'/element/head.php'); ?>

    <body>
        <!--   id="barba-wrapper"  -->

        <?php require_once(__DIR__.'/element/navbar_mobile.php'); ?>

            <div class="shadow-mobile"></div>
            <div id="row-0 home">

                <div class="banner-slider-index">

                    <?php require_once(__DIR__.'/element/slide.php'); ?>

                        <!-- end SLIDER -->
                        <?php require_once(__DIR__.'/element/header.php'); ?>

                </div>

                <div id="main">
                    <div class="container">

                        <style type="text/css">
                            .dmca {
                                margin-top: 20px;
                            }
                        </style>
                        <div class="content-project-detail">
                            <h1 style="text-align: center;">ĐĂNG KÝ TÌM GIA SƯ TẠI HÀ NỘI - <?php echo mb_strtoupper($dataHome->name,"UTF-8"); ?></h1>

                            <p style="margin-left: 40px;"><strong>✔ Quý Phụ huynh hãy gọi Hotline: <u><em><span style="color:#000000;"><?php echo $dataHome->phone; ?> </span></em></u>(8h - 22h) để được tư vấn <em><a href="http://giasuducminh.com/tim-gia-su-gioi-o-dau-nd25702.html"><span style="color:#ff0000;">tìm gia sư giỏi</span></a></em> nhanh nhất.</strong></p>

                            <p style="margin-left: 40px;"><strong>✔ Miễn phí đổi gia sư bất kì lúc nào nếu Phụ huynh cảm thấy không phù hợp.</strong></p>

                            <p style="margin-left: 40px;"><strong>✔ Giáo viên/sinh viên của <?php echo $dataHome->name; ?> đều qua khâu sàng lọc, phỏng vấn và có sơ yếu lý lịch rõ ràng.</strong></p>

                            <p style="margin-left: 40px;"><span style="color:#0000ff;"><strong>Phụ huynh gửi yêu cầu tìm gia sư theo mẫu dưới:</strong></span></p>

                            <p style="margin-left: 40px;">1. Mong quý Phụ huynh cung cấp thông tin chính xác nhất để chúng tôi có thể giúp quý Phụ huynh <em><strong><a href="http://giasuducminh.com/tim-giasu.html"><span style="color:#ff0000;">tìm gia sư</span></a></strong></em> phù hợp nhất.</p>

                            <p style="margin-left: 40px;">2. Chúng tôi sẽ liên lạc với quý Phụ huynh trong vòng 24h để xác nhận và sắp xếp Gia sư theo đúng yêu cầu.</p>

                            <p style="margin-left: 40px;">3. Cảm ơn quý Phụ huynh đã tin tưởng và lựa chọn <strong><em><a href="http://giasuducminh.com/trung-tam-gia-su-nd24650.html"><span style="color:#ff0000;"></span></a></em><span style="color:#0000ff;"> <?php echo $dataHome->name; ?></span></strong>.</p>
                        </div>
                        <h3 id="result" style="text-align: center;"></h3>

                        <form enctype="multipart/form-data" class="form-horizontal w3f-form" id="w3n-submit-form">
                            <h3 class="cf-heading">Thông tin cá nhân (bắt buộc nhập)</h3>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Họ tên
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="fullname" id="W3NF_10062_c22" />
                                    <div class="errorMessage" id="AutoForm_c22_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Địa chỉ nhà riêng
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="address" id="W3NF_10063_c53" />
                                    <div class="errorMessage" id="AutoForm_c53_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Điện thoại
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="phone" id="W3NF_10064_c84" />
                                    <div class="errorMessage" id="AutoForm_c84_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Email
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="email" id="W3NF_10065_c115" />
                                    <div class="errorMessage" id="AutoForm_c115_em_" style="display:none"></div>
                                </div>
                            </div>
                            <h3 class="cf-heading">Thông tin học sinh</h3>
                            <div class="form-group w3-form-group">

                                <label class="col-sm-4 control-label w3-form-label">
                                    Lớp </label>
                                <div class="col-sm-8 w3-form-field">
                                    <select name="Stclass" id="classStd" class="form-control" placeholder="Lớp">
                                        <option value="">&nbsp;</option>
                                        <option value="">
                                            Mẫu giáo </option>
                                        <option value="1">
                                            Lớp 1 </option>
                                        <option value="2">
                                            Lớp 2 </option>
                                        <option value="3">
                                            Lớp 3 </option>
                                        <option value="4">
                                            Lớp 4 </option>
                                        <option value="5">
                                            Lớp 5 </option>
                                        <option value="6">
                                            Lớp 6 </option>
                                        <option value="7">
                                            Lớp 7 </option>
                                        <option value="8">
                                            Lớp 8 </option>
                                        <option value="9">
                                            Lớp 9 </option>
                                        <option value="10">
                                            Lớp 10 </option>
                                        <option value="11">
                                            Lớp 11 </option>
                                        <option value="12">
                                            Lớp 12 </option>
                                        <option value="hoc-vien">
                                            Học viên </option>
                                        <option value="can-bo">
                                            Cán bộ viên chức </option>
                                        <option value="khac">
                                            Trình độ khác </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Trường
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="school" id="W3NF_10069_c287" />
                                    <div class="errorMessage" id="AutoForm_c287_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">

                                <label class="col-sm-4 control-label w3-form-label required">
                                    Giới tính </label>
                                <div class="col-sm-8 w3-form-field">
                                    <select name="sex" id="sex" class="form-control" placeholder="Giới tính">
                                        <option value="nam">
                                            Nam </option>
                                        <option value="nu">
                                            Nữ </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">

                                <label class="col-sm-4 control-label w3-form-label required">
                                    Học lực hiện tại </label>
                                <div class="col-sm-8 w3-form-field">
                                    <select name="learning" id="learning" class="form-control" placeholder="Học lực hiện tại">
                                        <option value="kha">
                                            Khá </option>
                                        <option value="trung-binh">
                                            Trung bình </option>
                                        <option value="yeu">
                                            Yếu </option>
                                        <option value="gioi">
                                            Giỏi </option>
                                        <option value="xuat-sac">
                                            Xuất sắc </option>
                                        <option value="">
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <h3 class="cf-heading">Thông tin yêu cầu</h3>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Môn dạy <span class="required">*</span>
                                </label>
                                <div class="col-sm-8  w3-form-field abdw">
                                    <div class="ck-box">
                                        <input value="tieu-hoc" class="checkinput" type="checkbox" name="tieuhoc" id="tieuhoc" />
                                        <label>Tiểu học</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="toan" class="checkinput" type="checkbox" name="toan" id="toan" />
                                        <label>Toán</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="tieng-viet" class="checkinput" type="checkbox" name="tiengviet" id="tiengviet" />
                                        <label>Tiếng Việt</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="thi-toeic" class="checkinput" type="checkbox" name="toeic" id="toeic" />
                                        <label>Luyện Thi Toeic</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="vat-ly" class="checkinput" type="checkbox" name="vatly" id="vatly" />
                                        <label>Vật Lý</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="tieng-anh" class="checkinput" type="checkbox" name="tienganh" id="tienganh" />
                                        <label>Tiếng Anh</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="lap-trinh" class="checkinput" type="checkbox" name="laptrinh" id="laptrinh" />
                                        <label>Lập trình</label>
                                    </div>
                                    <div class="ck-box">
                                        <input value="mon-hoc-khac" class="checkinput" type="checkbox" name="monkhac" id="monkhac" />
                                        <label>Môn học khác</label>
                                    </div>

                                    </div>
                                </div>
                                <div class="errorMessage" id="AutoForm_c3811_em_" style="display:none"></div>
                            

                            <style>
                                .abdw {
                                    column-width: 214px;
                                    -moz-column-width: 214px;
                                    -webkit-column-width: 214px;
                                    column-gap: 10px;
                                    -moz-column-gap: 10px;
                                    -webkit-column-gap: 10px;
                                }
                            </style>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Số người học
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <input class="form-control w3-form-input input-text" type="text" value="" name="count" id="W3NF_10076_c4112" />
                                    <div class="errorMessage" id="AutoForm_c4112_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">

                                <label class="col-sm-4 control-label w3-form-label required">
                                    Mục đích học </label>
                                <div class="col-sm-8 w3-form-field">
                                    <select name="purpose" id="purpose" class="form-control" placeholder="Mục đích học">
                                        <option value="lay-lai-kien-thuc">
                                            Lấy lại kiến thức gốc </option>
                                        <option value="boi-duong-va-nang-cao">
                                            Bồi dưỡng và nâng cao </option>
                                        <option value="thi-chung-chi">
                                            Thi chứng chỉ </option>
                                        <option value="di-du-hoc">
                                            Đi du học </option>
                                        <option value="khac">
                                            Mục đích khác </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group w3-form-group">
                                <label class="col-sm-4 control-label w3-form-label required">
                                    Yêu cầu khác
                                    <span class="required">*</span>

                                </label>
                                <div class="col-sm-8 w3-form-field">
                                    <textarea class="form-control w3-form-input input-textarea" name="ask" id="W3NF_10078_c4714"></textarea>
                                    <div class="errorMessage" id="AutoForm_c4714_em_" style="display:none"></div>
                                </div>
                            </div>
                            <div class="send-yc" align="center">
                                <input class="btn btn-primary w3-btn btn-submit" id="submiter" type="submit"  value="Gửi" />
                            </div>
                        </form>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=468235073548095&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <script src="https://apis.google.com/js/platform.js" async defer></script>
                        <div class="fb_comment">
                            <div class="fb-comments" data-href="https://giasuducminh.com/tim-gia-su-pde6977.html" order_by="reverse_time" data-numposts="5" data-colorscheme="light" width="100%"></div>
                        </div>

                        <img src="/thong-ke.jpg" width="0" height="0" style="width: 0; height: 0; display: none;" rel="nofollow" alt="Thong ke" />
                    </div>
                    <?php require_once(__DIR__.'/element/teach.php'); ?>
                    <?php require_once(__DIR__.'/element/partner.php'); ?>
                </div>

            </div>
            <?php require_once(__DIR__.'/element/footer.php'); ?>                 
                <?php require_once(__DIR__.'/element/js.php'); ?>
                            <script>
                $(document).ready(function(){
                    $('#submiter').on('click',function(){
                        if($('#W3NF_10062_c22').val() == '' || $('#W3NF_10063_c53').val() == '' || $('#W3NF_10064_c84').val() == '' || $('#W3NF_10065_c115').val() == ''){
                            $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "Vui lòng nhập đầy đủ thông tin"

                                  },{
                                type: 'danger',
                                timer: 4000
                            });
                        }else{
                         $.ajax({
                            url : <?php PostRoute(); ?>,
                            type : 'POST',
                            headers: {
                                "accept": "application/json",
                                "Access-Control-Allow-Origin":"*"
                            },
                            data : {
                                fullname : $('#W3NF_10062_c22').val(),
                                address : $('#W3NF_10063_c53').val(),
                                phone : $('#W3NF_10064_c84').val(),
                                email : $('#W3NF_10065_c115').val(),
                                Stclass : $('#classStd').val(),
                                school : $('#W3NF_10069_c287').val(),
                                sex : $('#sex').val(),
                                learning : $('#learning').val(),
                                tieuhoc : $('#tieuhoc').val(),
                                toan : $('#toan').val(),
                                tiengviet : $('#tiengviet').val(),
                                toeic : $('#toeic').val(),
                                vatly : $('#vatly').val(),
                                tienganh : $('#tienganh').val(),
                                laptrinh : $('#laptrinh').val(),
                                monkhac : $('#monkhac').val(),
                                sl : $('#W3NF_10076_c4112').val(),
                                purpose : $('#purpose').val(),
                                ask : $('#W3NF_10078_c4714').val(),
                                status:0,
                                key : 'submit-timgiasu'

                            },      
                        success : function (result){
                            console.log(result);
                            if(result == 1){
                                $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "Yêu cầu của bạn đang được gửi đi"

                                  },{
                                type: 'success',
                                timer: 4000
                            });
                                $('#w3n-submit-form').hide();
                                $('#result').html('Yêu cầu của bạn đang được gửi đi và đang xử lí')
                            }else{
                                $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "Lỗi không xác định"

                                  },{
                                type: 'danger',
                                timer: 4000
                            });
                            }
                            
                        }
                        });
                     }

                    });
                   
                });
            </script>  
    </body>

</html>