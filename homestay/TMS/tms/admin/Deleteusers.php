<?php 
session_start();
include('test.php');

//    if(isset($_POST['delete_student']))
// {
//     $student_id = $_POST['delete_student'];
	

//     try {

//         $query = "DELETE FROM tblusers WHERE id=?";
//         $statement = $conn->prepare($query);
//         $data = [
//             => $student_id
//         ];
//         $query_execute = $statement->execute($data);

//         if($query_execute)
//         {
//             $_SESSION['message'] = "Deleted Successfully";
//             header('Location: index.php');
//             exit(0);
//         }
//         else
//         {
//             $_SESSION['message'] = "Not Deleted";
//             header('Location: index.php');
//             exit(0);
//         }

//     } catch(PDOException $e){
//         echo $e->getMessage();
//     }
// }
if(isset($_REQUEST["delete_student"])==false)
	echo "<p>CHƯA CÓ Mã</p>";
else
{
    $pdo_conn=KetNoiCSDL();
	$MaND = $_REQUEST["delete_student"]; 
	//xóa nhân viên từ CSDL
	$sql = "DELETE FROM tblusers WHERE id=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$MaND);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		header("location: manage-users.php");
	else
		echo "khong xóa duoc";	
}
	?>
