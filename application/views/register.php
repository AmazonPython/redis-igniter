<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/public.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=750,target-densitydpi=340,user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<style>
body{background:#FD4C5B; max-width:800px; margin:auto}
.logo{ padding-top:50px; padding-bottom:40px}
.logo img{ display:block; margin:auto}
.logoin{ padding:20px }
.logoin ul{}
.logoin li{ list-style:none; margin-bottom:40px}
.logoin input{ background:#fff; width:95%; padding-left:5%;  height:100px; border-radius:10px; font-size:35px;outline:none; border:none}
.logoin li button{background:#FEB836; width:100%;height:100px; border-radius:10px; font-weight:bolder; font-size:40px; color:#fff; border:none;
outline:none}
.logoin .enroll{ text-align:right;}
.logoin .enroll a{ color:#fff; font-size:30px}
.footer_in{ padding-top:120px}
.footer_in img{ display:block;margin:auto}
</style>

</head>
<body>
<div class="logoin">
	<div class="logo">
    	<img src="<?php echo base_url();?>img/logo.png" />
    </div>
	<ul>
    	<li>
        	<input type="text" placeholder="请输入用户名" />
        </li>
        <li>
        	<input type="password" placeholder="请输入密码" />
        </li>
        <li>
        	<input type="password" placeholder="请确认密码" />
        </li>
        <li>
        	 <button onclick="location.href='/demo/login';">注册</button>
        </li>
    </ul>
    <div class="enroll">
    	<a href="<?php echo base_url('demo/login');?>">已有账户？直接登陆。</a>
    </div>
</div>
<div class="footer_in">
	<img src="<?php echo base_url();?>img/1.png" />
</div>
</body>
</html>
