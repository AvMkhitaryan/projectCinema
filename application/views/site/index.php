<?php
//
//
//
//if (!empty($data)){
//
//    echo "<pre>";
//    var_dump($data["cinemas"]);
//    echo "</pre>";
//} ?>

<div style="margin-top: 55px;" class="container">
    <div class="row">
        <div class="col-3">
            <div class="list-group" style="margin-top: 25px;">
                <?php foreach ($data["cinemas"] as $value) {
                    echo ' <a href="/cinema/' . $value["id"] . '" style="margin-top:5px;" class="btn btn-outline-secondary">' . $value["name"] . '</a>';
                } ?>

            </div>
        </div>
        <div class="col-9" style="margin-top: 27px;">
            <div class="row">
                <?php foreach ($data["cinemas"] as $value) { ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100" style="background-color: #dddddd; margin-top: 2px;margin-bottom: 2px;">
                            <a href="/cinema/<?= $value["id"] ?>"><img style="height: 200px; width: 100%;" class=""
                                             src="../../../assets/img/<?= $value["img"] ?>" alt="LOGO"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="/cinema/<?= $value["id"] ?>" class="btn btn-outline-secondary"><?= $value["name"] ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>