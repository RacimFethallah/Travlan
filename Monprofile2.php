<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Profile with tabs like facebook page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="monprofile2.css">


</head>


<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="panel rounded shadow">
                    <div class="panel-body">
                        <div class="inner-all">
                            <ul class="list-unstyled">
                                <li class="text-center">
                                    <img data-no-retina class="img-circle img-responsive img-bordered-primary"
                                        src="Pics/Background/user.png" alt="user">
                                </li>
                                <li class="text-center">
                                    <?= $_SESSION["username"] ?? "" ? "<span id='nom'>Hi,<br>{$_SESSION["username"]}</span>" : "" ?>
                                    <br><br>
                                    <p class="text-muted text-capitalize"></p>
                                </li>

                                <li><br></li>
                                <li>
                                    <div class="btn-group-vertical btn-block">
                                        <a href="monprofile.php" target="" class="btn btn-default" id="profile"><i
                                                class="fa fa-cog pull-right"></i>Mon compte</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-theme rounded shadow">

                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="profile-cover">
                    <div class="cover rounded shadow no-overflow">
                        <div class="inner-cover">

                            <div class="btn-group cover-menu-mobile hidden-lg hidden-md">
                                <button type="button" class="btn btn-theme btn-sm dropdown-toggle"
                                    data-toggle="dropdown">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu pull-right no-border" role="menu">
                                    <li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i>
                                            <span>Timeline</span></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span>
                                            <small>(98)</small></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li> -->
                                    <li><a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7
                                                new)</small></a></li>
                                </ul>
                            </div>
                            <img src="Pics/Background/usa/usa4.jpg" class="img-responsive full-width" alt="cover"
                                style="max-height:200px;">
                            <!-- <br><br><br>
                            <input id="bimg" type="file" accept="image/*" onchange="changeProfileImage(event)"
                                name="img" value="<?= $_SESSION["img"] ?? "" ?>"> -->
                        </div>
                        <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
                            <li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i>
                                    <span>Historique</span></a></li>
                            <!-- <li><a href="#"><i class="fa fa-fw fa-user"></i> <span>Ab</span></a></li> -->
                            <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span>
                                    <small>(98)</small></a></li>
                        </ul>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="panel rounded shadow">
                    <form action="..." enctype="multipart/form-data">
                        <textarea class="form-control input-lg no-border" rows="2"
                            placeholder="What are you doing?..."></textarea>
                    </form>
                    <div class="panel-footer">
                        <button id="postButton" class="btn btn-success pull-right mt-5">POST</button>
                        <ul class="nav nav-pills">
                            <!-- <li><a href="#"><i class="fa fa-user"></i></a></li> -->
                            <li><a href="Pics/Background"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-success rounded shadow">
                            <div class="panel-heading no-border">
                                <div class="pull-left half">
                                    <div class="media">
                                        <div class="media-object pull-left">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="..."
                                                class="img-circle img-post">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
                                            <span class="text-white h6">on 8th June, 2014</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="text-white h4"><i class="fa fa-heart"></i> 15.5K</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body no-padding">
                                <img src="https://www.bootdey.com/image/340x210/" alt="..."
                                    class="img-responsive full-width">
                                <div class="inner-all block">
                                    view all <a href="#">7 comments</a>
                                </div>
                                <div class="line no-margin"></div>
                                <div class="media inner-all no-margin">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."
                                            class="img-post2">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="h4">John Doe</a>
                                        <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. </small>
                                        <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08,
                                                2014</span></em>
                                    </div>
                                </div>
                                <div class="line no-margin"></div>
                                <div class="media inner-all no-margin">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="..."
                                            class="img-post2">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="h4">John Doe</a>
                                        <small class="block text-muted">Quaerat, impedit minus non commodi facere
                                            doloribus nemo ea voluptate nesciunt deleniti.</small>
                                        <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08,
                                                2014</span></em>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group has-feedback no-margin">
                                        <input class="form-control" type="text" placeholder="Your comment here...">
                                        <button type="submit"
                                            class="btn btn-theme fa fa-search form-control-feedback"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success rounded shadow">
                            <div class="panel-heading no-border">
                                <div class="pull-left half">
                                    <div class="media">
                                        <div class="media-object pull-left">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."
                                                class="img-circle img-post">
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
                                            <span class="text-white h6">on 8th June, 2014</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="text-white h4"><i class="fa fa-heart"></i> 15.5K</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body no-padding">
                                <div class="inner-all block">
                                    <h4>Upload on my album :D</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste omnis
                                        fugiat porro consequuntur ratione iure error reprehenderit cum est ab similique
                                        magnam molestias aperiam voluptatibus quia aliquid! Sed, minima.
                                    </p>
                                    <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        A, delectus!</blockquote>
                                    <img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..."
                                        width="100">
                                    <img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..."
                                        width="100">
                                    <img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..."
                                        width="100">
                                </div>
                                <div class="inner-all bg-success">
                                    view all <a href="#">7 comments</a>
                                </div>
                            </div>
                            <div class="panel-footer no-padding no-border">
                                <div class="media inner-all no-margin">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="..."
                                            class="img-post2">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="h4">John Doe</a>
                                        <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. </small>
                                        <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08,
                                                2014</span></em>
                                    </div>
                                </div>
                                <div class="line no-margin"></div>
                                <div class="media inner-all no-margin">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="..."
                                            class="img-post2">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="h4">John Doe</a>
                                        <small class="block text-muted">Quaerat, impedit minus non commodi facere
                                            doloribus nemo ea voluptate nesciunt deleniti.</small>
                                        <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08,
                                                2014</span></em>
                                    </div>
                                </div>
                                <div class="line no-margin"></div>
                                <form action="#" class="form-horizontal inner-all">
                                    <div class="form-group has-feedback no-margin">
                                        <input class="form-control" type="text" placeholder="Your comment here...">
                                        <button type="submit"
                                            class="btn btn-theme fa fa-search form-control-feedback"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="monprofile2.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>


<?php
include_once 'login.php';
?>

<?php
include_once 'register.php';
?>

<?php
include_once 'passwordReset.php';
?>

<?php
include_once 'includes/errors.php';
?>


<?php
include_once 'footer.php';
?>