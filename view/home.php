<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row">
            <?php
            $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else{
                        $mr="mr";
                    }
                    echo '<div class="boxsp '.$mr.'">
                            <div class="row img">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                            <p class="price">'.$price.'</p>
                        </div>';
                    $i+=1;
                }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>