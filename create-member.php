<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Rca777 Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		
		<link rel="stylesheet" href="assets/css/my-custom.css" />
		
		<!--  font awesome -->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
		<!--  font awesome -->

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
<!--            <img src="assets/images/logo/RCA777.png" alt=""> -->
						<small>

							Rca777 Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								English
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu  dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="glyphicon glyphicon-chevron-right"></i>
										English
									</a>
								</li>

								<li>
									<a href="#">
										<i class="glyphicon glyphicon-chevron-right"></i>
										Thai
									</a>
								</li>

								

							
							</ul>
						</li>
						
						
						
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/profile.jpeg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

<!--        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div> -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Member Setup </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="create-member.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Member
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="create-agent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Agent
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-status.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Status
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-keep.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Keep
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-return.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Return
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-structure.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Structure
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-online.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Online
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="sub-agent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Agent
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="monitor-casino.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Monitor Casino
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="change-password.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Change Password
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="history-log.php">
									<i class="menu-icon fa fa-caret-right"></i>
									History Log
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-trophy"></i>
							<span class="menu-text"> Dice </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="dice-summary-today.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Summary Today
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="dice-winandlose.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Win or lose by player
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-bill.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bill
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-bet-reject.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bet Reject
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-robot.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Robot
								</a>

								<b class="arrow"></b>
							</li> 

							<li class="">
								<a href="dice-result.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Result
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-trophy"></i>
							<span class="menu-text"> Card </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="card-summary-today.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Summary Today
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="card-winandlose.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Win or lose by player
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-bill.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bill
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-bet-reject.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bet Reject
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-robot.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Robot
								</a>

								<b class="arrow"></b>
							</li> 

							<li class="">
								<a href="card-result.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Result
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> Cash </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="cash-setting.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Setting
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="cash-bank.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bank
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-deposit-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Deposit List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-withdrawal-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Withdrawal List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Report
								</a>

								<b class="arrow"></b>
							</li> 

							<li class="">
								<a href="cash-sub-agent-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Agent Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-user-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-report-credit-change-manual.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Report Credit Change Manual
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-control-auto-deposit.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Control Auto Deposit
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-control-live-chat.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Control Live Chat
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-user-group-bank.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Group Bank
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					


					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
                <a href="#">Member Setup</a>
              </li>
              <li class="active">Create Member</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
