<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Profile with tabs like facebook page - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background:#eee;
}

.divider {
  height: 20px;
  display: block;
}

/* ========================================================================
 * FORM MISC
 * ======================================================================== */
.input-group-addon {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  min-width: 39px;
}
.input-group-addon .ckbox, .input-group-addon .rdio {
  position: absolute;
  top: 4px;
  left: 10px;
}

.input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.input-sm, .form-group-sm .form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

@media (max-width: 640px) {
  .form-inner-all [class*="col-"]:last-child .form-control {
    margin-top: 15px;
  }
}


/* ========================================================================
 * PROFILE
 * ======================================================================== */
.profile-cover {
  width: 100%;
}
.profile-cover .cover {
  position: relative;
  border: 10px solid #FFF;
}
.profile-cover .cover .inner-cover {
  overflow: hidden;
  height: auto;
}
.profile-cover .cover .inner-cover img {
  border: 1px solid transparent;
  text-align: center;
  width: 100%;
}
.profile-cover .cover .inner-cover .cover-menu-mobile {
  position: absolute;
  top: 10px;
  right: 10px;
}
.profile-cover .cover .inner-cover .cover-menu-mobile button i {
  font-size: 17px;
}
.profile-cover .cover ul.cover-menu {
  padding-left: 150px;
  position: absolute;
  overflow: hidden;
  left: 1px;
  float: left;
  bottom: 0px;
  width: 100%;
  margin: 0px;
  background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
}
.profile-cover .cover ul.cover-menu li {
  display: block;
  float: left;
  margin-right: 0px;
  padding: 0px 10px;
  line-height: 40px;
  height: 40px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.profile-cover .cover ul.cover-menu li:hover {
  background-color: rgba(0, 0, 0, 0.44);
}
.profile-cover .cover ul.cover-menu li.active {
  background-color: rgba(0, 0, 0, 0.64);
}
.profile-cover .cover ul.cover-menu li a {
  color: #FFF;
  font-weight: bold;
  display: block;
  height: 40px;
  line-height: 40px;
  text-decoration: none;
}
.profile-cover .cover ul.cover-menu li a i {
  font-size: 18px;
}
.profile-cover .profile-body {
  margin: 0px auto 10px;
  position: relative;
}
.profile-cover .profile-timeline {
  padding: 15px;
}
.img-post{
    width:30px;
    height:30px;
}
.img-post2{
    width:50px;
    height:50px;
}
    </style>
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
<img data-no-retina class="img-circle img-responsive img-bordered-primary" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="John Doe">
</li>
<li class="text-center">
<h4 class="text-capitalize">John Doe</h4>
<p class="text-muted text-capitalize">web designer</p>
</li>
<li>
<a href class="btn btn-success text-center btn-block">PRO Account</a>
</li>
<li><br></li>
<li>
<div class="btn-group-vertical btn-block">
<a href class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
<a href class="btn btn-default"><i class="fa fa-sign-out pull-right"></i>Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="panel panel-theme rounded shadow">
<div class="panel-heading">
<div class="pull-left">
<h3 class="panel-title">Contact</h3>
</div>
<div class="pull-right">
<a href="#" class="btn btn-sm btn-success"><i class="fa fa-facebook"></i></a>
<a href="#" class="btn btn-sm btn-success"><i class="fa fa-twitter"></i></a>
<a href="#" class="btn btn-sm btn-success"><i class="fa fa-google-plus"></i></a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-body no-padding rounded">
<ul class="list-group no-margin">
<li class="list-group-item"><i class="fa fa-envelope mr-5"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f3c3a3f3f203d3b0f2d20203b2b2a36612c2022">[email&#160;protected]</a></li>
<li class="list-group-item"><i class="fa fa-globe mr-5"></i> www.bootdey.com</li>
<li class="list-group-item"><i class="fa fa-phone mr-5"></i> +6281 903 xxx xxx</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-8">
<div class="profile-cover">
<div class="cover rounded shadow no-overflow">
<div class="inner-cover">

<div class="btn-group cover-menu-mobile hidden-lg hidden-md">
<button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bars"></i>
</button>
<ul class="dropdown-menu pull-right no-border" role="menu">
<li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
<li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
<li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
<li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
<li><a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7 new)</small></a></li>
</ul>
</div>
<img src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" class="img-responsive full-width" alt="cover" style="max-height:200px;">
</div>
<ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
<li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
<li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
<li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
<li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
</ul>
</div>
</div>
<div class="divider"></div>
<div class="panel rounded shadow">
<form action="...">
<textarea class="form-control input-lg no-border" rows="2" placeholder="What are you doing?..."></textarea>
</form>
<div class="panel-footer">
<button class="btn btn-success pull-right mt-5">POST</button>
<ul class="nav nav-pills">
<li><a href="#"><i class="fa fa-user"></i></a></li>
<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
<li><a href="#"><i class="fa fa-camera"></i></a></li>
<li><a href="#"><i class="fa fa-smile-o"></i></a></li>
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
<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="..." class="img-circle img-post">
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
<img src="https://www.bootdey.com/image/340x210/" alt="..." class="img-responsive full-width">
<div class="inner-all block">
view all <a href="#">7 comments</a>
</div>
<div class="line no-margin"></div>
<div class="media inner-all no-margin">
<div class="pull-left">
<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-post2">
</div>
<div class="media-body">
<a href="#" class="h4">John Doe</a>
<small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
<em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
</div>
</div>
<div class="line no-margin"></div>
<div class="media inner-all no-margin">
<div class="pull-left">
<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="..." class="img-post2">
</div>
<div class="media-body">
<a href="#" class="h4">John Doe</a>
<small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
<em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
</div>
</div>
</div>
<div class="panel-footer">
<form action="#" class="form-horizontal">
<div class="form-group has-feedback no-margin">
<input class="form-control" type="text" placeholder="Your comment here...">
<button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
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
<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-circle img-post">
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
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste omnis fugiat porro consequuntur ratione iure error reprehenderit cum est ab similique magnam molestias aperiam voluptatibus quia aliquid! Sed, minima.
</p>
<blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>
<img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..." width="100">
<img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..." width="100">
<img data-no-retina src="https://www.bootdey.com/image/340x210/" alt="..." width="100">
</div>
<div class="inner-all bg-success">
view all <a href="#">7 comments</a>
</div>
</div>
<div class="panel-footer no-padding no-border">
<div class="media inner-all no-margin">
<div class="pull-left">
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="..." class="img-post2">
</div>
<div class="media-body">
<a href="#" class="h4">John Doe</a>
<small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
<em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
</div>
</div>
<div class="line no-margin"></div>
<div class="media inner-all no-margin">
<div class="pull-left">
<img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="..." class="img-post2">
</div>
<div class="media-body">
<a href="#" class="h4">John Doe</a>
<small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
<em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
</div>
</div>
<div class="line no-margin"></div>
<form action="#" class="form-horizontal inner-all">
<div class="form-group has-feedback no-margin">
<input class="form-control" type="text" placeholder="Your comment here...">
<button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>