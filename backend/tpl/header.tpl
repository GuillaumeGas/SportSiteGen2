<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>

        <link rel="stylesheet" type="text/css" href="web/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="web/css/local.css" />

        <script type="text/javascript" src="web/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="web/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">{$SiteName} - Administration</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">

                    {foreach $Menu as $elem}
                        {if $elem.disabled == 0}
                            <li {if $CurrentPage == $elem.fonctionnality_name} class="selected" {/if}><a href="{$elem.url}">{$elem.name}</a></li>
                        {/if}
                    {/foreach}
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> sss<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=profile"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="index.php?page=settings_profile"><i class="fa fa-gear"></i> Options</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?page=logout"><i class="fa fa-power-off"></i> Déconnexion</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <a href="../frontend/index.php" target="_blank">Aller sur </a>
                    </li>
                </ul>
            </div>
        </nav>

<div>

{if isset($Message)}
    {if $TypeMessage == "info"}
        <div class="alert alert-dismissable alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {$Message}
        </div>
    {else}
        <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>
        {$Message}
    {/if}
{/if}
</div>