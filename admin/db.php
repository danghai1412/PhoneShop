<?php 
//ket noi co so du lieu
$hostname = 'localhost'; //ten may chu
$username='root'; //ten tai khoan ket noi vao may chu csdl
$password=''; //mat khau cua tai khoan, ngầm định mật khẩu ban đầu của root là rỗng
$dbname='asm'; //ten csdl
$port=3306; //so hieu cổng của máy chủ csdl
function query($sql)
{
	//sử dụng biến toàn cục đã khai báo ở trên
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	//mở kết nối tới cơ sở dữ liệu dùng mysqli với 5 tham số ở trên
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		//neu nhu ket noi khong thanh cong thi dung chuong trinh
		echo "Connection fail<br>";
		//dung chuong trinh
		die($conn->connect_error);
	}
	
	//chay cau truy van lay ket qua
	$result = $conn->query($sql);
	if(!$result)
	{
		//Neu khong co ket qua ($result=null) thi dung chuong trinh
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	//lay tat ca cac ban ghi tu ket qua
	$rows = mysqli_fetch_all($result);
	return $rows;
}
function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		//neu nhu ket noi khong thanh cong thi dung chuong trinh
		echo "Connection fail<br>";
		//dung chuong trinh
		die($conn->connect_error);
	}	
	//chay cau truy van lay ket qua
	$result = $conn->query($sql);
	return $result;
}
?>