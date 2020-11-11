<?php
    class crud {
    
        //private database oject 
        private $db;

        // constructor to initialize private vaiable to the database connection 

        function __construct($conn){
            $this->db= $conn; 
        }
            // function to incert a new record into the attendee database 

       public  function insert($fname, $lname,$dob, $email, $contact, $speciality){
           try{
               // define sql statement to be executed 
            $sql = "INSERT INTO attendee VALUES(:fname,:lname,:dob,:email,:contact,:speciality)";

            //prepare the Sql statement for execution 
            $statement = $this->db->prepare($sql);

            //bind all placeholder to the actual values 

            $statement->bindparam(':fname',$fname);
            $statement->bindparam('lname,', $lname);
            $statement->bindparam(':dob',$dob);
            $statement->bindparam(':email', $email);
            $statement->bindparam(':contact', $contact);
            $statement->bindparam(':speciality', $speciality);

            // esecute statement 
            $statement -> execute();

            return true;

           } catch (PDOException $e){

            echo $e ->getMessage();
            return false;

           }
            
        }
        
    }

?>