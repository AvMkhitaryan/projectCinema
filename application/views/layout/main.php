<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .date-picker{width:170px;height:25px;padding:0;border:0;line-height:25px;padding-left:10px;font-size:12px;font-family:Arial,sans-serif;font-weight:700;cursor:pointer;color:#303030;position:relative;z-index:2}.date-picker-wrapper{position:absolute;z-index:1;border:1px solid #bfbfbf;background-color:#efefef;padding:5px 12px;font-size:12px;line-height:20px;color:#aaa;font-family:Arial,sans-serif;-webkit-box-shadow:3px 3px 10px rgba(0,0,0,.5);box-shadow:3px 3px 10px rgba(0,0,0,.5);-webkit-box-sizing:initial;box-sizing:initial}.dp-clearfix{clear:both;height:0;font-size:0}.date-picker-wrapper.inline-wrapper{position:relative;-webkit-box-shadow:none;box-shadow:none;display:inline-block}.date-picker-wrapper.single-date{width:auto}.date-picker-wrapper.no-shortcuts{padding-bottom:12px}.date-picker-wrapper.no-topbar{padding-top:12px}.date-picker-wrapper .footer{font-size:11px;padding-top:3px}.date-picker-wrapper b{color:#666;font-weight:700}.date-picker-wrapper a{color:#6bb4d6;text-decoration:underline}.date-picker-wrapper .month-name{text-transform:uppercase}.date-picker-wrapper .select-wrapper{position:relative;overflow:hidden;display:inline-block;vertical-align:middle}.date-picker-wrapper .select-wrapper:hover{text-decoration:underline}.date-picker-wrapper .month-element{display:inline-block;vertical-align:middle}.date-picker-wrapper .select-wrapper select{position:absolute;margin:0;padding:0;left:0;top:-1px;font-size:inherit;font-style:inherit;font-weight:inherit;text-transform:inherit;color:inherit;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;background:0 0;border:0;outline:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";filter:alpha(opacity=1);opacity:.01}.date-picker-wrapper .month-wrapper{border:1px solid #bfbfbf;border-radius:3px;background-color:#fff;padding:5px;cursor:default;position:relative;_overflow:hidden}.date-picker-wrapper .month-wrapper table{width:190px;float:left}.date-picker-wrapper .month-wrapper table.month2{width:190px;float:left}.date-picker-wrapper .month-wrapper table td,.date-picker-wrapper .month-wrapper table th{vertical-align:middle;text-align:center;line-height:14px;margin:0;padding:0}.date-picker-wrapper .month-wrapper table .day{padding:5px 0;line-height:1;font-size:12px;margin-bottom:1px;color:#ccc;cursor:default}.date-picker-wrapper .month-wrapper table div.day.lastMonth,.date-picker-wrapper .month-wrapper table div.day.nextMonth{color:#999;cursor:default}.date-picker-wrapper .month-wrapper table .day.checked{background-color:#9cdbf7}.date-picker-wrapper .month-wrapper table .week-name{height:20px;line-height:20px;font-weight:100;text-transform:uppercase}.date-picker-wrapper .month-wrapper table .day.has-tooltip{cursor:help!important}.date-picker-wrapper .month-wrapper table .day.has-tooltip .tooltip{white-space:nowrap}.date-picker-wrapper .time label{white-space:nowrap}.date-picker-wrapper .month-wrapper table .day.toMonth.valid{color:#333;cursor:pointer}.date-picker-wrapper .month-wrapper table .day.toMonth.hovering{background-color:#cdecfa}.date-picker-wrapper .month-wrapper table .day.lastMonth,.date-picker-wrapper .month-wrapper table .day.nextMonth{display:none}.date-picker-wrapper .month-wrapper table .day.real-today{background-color:#ffe684}.date-picker-wrapper .month-wrapper table .day.real-today.checked,.date-picker-wrapper .month-wrapper table .day.real-today.hovering{background-color:#70ccd5}.date-picker-wrapper table .caption{height:40px}.date-picker-wrapper table .caption>th:first-of-type,.date-picker-wrapper table .caption>th:last-of-type{width:27px}.date-picker-wrapper table .caption .next,.date-picker-wrapper table .caption .prev{padding:0 5px;cursor:pointer}.date-picker-wrapper table .caption .next:hover,.date-picker-wrapper table .caption .prev:hover{background-color:#ccc;color:#fff}.date-picker-wrapper .gap{position:relative;z-index:1;width:15px;height:100%;background-color:red;font-size:0;line-height:0;float:left;top:-5px;margin:0 10px -10px;visibility:hidden;height:0}.date-picker-wrapper .gap .gap-lines{height:100%;overflow:hidden}.date-picker-wrapper .gap .gap-line{height:15px;width:15px;position:relative}.date-picker-wrapper .gap .gap-line .gap-1{z-index:1;height:0;border-left:8px solid #fff;border-top:8px solid #eee;border-bottom:8px solid #eee}.date-picker-wrapper .gap .gap-line .gap-2{position:absolute;right:0;top:0;z-index:2;height:0;border-left:8px solid transparent;border-top:8px solid #fff}.date-picker-wrapper .gap .gap-line .gap-3{position:absolute;right:0;top:8px;z-index:2;height:0;border-left:8px solid transparent;border-bottom:8px solid #fff}.date-picker-wrapper .gap .gap-top-mask{width:6px;height:1px;position:absolute;top:-1px;left:1px;background-color:#eee;z-index:3}.date-picker-wrapper .gap .gap-bottom-mask{width:6px;height:1px;position:absolute;bottom:-1px;left:7px;background-color:#eee;z-index:3}.date-picker-wrapper .selected-days{display:none}.date-picker-wrapper .drp_top-bar{line-height:1.4;position:relative;padding:10px 40px 10px 0}.date-picker-wrapper .drp_top-bar .error-top,.date-picker-wrapper .drp_top-bar .normal-top{display:none}.date-picker-wrapper .drp_top-bar .default-top{display:block}.date-picker-wrapper .drp_top-bar.error .default-top{display:none}.date-picker-wrapper .drp_top-bar.error .error-top{display:block;color:red}.date-picker-wrapper .drp_top-bar.normal .default-top{display:none}.date-picker-wrapper .drp_top-bar.normal .normal-top{display:block}.date-picker-wrapper .drp_top-bar.normal .normal-top .selection-top{color:#333}.date-picker-wrapper .drp_top-bar .apply-btn{position:absolute;right:0;top:6px;padding:3px 5px;margin:0;font-size:12px;border-radius:4px;cursor:pointer;color:#d9eef7;border:solid 1px #0076a3;background:#0095cd;background:-moz-linear-gradient(top,#00adee,#0078a5);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');color:#fff;line-height:initial}.date-picker-wrapper .drp_top-bar .apply-btn.disabled{cursor:pointer;color:#606060;border:solid 1px #b7b7b7;background:#fff;background:-moz-linear-gradient(top,#fff,#ededed);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed')}.date-picker-wrapper .time{position:relative}.date-picker-wrapper.single-month .time{display:block}.date-picker-wrapper .time input[type=range]{vertical-align:middle;width:129px;padding:0;margin:0;height:20px}.date-picker-wrapper .time1{width:180px;padding:0 5px;text-align:center}.time2{width:180px;padding:0 5px;text-align:center}.date-picker-wrapper .time1{float:left}.date-picker-wrapper .time2{float:right}.date-picker-wrapper .hour{text-align:right}.minute{text-align:right}.date-picker-wrapper .hide{display:none}.date-picker-wrapper .first-date-selected,.date-picker-wrapper .last-date-selected{background-color:#49e!important;color:#fff!important}.date-picker-wrapper .date-range-length-tip{position:absolute;margin-top:-4px;margin-left:-8px;-webkit-box-shadow:0 0 3px rgba(0,0,0,.3);box-shadow:0 0 3px rgba(0,0,0,.3);display:none;background-color:#ff0;padding:0 6px;border-radius:2px;font-size:12px;line-height:16px;-webkit-filter:drop-shadow(0 0 3px rgba(0, 0, 0, .3));-moz-filter:drop-shadow(0 0 3px rgba(0, 0, 0, .3));-ms-filter:drop-shadow(0 0 3px rgba(0, 0, 0, .3));-o-filter:drop-shadow(0 0 3px rgba(0, 0, 0, .3));filter:drop-shadow(0 0 3px rgba(0, 0, 0, .3))}.date-picker-wrapper .date-range-length-tip:after{content:'';position:absolute;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #ff0;left:50%;margin-left:-4px;bottom:-4px}.date-picker-wrapper.two-months.no-gap .month1 .next,.date-picker-wrapper.two-months.no-gap .month2 .prev{display:none}.date-picker-wrapper .week-number{padding:5px 0;line-height:1;font-size:12px;margin-bottom:1px;color:#999;cursor:pointer}.date-picker-wrapper .week-number.week-number-selected{color:#49e;font-weight:700}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <script src="../../../assets/js/jquery-3.5.0.min.js"></script>



    <script src="../../../assets/js/js.js"></script>

    <title><?= $this->getTitle(); ?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-style: italic;"><i class="fa fa-video-camera" aria-hidden="true"></i> Cinema</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="col-8">

                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <?php include_once $this->basePath.$content.".php";?>
</main>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Cinema</p>
    </div>
</footer>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.20.0/jquery.daterangepicker.min.js" integrity="sha256-qQx2CIbSRccEP6dedJGT0WHKhX0WhZi8crKw6TzfUeI=" crossorigin="anonymous"></script>
</body>
</html>