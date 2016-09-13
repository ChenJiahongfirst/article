<?php
	require_once('../connect.php');
	//将后台页面用户填写信息传入，传入之前要进行判断
	//&&是什么意思，
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('用户名不能为空');window.location.href='article.add.php'</script>";
	}
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$insertsqli = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
	if(mysqli_query($con,$insertsqli)){
		echo "<script>alert('文章发布成功');window.location.href='article.manage.php'</script>";
	}else{
		echo "<script>alert('文章发布失败');window.location.href='article.add.php'</script>";
	}

?>