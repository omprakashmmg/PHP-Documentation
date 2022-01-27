<?php
include __DIR__.'/connect.php';
echo "**********choice*********\n";
echo "1 for insert your data in database \n";
echo "2 for delete your data in database \n";
echo "3 for update your data in database \n";
echo "**********************************\n";
$enter=readline("enter some choice :");
switch($enter)
{
    case 1:
        $name=readline("enter your name here :");
        $email=readline("enter your email here :");
        $res="insert into record(name,email)values('$name','$email');";
        if(mysqli_query($con,$res))
        {
        echo "your value inserted";
        }else{
        echo"your value not inserted";
        }
        break;
        
    case 2:
        
       $id=readline("enter your id here :");
       $res="delete from record where id='$id';";
         if(mysqli_query($con,$res))
         {
         if(mysqli_affected_rows($con)>0)
         {
         echo "your value deleted";
         }else{
         echo"your value not deleted";
         }
         }
        else{
        echo 'Records Not Deleted '.mysqli_error($con);
        }
         break;
    case 3:
        $id=readline("enter user id :");
        $name=readline("enter user name :");
        $email=readline("enter user email :");
        $res="update record set name='{$name}',email='{$email}' where id='{$id}';";

        if(mysqli_query($con,$res))
        {
	    if(mysqli_affected_rows($con)>0)
	    {
		echo 'record updated successfully';
      	}else{
		echo 'record cannot updated successfully';
	    }
        }else{
	    echo 'record not updated error ='.mysqli_error($conn);
        }
        break;
        default:
        echo "your input wrong feild.......!";
        break;
        }

?>