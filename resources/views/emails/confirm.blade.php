<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认</title>
</head>
<body>

<h1>感谢注册</h1>
<p>点击下面的连接完成注册<a href="{{route('confirm_email',$user->activation_token)}}">{{route('confirm_email',$user->activation_token)}}</a></p>
<p>如果不是你的操作请忽略</p>

</body>
</html>