<div class="row pdTop">
<div class="col-xs-12 col-sm-12 col-md-12 widthTable">
<form class="form-horizontal" id="createMember_form" method="post" action="https://mm8betag.234ag.net/main" onsubmit="return false;">
<div class="widget-box no-skin widget-color">
<div class="widget-header widget-header-blue">
<h4 class="widget-title lighter">Member Information</h4>
<div class="widget-toolbar" id="manage-btn">
<button type="button" class="btn btn-success btn-xs" onclick="saveMember();">
<i class="ace-icon fa fa-floppy-o"></i>
Save                        </button>
<button type="reset" class="btn btn-danger  btn-xs" onclick="btn_reset();">
<span class="fa fa-refresh icon-on-right bigger-110"></span>
Reset                        </button>
</div>
<div class="widget-toolbar no-border">
<button type="button" class="btn btn-xs btn-white bigger btn-info btn-bold" onclick="regisCopyUser();return false;">
<span class="normal">
Copy User                            </span>
<span class="mobile">
Copy                            </span>
</button>
<button type="button" class="btn btn-xs btn-white bigger btn-info btn-bold" onclick="setMaxAll();return false;">
<span class="normal">
All MaxValue                            </span>
<span class="mobile">
Max                            </span>
</button>
</div>
</div>
<div class="widget-body">
<div class="widget-main">
<div>
<div class="form-group">
<label class="control-label col-xs-12 col-sm-2 no-padding-right" for="username"> Username :</label>
<div class="col-xs-12 col-sm-4">
<div class="input-group clearfix">
<span class="input-group-addon">
mmm88xxt 
</span>
<input type="text" id="username" name="username" class="inputEngNum" value="" maxlength="5" placeholder="Username">
</div>
</div>
<label class="control-label col-xs-12 col-sm-2 no-padding-right" for="password">Password :</label>
<div class="col-xs-12 col-sm-4">
<div class="clearfix">
<input type="password" name="password" id="password" class="inputEngNum" minlength="6" maxlength="16" placeholder="Password">
<span class="text-danger">* This password is A-Z or a-z and digit from 0-9 and least 5 characters</span>
</div>
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-12 col-sm-2 no-padding-right" for="name"> Name :</label>
<div class="col-xs-12 col-sm-4">
<div class="clearfix">
<input type="text" name="name" id="name" value="" placeholder="Name">
</div>
</div>
<label class="control-label col-xs-12 col-sm-2 no-padding-right" for="telephone"> Telephone :</label>
<div class="col-xs-12 col-sm-4">
<div class="clearfix">
<input type="tel" id="telephone" name="telephone" value="" placeholder="Telephone">
</div>
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-12 col-sm-2 no-padding-right" for="credit"> Credit :</label>
<div class="col-xs-12 col-sm-6">
<div class="clearfix">
<input type="text" name="credit" id="credit" value="0.00" class="numeric" placeholder="Credit">
<span class="text-danger" id="max_credit" data-json="80,000">(Max = 80,000) </span>
</div>
</div>
</div>
</div>
<div class="tabbable">
<ul class="nav nav-tabs padding-12 tab-color-blue background-blue">
<li class="active">
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#soccer" onclick="utab(&#39;soccer&#39;);">
<i class="menu-icon fa fa-futbol-o"></i>
<h7>Soccer</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#sport" onclick="utab(&#39;sport&#39;);">
<i class="menu-icon fa fa-futbol-o"></i>
<h7>Sport</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#step" onclick="utab(&#39;step&#39;);">
<i class="menu-icon fa fa-futbol-o"></i>
<h7>Step</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#casino" onclick="utab(&#39;casino&#39;);">
<i class="menu-icon fa fa-puzzle-piece"></i>
<h7>Casino</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#lotto" onclick="utab(&#39;lotto&#39;);">
<i class="menu-icon fa fa-retweet"></i>
<h7>Lotto</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#lotto_set" onclick="utab(&#39;lotto_set&#39;);">
<i class="menu-icon fa fa-line-chart"></i>
<h7>Lotto SET</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#lotto_lao" onclick="utab(&#39;lotto_lao&#39;);">
<i class="menu-icon fa fa-line-chart"></i>
<h7>Lotto Lao</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#lottery" onclick="utab(&#39;lottery&#39;);">
<i class="menu-icon fa fa-cubes"></i>
<h7>Lottery</h7>
</a>
</li>
<li>
<a data-toggle="tab" href="https://mm8betag.234ag.net/main#game" onclick="utab(&#39;game&#39;);">
<i class="menu-icon fa fa-gamepad"></i>
<h7>Game</h7>
</a>
</li>
</ul>
<div class="tab-content">
<div id="soccer" class="tab-pane fade in active">

