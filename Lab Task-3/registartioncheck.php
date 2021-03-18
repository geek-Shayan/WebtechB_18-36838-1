<?php

    if (isset($_POST['submit']))
    {
        if(file_exists('data.json'))  
        {  
            $current_data = file_get_contents('data.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                    'name' => $_POST['name'],  
                    'email' => $_POST['email'],  
                    'username' => $_POST['username'],
                    'password' => $_POST['npassword'],
                    'gender' => $_POST['Gender'],
                    'dob' => $_POST['dob']
            );
            
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);
            if(file_put_contents('data.json', $final_data))  
            {  
                header('location: login.php?message=sucess');  
            }
        }   
        else  
        {  
            header('location: registrtion.php?message=not_exists');
        }

    }
    else 
    {
        header('location: registrtion.php');
    }
    
?>
