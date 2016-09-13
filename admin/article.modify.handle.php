<?php 
	require_once('../connect.php');
	//从后修改页面获取数据
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$updatemysqli="update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id=$id";
	if(mysqli_query($con,$updatemysqli)){
		echo "<script>alert('文章修改成功');window.location.href='article.manage.php'</script>";
	}else{
		echo "<script>alert('文章修改失败');window.location.href='article.modify.php'</script>";
	}
 ?>