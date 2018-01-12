<?php
    $page_name_final = "Untitled";
    $page_subhead_final = "Subheading not set.";
    if (isset($page_name)) {
        $page_name_final = $page_name;
    }
	if (isset($page_subhead)) {
        $page_subhead_final = $page_subhead;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
        <title><?php echo $page_name_final; ?> - StartPanel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="title" content="<?php echo $page_name_final; ?> - StartPanel">
        <meta name="description" content="<?php echo $page_subhead_final; ?>">
        <meta name="keywords" content="startpanel, start, panel, minecraft, admin, management, simple, sleek, powerful free, open, source, opensource">
        
        <link href="/assets/css/grid.css" rel="stylesheet">
        <link href="/assets/css/icons.css" rel="stylesheet">
        <link href="/assets/css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="container-fluid">
                <div class="navbar" id="mainNavbar">
                    <a href="/" class="nav-item text-bold">StartPanel</a>
                    <a href="/" class="nav-item">Home</a>
                    <a href="/docs/" class="nav-item">Docs</a>
                    <div class="nav-right">
                        <a href="https://discord.gg/7P2AfvS" class="nav-item">Discord</a>
                        <a href="/download/" class="nav-item">Download</a>
                    </div>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navbar()">&#9776;</a>
                </div>
                <h1 class="text-white" style="margin-bottom:-16px;"><?php echo $page_name_final; ?></h1>
                <p class="text-white"><?php echo $page_subhead_final; ?></p>
            </div>
        </div>
        <br>
