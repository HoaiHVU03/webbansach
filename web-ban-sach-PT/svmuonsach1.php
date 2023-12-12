
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8" />
        <form name="frm" method="post" action="">
        <h1 style="text-align: center;">Danh Sách Sinh Viên Mượn Sách</h1>
        <p style="margin: 30px">
        <img src="/img/add.jpg" alt="Add new" width="40px" height="40px" border="0" " /> <a style="font-size: 17px; text-decoration: none; color:chocolate; font-family: 'Nunito', sans-serif;" href="/svmuonsachhv.php">Mượn Thêm</a>
        <br>
        <br>
        <br>
        <img src="/img/home.jpg" width="45px" height="50px"><a href="/main_web.php" style="font-size: 18px; color:chocolate; text-decoration: none; ">Trang Chủ</a>
    </p>
        <hr style="width:30px;">
        
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">  
            <thead>
                <tr>
                    <th><strong>Tên Sinh Viên</strong></th>
                    <th><strong>Tên Khoa và Lớp</strong></th>
                    <th><strong>Email hoặc Số Điện Thoại</strong></th>
                    <th><strong>Tên Sách</strong></th>
                    <th><strong>Sửa</strong></th>
                    <th><strong>Xóa</strong></th>
                </tr>
             </thead>

			<tbody>
			<tbody>
                <?php
                    include('Connection.php');
                    $sql = "SELECT * FROM svmuonsach";
                    $No = 1;
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                    <tr>
                    <td class="cotCheckBox"><?php echo $row['Cat_ID']; ?></td>
                    <td><?php echo $row['Cat_Class']; ?></td>
                    <td><?php echo $row['Cat_Fax']; ?></td>
                    <td><?php echo $row['Cat_Book']; ?></td>
                    <td style='text-align:center'><a href="capnhatthongtin.php?id=<?php echo $row ["Cat_ID"];?>"> <img src='/img/edit.png' border='0' style = 'width:30px; height:30px;' /></a></td>
                    <td style='text-align:center'>
                    <a href="svmuonsach1.php?function=del&&id=<?php echo $row["Cat_ID"]; ?>" onclick="return deleteConfirm()">
                    <?php
                        if(isset($_GET["function"]) == "del"){
                            if(isset($_GET["id"])){
                                $id = $_GET["id"];
                             mysqli_query($conn, "DELETE FROM svmuonsach WHERE Cat_ID = '$id'");
                            }
                        }
                    ?>
                    <img src='/img/delete.png' border = '0' style='width:40px; height:50px';/></a></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                    
                
                <script type="text/javascript">
                function deleteConfirm(){
                    if (confirm("Bạn có chắc chắn muốn xóa không?")){
                        return true;
                    }else{
                        return false;
                    }
                }
            </script>
			</tbody>
			</tbody>
        </table>  
        
        
 </form>
   