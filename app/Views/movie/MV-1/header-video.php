<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="th" prefix="og: http://ogp.me/ns#">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/stylesheet.css?v=10">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/poster.css?v=10">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/navigation.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/single.css?v=13">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/font-manual.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= $document_root ?>/assets/css/font-awesome.min.css">
    <title><?php echo $setting['setting_title']; ?></title>
    <link rel="canonical" href="#" />
    <?php
    if (!empty($setting['setting_header'])) {
        echo base64_decode($setting['setting_header']);
    }
    $logos = $setting['setting_logo'];
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1000; user-scalable=1.5;" />
    <title><?php echo $setting['setting_title']; ?></title>
    <meta name="description" content="<?php echo $setting['setting_description']; ?>" />
    <meta name="keywords" content=" <?php echo $setting['setting_keyword']; ?>" />
    <meta name="author" content="OrcasThemes">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <?php
    if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {
        echo '<link rel="canonical" href="' . 'https://' . $_SERVER['HTTP_HOST'] . '' . '" />';
    }
    ?>
    <!-- TAG og facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo  base_url(uri_string()); ?>" />
    <meta property="og:title" content="<?php echo $setting['setting_title']; ?>" />
    <meta property="og:description" content="<?php echo $setting['setting_description']; ?>" />
    <meta property="og:image" content="<?php echo $setting['image']; ?>" />
    
    <!-- TAG og Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $setting['setting_title']; ?>" />
    <meta name="twitter:description" content="<?php echo $setting['setting_description']; ?>" />
    <meta name="twitter:image" content="<?php echo $path_setting . $logos; ?>" />
    <meta name="twitter:site" content="@ondemandacademy" />
    <meta name="geo.region" content="TH" />
    <meta name="geo.position" content="14.897192;100.83273" />
    <meta name="ICBM" content="14.897192, 100.83273" />


    <link rel="icon" type="image/png" href='<?php echo $path_setting . $setting['setting_icon']; ?>' />
    <style>
        .movie-imdb b {
            background: url(<?php echo base_url("assets/images/icon-star.png"); ?>) no-repeat 0;
            background-size: 11px 11px;
        }

        .mobile-only {
            display: none;
        }

        .fb-comments {
            padding: 1px;
        }

        .movie-title-color {
            color: white;
            font-size: 12px;
        }

        .nav {
            background: #4c4c4c;
        }

        .nav li a {
            background: #4c4c4c;
        }

        li.active a {
            background-color: #262626
        }

        ul li a:hover {
            text-shadow: 2px 2px 12px rgba(255, 245, 206, 0.8);
            /*color: #262626;*/
        }

        .movie-footer {
            background: #262626;
        }

        .box-header,
        .box h3 {
            background-color: #262626;
        }

        .header-search-button {
            background: #f2d45f;
            font-family: myFirstFont !important;
            color: #682e02;
            cursor: pointer;
        }

        .report-movie {
            background-color: red;
            margin-bottom: 20px;
        }

        #mainseo {
            display: none;
        }

        #secondseo {
            display: none;
        }

        .header-font-1 {
            color: #c5ad00;
        }

        .header-requestmovie-button {
            background-color: #f2d45f;
            font-family: myFirstFont !important;
            padding: 4px 20px;
            /* border-radius: 23px; */
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            color: #682e02;
            cursor: pointer;
            border: 1px solid #ccc;
        }
        #ads_fox_bottom {
            bottom: 0px;
            display: block;
            min-height: 40px;
            position: fixed;
            text-align: center;
            z-index: 50000;
            width: 100%;
        }

        #ads_fix_footer {
            width: 100%;
        }

        @media screen and (min-device-width: 1200px) and (max-device-width: 1899px) {
            #ads_fox_bottom {
                bottom: 0px;
                display: block;
                min-height: 40px;
                position: fixed;
                text-align: center;
                z-index: 50000;
                width: 61%;
                padding-left: 12%;
            }

            #ads_fix_footer {
                width: 100%;
            }
        }

        @media screen and (min-device-width: 1900px) {
            #ads_fox_bottom {
                bottom: 0px;
                display: block;
                min-height: 40px;
                position: fixed;
                text-align: center;
                z-index: 50000;
                width: 61%;
                padding-left: 0%;
            }

            #ads_fix_footer {
                width: 100%;
            }
        }
    </style>
</head>

