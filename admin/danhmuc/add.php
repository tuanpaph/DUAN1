<div class="row">
            <div class="row header">
                <h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled placeholder="auto number">
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>