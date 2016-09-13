<?php 
	require_once('../connect.php');
	//从管理页面获得id
	$id=$_GET['id'];
	//从数据库获取数据
	$deletesqli="delete from article where id=$id";
	if(mysqli_query($con,$deletesqli)){
		echo "<script>alert('删除文章成功');window.location.href='article.manage.php'</script>";
	}else{
		echo "<script>alert('删除文章失败');window.location.href='article.manage.php'</script>";

	}
 ?>