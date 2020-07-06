<div style="margin-top: 55px;" class="container">
    <div class="row">
        <div class="col-3">
            <div class="list-group" style="margin-top: 25px;">
                <?php foreach ($data["old"] as $value) {
                    echo ' <a href="/cinema/' . $value["id"] . '" style="margin-top:5px;" class="btn btn-outline-secondary">' . $value["name"] . '</a>';
                } ?>

            </div>
        </div>
        <div class="col-9" style="margin-top: 30px;margin-bottom: 5px;">
            <div id="movieId" class="d-flex flex-row rounded" style="border: 1px solid #6c757d"
                 datatype=" <?= $data["filmsInfo"][0]["cimes_id"] ?>">
                <div class="p-0 w-25">
                    <img style="height: 270px; width: 100%;"
                         src="../../../assets/img/<?= $data["filmsInfo"][0]["img"]; ?>">
                </div>
                <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
                    <div class="row">
                        <div style="margin-left: 15px;">
                            <h5 class="text-info">Films Name</h5>
                            <h6 style="margin-bottom: 13px;"> <?= $data["filmsInfo"][0]["name"]; ?></h6>
                            <h5 class="text-info">Release Year</h5>
                            <h6 style=""><?= $data["filmsInfo"][0]["relese_year"]; ?></h6>
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 class="text-info">Genre</h5>
                            <h6 style="margin-bottom: 13px;"> <?= $data["filmsInfo"][0]["genre"]; ?></h6>
                            <h5 class="text-info">Time Count</h5>
                            <h6 style=""> <?= $data["filmsInfo"][0]["time_count"]; ?></h6>
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 class="text-info"></h5>
                            <h6 style=""></h6>
                        </div>
                        <div style="margin-left: 15px;">
                            <h5 class="text-info">Movies Reiting</h5>
                            <div style="text-align:center;">
                                <div class="dot" style="background-color: <?php
                                $value = $data["filmsInfo"][0]["reting_in_world"];
                                if ($value >= 80) {
                                    echo "green";
                                } elseif ($value >= 60 || $value <= 79) {
                                    echo "yellow";
                                } elseif ($value >= 40 || $value <= 59) {
                                    echo "red";
                                } else {
                                    echo "blue";
                                }
                                ?>"><h2 style="margin-top:5px;"><?= $data["filmsInfo"][0]["reting_in_world"]; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-info">Information</h5>
                    <h6 style=""> <?= $data["filmsInfo"][0]["movie_info"]; ?></h6>
                </div>
            </div>
            <div style="margin-top: 15px;" class="d-flex justify-content-center">
                <label for="dayTime">
                    <select class="form-control" name="dayTime" id="daytime">
                        <option value="">---</option>

                        <?php
                        foreach ($data["dateTime"] as $d => $datum) {
                            foreach ($datum as $k => $v) { ?>

                                <option id="<?= $data["selectId"][$d]; ?>"
                                        value="<?= $v["start"]; ?> - <?= $v["end"]; ?>"><?= $v["start"]; ?>
                                    - <?= $v["end"]; ?></option>
                            <?php } ?>
                        <?php } ?>

                    </select>
                </label>
            </div>
            <div id="movies" datatype="<?= $data["filmsInfo"][0]['id']; ?>"></div>
            <div id="cinemas" datatype="<?= $data["filmsInfo"][0]['cimes_id']; ?>"></div>
            <div id="chair" style="margin-top: 15px;">
                <div id="sidaunt" class="container" style="background:#343a40;border-radius: 5px;">

                </div>
                <div id="buyDiv" class="d-flex justify-content-center" style="margin-top: 15px;">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // $(function () {
    //     $('input[name="daterange"]').daterangepicker({
    //         opens: 'left'
    //     }, function (start, end, label) {
    //         console.log(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    //     });
    // });
    // let data = new Date();
    // let day=data.getDate();
    // console.log(day);


    // var $select = $('#date');
    // var index = 1;
    // $select.children().eq(index).prop('selected', true);

    // let moviesId = $("#movieId").attr("datatype");
    //  // console.log(moviesId);
    // $.ajax({
    //     url: window.location.origin + '/site/datetime',
    //     type: 'post',
    //     dataType: 'json',
    //     data: {movieID: moviesId},
    //     success: function (data) {
    //         // console.log(data);
    //         data.forEach((i)=>{
    //             $("#date").append(` <option value="${i.id}">${i.start} - ${i.end}</option>`)
    //         })
    //     }
    // });

    // let DandT = "";
    // let GlobMov = "";
    // let GlobCinems = "";
    let GlobstartTimeId = "";
    $("#daytime").change(function () {


        //
        // let mov = $('#movies').attr('datatype');
        // let cinems = $('#cinemas').attr('datatype');
        // let dateTime = $(this).val();
        let startTimeId = $(this).children(":selected").attr("id");
        //console.log(startTimeId);
        //
        // DandT = dateTime;
        // GlobMov = mov;
        // GlobCinems = cinems;
        GlobstartTimeId = startTimeId;
        //
        // // console.log(GlobSelectID);
        // $("#buyDiv").children().remove();
        // $("#sidaunt").children().remove();
        // let vallone = "";
        // let valltwo = "";
        let buyArray = [];
        // //, dateTime: dateTime
        //
        $.ajax({
            url: window.location.origin + '/site/datetime',
            type: 'post',
            dataType: 'json',
            // data: {mov: mov, cinems: cinems, selectId: GlobSelectID},
            data: {time: startTimeId},
            success: function (data) {
                //console.log(data);
                $("sidaunt").children().remove();
                //
                data.forEach((i, k) => {
                    buyArray.push(+i.chair_number);
                });
                //
                for (let i = 1; i <= 5; i++) {
                    $('#sidaunt').append('<div id="row' + i + '" class="d-flex justify-content-between" > </div>');
                    if (i === 1) {
                        vallone = 1;
                        valltwo = 10;
                    } else {
                        vallone = (i - 1) * 10 + 1;
                        valltwo = vallone + 9;
                    }

                    for (let z = vallone; z <= valltwo; z++) {
                        let but = buyArray.includes(z);
                        if (but === true) {
                            $('#row' + i).append('<button class="btn btn-danger" disabled> ' + z + ' </button>')
                        } else {
                            $('#row' + i).append('<button id="' + z + '" class="btn btn-success button" onclick="buy(' + z + ')"> ' + z + ' </button>')
                        }

                        // let t = jQuery.inArray(z, buyArray);
                        //
                        // console.log(t);
                        // // console.log(buyArray);

                    }
                }
                // $('sidaunt').append(  '</table>' );

                // for (let i = 0; i < 5; i++) {
                //     $("#sidaunt").append(`
                //         <div class="row line">
                //
                //         </div>
                //     `);
                //     for (let z=0;z<10;z++){
                //
                //         $(".line").append(`
                //         <div id="1" style="background: green">
                //             <button class="btn btn-success"> 11 </button>
                //         </div>
                //     `);
                //
                //     }
                // }
                // data.forEach((i)=>{
                // })

            }
        });
        // // console.log(buyArray);
        // // console.log($(this).val())
    });

    function buy(arg) {
        $("#buyDiv").children().remove();
        // alert(DandT);
         console.log(GlobstartTimeId);
        var c = confirm("Buy?");

        if (c === true) {
            $.ajax({
                url: window.location.origin + '/site/buy',
                type: 'post',
                dataType: 'json',
                data: {arg:arg,comm_id:GlobstartTimeId,},
                success: function (data) {
                    //console.log(data);
                    if (data === 1) {
                        $("#" + arg).removeClass();
                        $("#" + arg).addClass("btn btn-danger");
                        $("#" + arg).prop("disabled", true);
                        $("#buyDiv").append('<h4>You Have buy Ticek</h4>')
                        // window.location = '/movies/'+GlobMov;
                    }
                }
            });
        }

    }

    // const array1 = [1, 2, 3];
    //
    // console.log(array1.includes(2));

    // $(".button").on("click",function () {
    //     alert(111);
    //     // let buttonId=$(this).attr("id");
    //     // console.log(buttonId);
    // })
</script>

<?php

//$day= date('Y-m-d');
//if (strpos($data["dateTime"][0]["start"], $day)){
//    echo "true";
//}else{
//    echo "false";
//}
//

////cinemmas
//echo $data["filmsInfo"][0]['cimes_id'];
////movies
//echo $data["filmsInfo"][0]['id'];
//
//
//echo "<pre>";
//var_dump($data["selectId"][0]);
//echo "</pre>";
?>