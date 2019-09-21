<?php 

$flag = FALSE;
$connection = new MongoClient(); 

try{

    $db = $connection->Registrationdb;

    if(isset($_POST['Submit'])) {    
        $logindet = array (
                    'user' => $_POST['user'],
                    'pass' => $_POST['pass']
                );
        
        $cursor = $db->logincol->find();
        foreach($cursor as $id => $field){
            if($logindet['user']==$id['uname'] && $logindet['pass']==$value[1]){
                $flag=TRUE;
                break;
            }
        }
        
        if($flag){

            $logdata = $db->logincol->find($logindet['user'] => $logindet['user']);
            $udata = $db->usercol->find('email'=>$logindet['user']);
            
            echo"<h2>Welcome".$logindet['user']."!</h2>";
            echo"<table border=1>";
            echo"<tr>";
            echo"<th>First Name</th>";
            echo"<td>".$udata['fname']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>Last Name</th>";
            echo"<td>".$udata['lname']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>E-mail</th>";
            echo"<td>".$udata['email']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>Contact</th>";
            echo"<td>".$udata['phone']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>Last Login Date</th>";
            echo"<td>".$logdata['ldate']."</td>";
            echo"</tr>";
            echo"</table>";
        }
                
    }
        
    }catch(Exception $e){
        echo"Exception".$e;
    }
?>