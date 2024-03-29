<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="renderer" content="webkit">
    <title>设备动作 | Yeelink用户中心</title>
    <link type="text/css" rel="stylesheet" href="/resource/css/framework.css" />
    <link type="text/css" rel="stylesheet" href="/resource/css/main.css" />
</head>
<body>
<div class="page">
<!--header begin-->
<header>
	<div class="bigcontainer">
		<div id="logo">
			<a href="./">CMS</a>
		</div>
		<div class="user">
			<div class="ui inline labeled icon top right pointing dropdown">
			<img class="ui avatar image" src="resource/images/avatar-default.gif">
			欢迎，$用户名
			<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="http://www.yeelink.net"><i class="reply mail icon"></i>返回首页</a>
					<a class="item" href="/user/logout"><i class="sign out icon"></i>注销登录</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- the main menu-->
<div class="ui teal inverted menu fluid">
	<div class="bigcontainer">
		<div class="right menu">
			<a class="item" href="./index.html"><i class="home icon"></i>管理首页</a>
			<a class="active item" href="./devices_list.html"><i class="sitemap icon"></i>设备</a>
			<a class="item" href="./user_profile.html"><i class="info icon"></i>账户</a>
		</div>
	</div>
</div>
<!--the main content begin-->
	<div class="container">
	<!--the content-->
		<div class="ui grid">
			<!--the vertical menu-->
			<div class="four wide column">
				<div class="verticalMenu">
					<div class="ui vertical pointing menu fluid">
  						<a class="item" href="./add.html">
							<i class="add icon"></i> 绑定新设备
  						</a>
  						<a class="item" href="./devices_list.html">
    						<i class="settings icon"></i> 我的设备
  						</a>
  						<a class="active teal item" href="./actions.html">
							<i class="terminal icon"></i> 设备动作
  						</a>
					</div>
				</div>
			</div>
			<!--the newDevice form-->
			<div class="twelve wide column">
				<div class="pageHeader">
					<div class="segment">
						<h3 class="ui dividing header">
  							<i class="large terminal icon"></i>
  							<div class="content">
    							设备动作
    							<div class="sub header">自定义您的设备动作</div>
  							</div>
						</h3>
					</div>
				</div>
				<div class="ui vertical segment">
					<a class="ui red small labeled icon add button" href="./new_action.html"><i class="add icon"></i>增加新动作</a>
                    <div class="ui small icon input right">
                          <input type="text" placeholder="输入动作名搜索……">
                          <i class="search icon"></i>
                    </div>
				</div>
				<div class="ui form fluid vertical segment">
					<form name="form" action="/user/actions" method="post">
							<table class="ui basic table">
  								<thead>
    								<tr>
    								<th>动作名</th>
    								<th>类型</th>
    								<th>是否使用</th>
    								<th>操作</th>
  									</tr>
								</thead>
  								<tbody>
									<tr>
      									<td>示例动作01</td>
      									<td>电子邮件</td>
										<td><i class="icon close"></i></td>
										<td><a class="ui tiny blue edit button" href="./edit_action.html"><i class="edit icon"></i>编辑</a> <a class="ui tiny basic button"><i class="trash icon"></i>删除</a></td>
    								</tr>
									<tr class="positive">
      									<td>示例动作01</td>
      									<td>电子邮件</td>
										<td><i class="icon checkmark"></i></td>
										<td><a class="ui tiny blue edit button" href="./edit_action.html"><i class="edit icon"></i>编辑</a> <a class="ui tiny basic button"><i class="trash icon"></i>删除</a></td>
    								</tr>
									<tr>
      									<td>示例动作01</td>
      									<td>电子邮件</td>
										<td><i class="icon close"></i></td>
										<td><a class="ui tiny blue edit button" href="./edit_action.html"><i class="edit icon"></i>编辑</a> <a class="ui tiny basic button"><i class="trash icon"></i>删除</a></td>
    								</tr>
									<tr>
      									<td>示例动作01</td>
      									<td>电子邮件</td>
										<td><i class="icon close"></i></td>
										<td><a class="ui tiny blue edit button" href="./edit_action.html"><i class="edit icon"></i>编辑</a> <a class="ui tiny basic button"><i class="trash icon"></i>删除</a></td>
    								</tr>
  								</tbody>
							</table>
					</form>
					<!--the form end-->
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer begin-->
<footer>
	<div id="copyrights">
		<div class="inset">
			<div class="bigcontainer">
				<div class="fl">
					<div class="logo"></div>
					<p>&copy; 2020 青岛亿联客信息技术有限公司, 版权所有<br />
<a href="http://www.miibeian.gov.cn" target="_blank">鲁ICP备12022271号</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="resource/javascript/jquery.min.js"></script>
<script type="text/javascript" src="resource/javascript/framework.js"></script>
<script>
	$('.ui.dropdown')
		.dropdown();
</script>
</body>
</html>