<body class="home blog" cfapps-selector="body">
    <div id="mainseo">
        <h1>ดูหนัง และ ดูหนังออนไลน์ หนังใหม่ชนโรงเต็มเรื่องได้ที่ www.donengded.com</h1>
    </div>
    <style>
        #mainseo {
            display: none;
        }
        #secondseo {
            display: none;
        }
        .header-font-1 {
            color: #c5ad00;
        }
        
        #ads_fox_bottom {
            bottom: 0px;
            display: block;
            min-height: 40px;
            position: fixed;
            text-align: center;
            z-index: 50000;
            width: 100%;
        }
        #ads_fix_footer {
            width: 100%;
        }
        @media screen and (min-device-width: 1200px) and (max-device-width: 1899px) {
            #ads_fox_bottom {
                bottom: 0px;
                display: block;
                min-height: 40px;
                position: fixed;
                text-align: center;
                z-index: 50000;
                width: 61%;
                padding-left: 12%;
            }
            #ads_fix_footer {
                width: 100%;
            }
        }
        @media screen and (min-device-width: 1900px) {
            #ads_fox_bottom {
                bottom: 0px;
                display: block;
                min-height: 40px;
                position: fixed;
                text-align: center;
                z-index: 50000;
                width: 61%;
                padding-left: 0%;
            }
            #ads_fix_footer {
                width: 100%;
            }
        }
    </style>
    <div id="wrap">
        <div class="header">
            <div class="header-left">
                <div class="header-logo">
                    <a href="<?php echo str_replace('/public', '', base_url()); ?>">
                        <img src='<?php echo $path_setting . $setting['setting_logo']; ?>' width="55%" title="<?php echo $setting['setting_title']; ?>" alt="<?php echo $setting['setting_title']; ?>">
                    </a>
                </div>
            </div>
            <div class="header-right">
                <div class="header-title">
                    <div class="row" style="display: flex;">
                    <li>
                            <p class="header-font-1">ดูหนังออนไลน์ ดูหนังใหม่ที่ donengded</p>
                            <?PHP if (!empty($setting['setting_fb'])) {
                            ?>
                                <a target="_blank" href="<?php echo $setting['setting_fb']; ?>"><img id="icon-facebook" style="width: 6%;" src="<?= $document_root ?>/assets/images/social-icon/facebook.png" title="ติดต่อทางเฟซบุ้ค" alt="ติดต่อทางเฟซบุ้ค"></a>
                            <?php
                            }
                            if (!empty($setting['setting_line'])) 
                            {
                            ?>
                                <a target="_blank" href="<?php echo $setting['setting_line']; ?>"><img id="icon-line" style="width: 6%; border-radius:5px" src="<?= $document_root ?>/assets/images/social-icon/line.png" title="ติดต่อทางไลน์" alt="ติดต่อทางไลน์"></a>
                            <?php
                            }  ?>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar">
            <ul class="nav">
                <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">
                    <a class="nav-main-link" alt="หน้าแรก" href="<?php echo str_replace('/public', '', base_url()); ?>" style="font-size: 19px">
                        หน้าแรก
                    </a>
                </li>
                <!-- <li class="cat-item">
                    <a href="<?php echo base_url('/zoom'); ?>" alt="หนังซูม" title="Movie-zoom" style="font-size: 19px">
                        หนังซูม
                    </a>
                </li> -->
                <li class="cat-item">
                    <a href="<?php echo base_url('/category/10/หนังการ์ตูน'); ?>" alt="หนังการ์ตูน" title="Animation" style="font-size: 19px">
                        หนังการ์ตูน
                    </a>
                </li>
                <li class="cat-item">
                    <a href="<?php echo base_url('/category/8/หนังเอเชีย'); ?>" alt="หนังเอเชีย" title="Asia Movie" style="font-size: 19px">
                        หนังเอเชีย
                    </a>
                </li>
               
                <li class="cat-item">
                    <a href="<?php echo base_url('/category/6/หนังไทย'); ?>" alt="หนังไทย" title="Thai Movie" style="font-size: 19px">
                        หนังไทย
                    </a>
                </li>
                <li class="cat-item">
                    <a href="<?php echo base_url('/anime'); ?>" alt="หนังไทย" title="Thai Movie" style="font-size: 19px">
                        Anime
                    </a>
                </li>
                <li class="cat-item">
                    <a href="<?php echo base_url('/av'); ?>" alt="หนังไทย" title="Thai Movie" style="font-size: 19px">
                        JAV
                    </a>
                </li>
                <li class="cat-item">
                    <a href="<?php echo base_url('/clips'); ?>" alt="หนังไทย" title="Thai Movie" style="font-size: 19px">
                        Clips 18+
                    </a>
                </li>
                <!-- <li class="nav-main-item  menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">
                    <a class="nav-main-link request" style="font-size: 19px">ขอหนัง</a>
                </li> -->
                <li class="cat-item" style="float: right;padding-top: 13px;display: flex;">
                    <button type="button" id="request" name="request" class="header-requestmovie-button" onclick="request_movie('<?= $branch ?>')">ขอหนัง</button>
                    <form id="formsearch" style="padding-right: 10px;">
                        <input type="text" id="search" class="header-search-input" placeholder="หนังที่ต้องการค้นหา...." value="<?= $keyword_string ?>">
                        <button type="submit" class="header-search-button">ค้นหา</button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Banner 1 -->
        <div class="notice" style="z-index:2147483647;display: flex">
            <div style="width: 15%">
                <?php
                if (!empty($path_imgads)) {
                    foreach ($path_imgads as $value) {
                        if ($value['ads_position'] == "2") {
                ?>
                            <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
                                <img alt="<?php echo $value['ads_url'] ?>" title="<?php echo $value['ads_url'] ?>" src="<?php echo $path_ads. $value['ads_picture'] ?>" style="width: 100%" class="hoverimg">
                            </a>
                <?php
                        }
                    }
                } else {
                }
                ?>
            </div>
            <div style="width: 70%">
                <?php
                if (!empty($path_imgads)) {
                    foreach ($path_imgads as $value) {
                        if ($value['ads_position'] == "1") {
                ?>
                            <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
                                <img alt="<?php echo $value['ads_url'] ?>" title="<?php echo $value['ads_url'] ?>" src="<?php echo $path_ads. $value['ads_picture'] ?>" style="width: 100%;padding-bottom: 5px;" class="hoverimg">
                            </a>
                <?php
                        }
                    }
                } else {
                }
                ?>
            </div>
            <div style="width: 15%">
                <?php
                if (!empty($path_imgads)) {
                    foreach ($path_imgads as $value) {
                        if ($value['ads_position'] == "3") {
                ?>
                            <a onclick="onClickAds(<?= $value['ads_id'] ?>, <?= $branch ?>)" href="<?php echo $value['ads_url'] ?>" target="_blank">
                                <img alt="<?php echo $value['ads_url'] ?>" title="<?php echo $value['ads_url'] ?>" src="<?php echo $path_ads. $value['ads_picture'] ?>" style="width: 100%" class="hoverimg">
                            </a>
                <?php
                        }
                    }
                } else {
                }
                ?>
            </div>
        </div>