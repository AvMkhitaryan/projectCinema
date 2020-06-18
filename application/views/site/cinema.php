<div style="margin-top: 55px;" class="container">
    <div class="row">
        <div class="col-3">
            <div class="list-group" style="margin-top: 25px;">
                <?php foreach ($data["cinemas"] as $value) {
                    echo ' <a href="/cinema/' . $value["id"] . '" style="margin-top:5px;" class="btn btn-outline-secondary">' . $value["name"] . '</a>';
                } ?>
            </div>
        </div>
        <div class="col-9" style="margin-top: 30px;">
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel"
                 style="margin-bottom: 15px;">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="../../../assets/img/<?= $data["wallpapers"][0]["img"]; ?>"
                                 alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive"><?= $data["wallpapers"][0]["text"] ?></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="../../../assets/img/<?= $data["wallpapers"][1]["img"]; ?>"
                                 alt="Second slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive"><?= $data["wallpapers"][1]["text"] ?></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="../../../assets/img/<?= $data["wallpapers"][2]["img"]; ?>"
                                 alt="Third slide">
                            <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive"><?= $data["wallpapers"][2]["text"] ?></h3>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="card flex-md-row mb-4 box-shadow h-md-250" style="border: 1px solid #6a737b">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h4 class="d-inline-block mb-2"><?= $data["thisCinema"][0]["name"]; ?></h4>
                        <p class="card-text mb-auto"><?= $data["thisCinema"][0]["des_info"] ?></p>
                        <h6>Address</h6>
                        <p class="card-text mb-auto"><?= $data["thisCinema"][0]["address"] ?></p>
                        <h6>Phone</h6>
                        <p class="card-text mb-auto"><?= $data["thisCinema"][0]["phone"] ?></p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                         alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                         src="../../../assets/img/<?= $data["thisCinema"][0]["img"]; ?>" data-holder-rendered="true">
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <input type="text" class="data-search-input form-control" placeholder="change date">
                    </div>
            </div>
            <hr>

            <div class="row">
                <?php foreach ($data["movies"] as $value) { ?>
                    <div class="col-lg-4 col-md-6 mb-4 film-data" data-id="<?=  $value["id"] ?>">
                        <div class="card h-100" style="background-color: #dddddd; margin-top: 2px;margin-bottom: 2px;">
                            <a href="/movies/<?= $value["id"] ?>"><img style="height: 300px; width: 100%;" class="" src="../../../assets/img/<?= $value["img"] ?>" alt="LOGO"></a>
                            <div class="card-body">
                                <h4 class="card-title d-flex">
                                    <div>
                                        <a href="/movies/<?= $value["id"] ?>" class="btn btn-outline-secondary"><?= $value["name"] ?></a>
                                    </div>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.data-search-input').dateRangePicker({
            startOfWeek: 'monday',
            separator: ' - ',
            format: 'YYYY-MM-DD HH:mm',
            autoClose: false,
            time: {
                enabled: true
            }
        }).bind('datepicker-change', function (event, object) {
            if (object.value.length === 35) {
                fetch(window.location.origin + `/site/search?date=${object.value}`, {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest"
                    },
                    method: 'get'
                }).then(response => {
                    return response.json();
                }).then((res) => {
                    $('.film-data').addClass('d-none');
                    $.each(res, function (i, item) {
                        $(`.film-data[data-id=${item}]`).removeClass('d-none');
                    })
                });
            }
        })

    })
</script>
<?php
//echo "<pre>";
//var_dump($data["movies"]);
//echo "</pre>";
?>