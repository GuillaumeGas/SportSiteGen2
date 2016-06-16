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

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <h1 class="text-center">Partie administration</h1>
            </div>
            <div class="modal-body">
                <form class="form col-md-12 center-block" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" name="Pseudo" class="form-control input-sm" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <input type="password" name="Mdp" class="form-control input-sm" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm btn-block">Connexion</button>
                    </div>
                    {if isset($Err)}
                        <div>
                            <p style="color:red">{$Err}</p>
                        </div>
                    {/if}
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</div>

</body>