<?php
            foreach ($listDayGhe as $dayGhe) {
            ?>
                <div class="row" style="margin: 30px 0;">

                    <?php
                    $listGhe =  SelectGheByDayGhe($dayGhe['id_dayghe']);
                    foreach ($listGhe as $ghe) {
                    ?>
                        <?php
                        if ($ghe['trangthaighe'] == 1) {
                        ?>

                            <div class="col-sm-2" style="text-align: center ;height:30px; ">
                                <p style="background-color: #ccc; padding: 10px;  border-radius: 50px;"><?php echo $ghe['maghe'] ?></p>
                            </div>
                        <?php
                        } else if ($ghe['trangthaighe'] == 2) {

                        ?>
                            <div class="col-sm-2" style="text-align: center ;height:30px; ">
                                <p style="background-color: red; padding: 10px;  border-radius: 50px; color: white;"><?php echo $ghe['maghe'] ?></p>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-sm-2" style="text-align: center ;height:30px; ">
                                <p style="background-color: blue; padding: 10px;  border-radius: 50px; color: white;"><?php echo $ghe['maghe'] ?></p>
                            </div>

                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>