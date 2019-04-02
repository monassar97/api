<?php
    
    class Post{
     private $conn;
     //private $table='parents';
        
        
     /*public $id;
     public $name;
     public $password;
     public $address;
     public $phone;
     public $student_id;
     public $national_id;
     public $created_at;
     public $updated_at;
      */
    
     public function __construct($db){
        $this->conn=$db;
    }
    //read all parents
     public function readParent(){
        $query='SELECT
        id ,
        name,
        password,
        address,
        phone,
        student_id,
        national_id,
        created_at,
        updated_at
        FROM school.parents';
        //prepare statment
        $stmt=$this->conn->prepare($query);
        
        //Ececute query
        $stmt->execute();
        
        return $stmt;
    }
        
        
        //read single parent
        public function readSingleParent(){
            $query='SELECT
            id ,
            name,
            password,
            address,
            phone,
            student_id,
            national_id,
            created_at,
            updated_at
            FROM school.parents
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->name=$row['name'];
            $this->password=$row['password'];
            $this->address=$row['address'];
            $this->phone=$row['phone'];
            $this->student_id=$row['student_id'];
            $this->national_id=$row['national_id'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        //read student
        
        public function readStudent(){
            $query='SELECT
            id ,
            name,
            gender,
            age,
            class_id,
            created_at,
            updated_at
            FROM school.students';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        //read single student
        public function readSingleStudent(){
            $query='SELECT
            id ,
            name,
            gender,
            age,
            class_id,
            created_at,
            updated_at
            FROM school.students
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->name=$row['name'];
            $this->gender=$row['gender'];
            $this->age=$row['age'];
            $this->class_id=$row['class_id'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        
        public function readTeacher(){
            $query='SELECT
            id ,
            name,
            username,
            password,
            gender,
            phone,
            email,
            school_id,
            created_at,
            updated_at
            FROM school.teacher';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        //read single teacher
        public function readSingleTeacher(){
            $query='SELECT
            id ,
            name,
            username,
            password,
            gender,
            phone,
            email,
            school_id,
            created_at,
            updated_at
            FROM school.teacher
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->name=$row['name'];
            $this->username=$row['username'];
            $this->password=$row['password'];
            $this->gender=$row['gender'];
            $this->phone=$row['phone'];
            $this->email=$row['email'];
            $this->school_id=$row['school_id'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        //rad schools
        public function readSchools(){
            $query='SELECT
            id ,
            name,
            address,
            phone,
            national_id,
            created_at,
            updated_at
            FROM school.schools';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        //read single school
        public function readSingleSchool(){
            $query='SELECT
            id ,
            name,
            address,
            phone,
            national_id,
            created_at,
            updated_at
            FROM school.schools
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->name=$row['name'];
            $this->address=$row['address'];
            $this->phone=$row['phone'];
            $this->national_id=$row['national_id'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        //read notifications
        public function readNotifications(){
            $query='SELECT
            id,
            teacher_id,
            student_id,
            parent_id,
            title,
            content,
            opened,
            general,
            created_at,
            updated_at
            FROM school.notification';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        //read single school
        public function readSingleNotification(){
            $query='SELECT
            id,
            teacher_id,
            student_id,
            parent_id,
            title,
            content,
            opened,
            general,
            created_at,
            updated_at
            FROM school.notification
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->teacher_id=$row['teacher_id'];
            $this->student_id=$row['student_id'];
            $this->parent_id=$row['parent_id'];
            $this->title=$row['title'];
            $this->content=$row['content'];
            $this->opened=$row['opened'];
            $this->general=$row['general'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        
        public function readMigrations(){
            $query='SELECT
            id ,
            migration,
            batch
            FROM school.migrations';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        //read classes
        public function readClasses(){
            $query='SELECT
            id,
            topic,
            school_id,
            teacher_id,
            created_at,
            updated_at
            FROM school.class';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        public function readSingleClass(){
            $query='SELECT
            id,
            topic,
            school_id,
            teacher_id,
            created_at,
            updated_at
            FROM school.class
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->topic=$row['topic'];
            $this->school_id=$row['school_id'];
            $this->teacher_id=$row['teacher_id'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
        
        //read admins
        public function readAdmin(){
            $query='SELECT
            id,
            username,
            password,
            privileges,
            created_at,
            updated_at
            FROM school.admin';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            //Ececute query
            $stmt->execute();
            
            return $stmt;
        }
        
        public function readSingleAdmin(){
            $query='SELECT
            id,
            username,
            password,
            privileges,
            created_at,
            updated_at
            FROM school.admin
            where id=?
            Limit 0,1';
            //prepare statment
            $stmt=$this->conn->prepare($query);
            
            
            //Bind ID
            $stmt->bindparam(1,$this->id);
            //Ececute query
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            //set properties
            $this->id=$row['id'];
            $this->username=$row['username'];
            $this->password=$row['password'];
            $this->privileges=$row['privileges'];
            $this->created_at=$row['created_at'];
            $this->updated_at=$row['updated_at'];
            
            //return $stmt;
        }
        
    
    }
    
    ?>
