<?php 

    $connection = new MongoClient(); 

    try{

        //Select Database. in this case it's RegistrationData.
        $db = $connection->Registrationdb;
        $collections = $db->listCollections();

        if(isset($_POST['Submit'])) {    
            $data = array (
                        'fname' => $_POST['fname'],
                        'lname' => $_POST['lname'],
                        'email' => $_POST['email'],
                        'phone' => $_POST['phone'],
                        'pswd' => $_POST['pswd'],
                        'cpswd' => $_POST['cpswd']
                    );
            $log = array(
                'user' => $_POST['email'],
                'pass' => $_POST['pswd'],
                'ldate' => date('Y-m-d H:i:s');
            );
                    $errorMessage = '';
                    foreach ($data as $key => $value) {
                        if (empty($value)) {
                            $errorMessage .= $key . ' field is empty<br />';
                        }
                    }
                    
                    if ($errorMessage) {
                        // print error message & link to the previous page
                        echo '<span style="color:red">'.$errorMessage.'</span>';
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
                    } else {

                        //check whether collection is exist in the database.
                        if(!$collections->in_array('usercol') && !$collections->in_array('logincol')){
                            $usercol = $db->createCollection('usercol');
                            $logincol = $db->createCollection('logincol');
                        }else{
                            $usercol = $db->usercol;
                            $logincol = $db->logincol;
                        }
                        $usercol->insert($data);
                        $logincol->insert($log);
                    }
        }
    }
    catch(Exception $e){
        echo"Ecieption :".$e;
    }

?>