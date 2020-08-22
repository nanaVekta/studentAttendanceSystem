<?php
$con = mysqli_connect('Localhost','root','');
mysqli_select_db($con,'sas');


	if(isset($_POST['send'])){
        $arr= array();

	    $index = $_POST['credential'];

        $sql = mysqli_query($con, "SELECT * FROM students WHERE index_number = '$index'");
        if($sql){
            $num = mysqli_num_rows($sql);
            if($num <= 0){
                echo 'notFound';
            }
            else{
               $query = mysqli_query($con, "UPDATE students SET attendance = attendance + 1 WHERE course = 'Research Methods'");
                if($query){
                    echo 'logged';
                }
                else{
                    echo 'updateError';
                }

            }
        }
        else{
            echo 'queryError';
        }

		//echo json_encode($arr);
	}

?>