<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="soccer_today_active" checked="">
<span class="lbl"> Soccer Today </span>
</label> &nbsp;
<label class="inline">
<input type="checkbox" class="ace" name="soccer_live_active" checked="">
<span class="lbl"> Soccer Live </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;soccer&#39;);">
MaxValue                                                    </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="today_com">Comm :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix input-group">
<select class="form-control input-sm sl_soccer" id="today_com" name="today_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_today_com" data-json="0.00">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="torup">Increase odds home :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_soccer" id="torup" name="torup" onclick="generateSL(&#39;5&#39;,this,true);">
<option value="0">0</option>
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
<span class="hidden" id="k_torup" data-json="5"></span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="logup">Increase odds away :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_soccer" id="logup" name="logup" onclick="generateSL(&#39;5&#39;,this,true);">
<option value="0">0</option>
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
<span class="hidden" id="k_logup" data-json="5"></span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_betmoneymax_pair">Half Max/Match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_betmoneymax_pair" id="live_betmoneymax_pair" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_live_betmoneymax_pair" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_betmax_money">Half Max/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_betmax_money" id="live_betmax_money" class="numeric maxLimit" value="500,000">
<span class="text-danger label-sm" id="k_live_betmax_money" data-json="500,000">(&lt;= 500,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_betmin_money">Half Min/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_betmin_money" id="live_betmin_money" class="numeric minLimit" value="50">
<span class="text-danger label-sm" id="k_live_betmin_money" data-json="50">(&gt;= 50) </span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_fbetmoneymax_pair">Full Max/Match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_fbetmoneymax_pair" id="live_fbetmoneymax_pair" class="numeric maxLimit" value="2,000,000">
<span class="text-danger label-sm" id="k_live_fbetmoneymax_pair" data-json="2,000,000">(&lt;= 2,000,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_fbetmax_money">Full Max/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_fbetmax_money" id="live_fbetmax_money" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_live_fbetmax_money" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="live_fbetmin_money">Full Min/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="live_fbetmin_money" id="live_fbetmin_money" class="numeric minLimit" value="50">
<span class="text-danger label-sm" id="k_live_fbetmin_money" data-json="50">(&gt;= 50) </span>
</div>
</div>
</div>
</div>

</div>
<div id="sport" class="tab-pane fade">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="sport_today_active" checked="checked">
<span class="lbl">Sport Today</span>
</label> &nbsp;
<label class="inline">
<input type="checkbox" class="ace" name="sport_live_active" checked="checked">
<span class="lbl">Sport Live</span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;sport&#39;);">
MaxValue                                                </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="sport_com">Comm :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix input-group">
<select class="form-control input-sm sl_sport" id="sport_com" name="sport_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_sport_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="sport_betmoneymax_pair">Max/Match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="sport_betmoneymax_pair" id="sport_betmoneymax_pair" class="numeric maxLimit" value="10,000">
<span class="text-danger label-sm" id="k_sport_betmoneymax_pair" data-json="10,000">(&lt;= 10,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="sport_betmax_money">Max/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="sport_betmax_money" id="sport_betmax_money" class="numeric maxLimit" value="5,000">
<span class="text-danger label-sm" id="k_sport_betmax_money" data-json="5,000">(&lt;= 5,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="sport_betmin_money">Min/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="sport_betmin_money" id="sport_betmin_money" class="numeric minLimit" value="50">
<span class="text-danger label-sm" id="k_sport_betmin_money" data-json="50">(&gt;= 50) </span>
</div>
</div>
</div>
</div>
</div>
<div id="step" class="tab-pane fade">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="step_active" checked="checked">
<span class="lbl"> Step  </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;step&#39;);">
MaxValue                                                </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom2">Comm 2 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom2" name="stepcom2" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom2" data-json="0">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_betmax_money">Max/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="step_betmax_money" id="step_betmax_money" class="numeric maxLimit" value="500,000">
<span class="text-danger label-sm" id="k_step_betmax_money" data-json="500,000">(&lt;= 500,000) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_daymax_money">Max bet/Day :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="step_daymax_money" id="step_daymax_money" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_step_daymax_money" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom3">Comm 3-4 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom3" name="stepcom3" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom3" data-json="0">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_betmin_money">Min/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="step_betmin_money" id="step_betmin_money" class="numeric minLimit" value="50">
<span class="text-danger label-sm" id="k_step_betmin_money" data-json="50">(&gt;= 50) </span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_billmax_money">Max pay/Bill :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<input type="text" name="step_billmax_money" id="step_billmax_money" class="numeric maxLimit" value="2,000,000">
<span class="text-danger label-sm" id="k_step_billmax_money" data-json="2,000,000">(&lt;= 2,000,000) </span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom5">Comm 5-6 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom5" name="stepcom5" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom5" data-json="0">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom1">Comm fold :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom1" name="stepcom1" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom1" data-json="0">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_max_pair">Max Match/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<select class="form-control sl-width input-sm" id="step_max_pair" name="step_max_pair">
<option value="12">12</option>
<option value="11">11</option>
<option value="10">10</option>
<option value="9">9</option>
<option value="8">8</option>
<option value="7">7</option>
<option value="6">6</option>
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
</select>
<span class="hidden" id="k_step_max_pair" data-json="12"></span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom7">Comm 7-8 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom7" name="stepcom7" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom7" data-json="0">%</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4"></div>
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="step_min_pair">Min Match/Bet :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix">
<select class="form-control sl-width input-sm" id="step_min_pair" name="step_min_pair">
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
</select>
<span class="hidden" id="k_step_min_pair" data-json="2"></span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom9">Comm 9-10 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm" id="stepcom9" name="stepcom9">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom9" data-json="0">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-4 col-md-4">
<label class="control-label col-xs-12 col-sm-6 col-md-4 no-padding-right" for="stepcom11">Comm 11-12 match :</label>
<div class="col-xs-12 col-sm-6 col-md-8">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_step" id="stepcom11" name="stepcom11" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_stepcom11" data-json="0">%</span>
</div>
</div>
</div>
</div>
</div>
<div id="casino" class="tab-pane fade">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="casino_active" checked="checked">
<span class="lbl"> Casino </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;casino&#39;);">
MaxValue                                                </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box" style="">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">SAGaming</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display: none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="casino_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="casino_com" name="casino_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_casino_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group" style="display: none;">
<div class="col-xs-12 col-sm-12">
<label class="control-label col-xs-12 col-sm-5 no-padding-right" for="casino_maxloss">Max loss/day :</label>
<div class="col-xs-12 col-sm-7">
<div class="clearfix">
<input type="text" name="casino_maxloss" id="casino_maxloss" class="numeric maxLimit" value="2,000,000" style="width: 150px;">
</div>
</div>
</div>
</div>
<div class="form-group" style="">
<div class="col-xs-12 col-sm-12">
<label class="control-label col-xs-12 col-sm-5 no-padding-right" for="casino_maxtransfer">Max trans to casino :</label>
<div class="col-xs-7 col-sm-7">
<div class="clearfix">
<input type="text" name="casino_maxtransfer" id="casino_maxtransfer" class="numeric maxLimit" value="5,000,000" style="width: 150px;">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">SunMacau&amp;Allbet&amp;Sexy&amp;Party&amp;Joker&amp;Slotcity Casino</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display:none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="party_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="party_com" name="party_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_party_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="password">Max trans to casino :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix">
<input type="text" name="party_maxtransfer" id="party_maxtransfer" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_party_maxtransfer" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">Vivo Casino</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display: none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="vivo_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="vivo_com" name="vivo_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_vivo_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12">
<label class="control-label col-xs-12 col-sm-5 no-padding-right" for="vivo_maxloss">Max loss/day :</label>
<div class="col-xs-12 col-sm-7">
<div class="clearfix">
<input type="text" name="vivo_maxloss" id="vivo_maxloss" class="numeric maxLimit" value="5,000,000" style="width: 150px;">
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12">
<label class="control-label col-xs-12 col-sm-5 no-padding-right" for="vivo_maxtransfer">Max win/day :</label>
<div class="col-xs-7 col-sm-7">
<div class="clearfix">
<input type="text" name="vivo_maxtransfer" id="vivo_maxtransfer" class="numeric maxLimit" value="5,000,000" style="width: 150px;">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">Fishing Game&amp;Casino</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display:none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="fg_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="fg_com" name="fg_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_fg_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="fg_maxtransfer">Max trans to casino :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix">
<input type="text" name="fg_maxtransfer" id="fg_maxtransfer" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_fg_maxtransfer" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">TGP Casino&amp;Slot</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display:none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="tgp_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="tgp_com" name="tgp_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_tgp_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="tgp_maxtransfer">Max trans to casino :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix">
<input type="text" name="tgp_maxtransfer" id="tgp_maxtransfer" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_tgp_maxtransfer" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- disable cock fight -->
<div class="col-xs-12 col-sm-6 col-md-6" style="">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">Cock Fight</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display:none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="allbet_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="allbet_com" name="allbet_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_allbet_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="allbet_maxtransfer">Max trans to casino :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix">
<input type="text" name="allbet_maxtransfer" id="allbet_maxtransfer" class="numeric maxLimit" value="500,000">
<span class="text-danger label-sm" id="k_allbet_maxtransfer" data-json="500,000">(&lt;= 500,000) </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-header widget-header-flat  text-center">
<h4 class="widget-title smaller">Horse</h4>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="form-group" style="display:none;">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="rcb_com">Comm :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_casino" id="rcb_com" name="rcb_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_rcb_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<label class="control-label col-xs-12 col-sm-4 col-md-5 no-padding-right" for="rcb_maxtransfer">Max trans to casino :</label>
<div class="col-xs-12 col-sm-8 col-md-7">
<div class="clearfix">
<input type="text" name="rcb_maxtransfer" id="rcb_maxtransfer" class="numeric maxLimit" value="1,000,000">
<span class="text-danger label-sm" id="k_rcb_maxtransfer" data-json="1,000,000">(&lt;= 1,000,000) </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="lotto" class="tab-pane fade">
<div class="widget-main no-padding">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="lotto_active" checked="checked">
<span class="lbl"> Lotto </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;lotto&#39;);">
MaxValue                                                    </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-body">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th class="text-center">List</th>
<th class="text-center">Pay</th>
<th class="text-center">Commission</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<td width="35%">3 ตัวบน</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_0_lotto_pay" name="7[0][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_0_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_0_lotto_com" name="7[0][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_0_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">3 ตัวบนโต๊ด</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_1_lotto_pay" name="7[1][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_1_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_1_lotto_com" name="7[1][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_1_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">3 ตัวบนวิ่ง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_2_lotto_pay" name="7[2][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_2_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_2_lotto_com" name="7[2][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_2_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">2 ตัวบน</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_4_lotto_pay" name="7[4][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_4_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_4_lotto_com" name="7[4][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_4_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">3 ตัวล่าง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_6_lotto_pay" name="7[6][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_6_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_6_lotto_com" name="7[6][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_6_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">2 ตัวล่าง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_5_lotto_pay" name="7[5][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_5_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_5_lotto_com" name="7[5][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_5_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">2 ตัวล่างวิ่ง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_3_lotto_pay" name="7[3][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_3_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_3_lotto_com" name="7[3][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_3_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-body">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th class="text-center">List</th>
<th class="text-center">Pay</th>
<th class="text-center">Commission</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<td width="35%">บน 2 ใน 3</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_7_lotto_pay" name="7[7][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_7_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_7_lotto_com" name="7[7][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_7_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">บน 3 ใน 4</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_8_lotto_pay" name="7[8][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_8_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_8_lotto_com" name="7[8][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_8_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">บน 3 ใน 5</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_9_lotto_pay" name="7[9][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_9_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_9_lotto_com" name="7[9][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_9_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">ปักหลักหน่วย</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_10_lotto_pay" name="7[10][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_10_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_10_lotto_com" name="7[10][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_10_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">ปักหลักสิบ</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_11_lotto_pay" name="7[11][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_11_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_11_lotto_com" name="7[11][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_11_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">ปักหลักร้อย</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto" id="7_12_lotto_pay" name="7[12][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_7_12_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto" id="7_12_lotto_com" name="7[12][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_7_12_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="lotto_set" class="tab-pane fade">
<div class="widget-main no-padding">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="lotto_share_active" checked="checked">
<span class="lbl"> Lotto SET </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;lotto_set&#39;);">
MaxValue                                                    </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th class="text-center">List</th>
<th class="text-center">Pay</th>
<th class="text-center">Commission</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<td width="35%">2 ตัว</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_set" id="8_0_lotto_pay" name="8[0][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_8_0_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_set" id="8_0_lotto_com" name="8[0][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_8_0_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">เลขวิ่ง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_set" id="8_2_lotto_pay" name="8[2][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_8_2_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_set" id="8_2_lotto_com" name="8[2][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_8_2_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="lotto_lao" class="tab-pane fade">
<div class="widget-main no-padding">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="lotto_lao_active" checked="checked">
<span class="lbl"> Lotto Lao </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;lotto_lao&#39;);">
MaxValue                                                    </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th class="text-center">List</th>
<th class="text-center">Pay</th>
<th class="text-center">Commission</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<td width="35%">3 ตัวตรง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_0_lotto_pay" name="9[0][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_9_0_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_0_lotto_com" name="9[0][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_0_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">3 ตัวโต๊ด</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_1_lotto_pay" name="9[1][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_9_1_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_1_lotto_com" name="9[1][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_1_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">2 ตัวตรง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_2_lotto_pay" name="9[2][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_9_2_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_2_lotto_com" name="9[2][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_2_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">2 ตัวโต๊ด</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_3_lotto_pay" name="9[3][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_9_3_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_3_lotto_com" name="9[3][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_3_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="widget-box">
<div class="widget-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th class="text-center">List</th>
<th class="text-center">Pay</th>
<th class="text-center">Commission</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<td width="35%">1 ตัววิ่ง</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_4_lotto_pay" name="9[4][lotto_pay]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="hidden" id="k_9_4_lotto_pay" data-json="0">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_4_lotto_com" name="9[4][lotto_com]">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_4_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">สูง-ต่ำ</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_5_lotto_pay" name="9[5][lotto_pay]" onclick="generateSL3(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="hidden" id="k_9_5_lotto_pay" data-json="0.00">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_5_lotto_com" name="9[5][lotto_com]">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_5_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
<tr class="text-center">
<td width="35%">คู่-คี่</td>
<td width="30%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix">
<select class="form-control sl-width input-sm sl_lotto_lao" id="9_6_lotto_pay" name="9[6][lotto_pay]" onclick="generateSL3(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="hidden" id="k_9_6_lotto_pay" data-json="0.00">%</span>
</div>
</div>
</td>
<td width="35%">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="clearfix  input-group">
<select class="form-control input-sm sl_lotto_lao" id="9_6_lotto_com" name="9[6][lotto_com]">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_9_6_lotto_com" data-json="0">%</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="lottery" class="tab-pane fade">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="lottery_active" checked="checked">
<span class="lbl"> Lottery  </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;lottery&#39;);">
MaxValue                                                </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-8 col-sm-6 col-md-4">
<label class="control-label col-xs-6 col-sm-4 col-md-6 no-padding-right" for="6_0_lotto_com">Comm :</label>
<div class="col-xs-6 col-sm-8 col-md-6">
<div class="clearfix input-group">
<select class="form-control input-sm sl_lottery" id="6_0_lotto_com" name="6[][lotto_com]" onclick="generateSL(&#39;0&#39;,this,true);">
<option value="0">0</option>
</select>
<span class="input-group-addon" id="k_6_0_lotto_com" data-json="0">%</span>
</div>
</div>
</div>
</div>
</div>
<div id="game" class="tab-pane fade">
<div class="form-group">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-inline pull-left">
<label class="inline">
<input type="checkbox" class="ace" name="game_active" checked="checked">
<span class="lbl"> Game  </span>
</label>
</div>
<div class="form-inline pull-right">
<button type="button" class="btn btn-white btn-warning btn-bold btn-sm" onclick="setMax(&#39;game&#39;);">
MaxValue                                                </button>
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-8 col-sm-6 col-md-4">
<label class="control-label col-xs-6 col-sm-4 col-md-6 no-padding-right" for="game_com">Comm :</label>
<div class="col-xs-6 col-sm-8 col-md-6">
<div class="clearfix input-group">
<select class="form-control input-sm sl_game" id="game_com" name="game_com" onclick="generateSL2(&#39;0.00&#39;,this);">
<option value="0.00">0.00</option>
</select>
<span class="input-group-addon" id="k_game_com" data-json="0.00">%</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="widget-toolbox text-center clearfix" id="small-manage-btn">
<button type="button" class="btn btn-success btn-xs" onclick="saveMember();">
<i class="ace-icon fa fa-floppy-o"></i>
Save                        </button>
<button type="reset" class="btn btn-danger  btn-xs" onclick="btn_reset();">
<span class="fa fa-refresh icon-on-right bigger-110"></span>
Reset                        </button>
</div>
</div>
</div></form>

</div>
</div>          

					

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
			<script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
