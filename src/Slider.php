<?php

namespace BITM\SEIP12;

use BITM\SEIP12\Config;

class registrations{

    public $id = null;
    public $name = null;
    public $email = null;
    public $address = null;
    public $pasword = null;

    private $data = null;

    private $conn = null;


    public function __construct(){

        if(Config::$driver == 'mysql'){
            $this->connectdb();
        }elseif(Config::$driver == 'json'){
            $this->connectjson();
        }      

    }


    public function index(){

        return $this->data;
    }

    public function index2(){
        // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
        $stmt = $this->conn->prepare('SELECT * FROM registration');
        $stmt->execute();
        // Fetch the records so we can display them in our template.
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "\BITM\SEIP12\Slider");
        $registration = $stmt->fetchAll();
        return $this->data = $registration;
    }

    public function create(){
        
    }

    public function store($slider){
        
        $slider = $this->prepare($slider);
        $this->data[] = (object) (array) $slider; // data is a slider object
        return $this->insert();
    }

    public function store2($registrations){
            
            // prepare the sql; INSERT
            $stmt = $this->conn->prepare('INSERT INTO `registration`  (``, `name`, `email`, `address`, `password`) 
            VALUES ( :Name, :email, :address,  :created_by, :updated_by)');
            
            
            $stmt->bindParam(':title',$registrations->name, \PDO::PARAM_STR);
            $stmt->bindParam(':path', $registrations->email, \PDO::PARAM_STR);
            $stmt->bindParam(':alt', $registrations->address, \PDO::PARAM_STR);
            $stmt->bindParam(':caption', $registrations->pasword, \PDO::PARAM_STR);
            

            // insert the data to database : Execute

            try{
                $stmt->execute();
                return true;
            }catch(\Exception $e){
                echo $e->getMessage();
                return false;
            }
    }


    public function show($id){

        return $this->find($id);
    }

    public function show2($id){

        $stmt = $this->conn->prepare('SELECT * FROM sliders WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "\BITM\SEIP12\Slider");
        return $slider = $stmt->fetch();
       
    }

    public function edit($id = null){
        return $this->find($id);
    }

    public function update($slider){

            $slider = $this->prepare($slider);

            foreach($this->data as $key=>$aslide){
                if($aslide->id == $slider->id)
                break;
            }

            $this->data[$key] =  $slider;
            return $this->insert();
    }

    public function destroy($id = null){ //completely removed
        if(empty($id)) {
            return;
        }

        foreach($this->data as $key=>$slide){
            if($slide->id == $id){
                break;
            }
        }
        // dd($key); to be deleted

        /**
         * option 1
        * unset($slides[$key]);
        *  
        * */ 
        unset($this->data[$key]);
        //reindexing the array
        $this->data = array_values($this->data);
     


        /**
         * option 2
        * array_splice($slides, $key, 1)
        *  
        * */ 
        //array_splice($slides, $key, 1); // it reindexes
        //$data_slides = json_encode($slides);

        return $this->insert();

    }

    public function inactivate($uuid = null){ //completely removed
        if(empty($uuid)) {
            return;
        }

        $sql = "UPDATE `sliders` SET `activated_at` = CURRENT_TIMESTAMP, `is_active` = '0' WHERE `sliders`.`uuid` = :uuid";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':uuid', $uuid, \PDO::PARAM_STR);
        $stmt->execute();
        return true;
    }


    public function trash(){
        
    }

    public function delete(){ //soft delete
        
    }


    public function pdf(){
        
    }


    public function xl(){
        
    }


    public function word(){
        
    }

    public function last_highest_id(){

        $curentUniqueId = null;

        if(count($this->data) > 0){
            // finding unique ids
            $ids = [];
            foreach($this->data as $aslide){
                $ids[] = $aslide->id;
            }
            sort($ids);
            $lastIndex = count($ids)-1;
            $highestId = $ids[$lastIndex];

            $curentUniqueId = $highestId+1;
        }else{
            $curentUniqueId = 1;
        }

        return $curentUniqueId;
    }

    private function prepare($slider){

       if(is_null($slider->id) || empty($slider->id)){
            $slider->id = $this->last_highest_id();
       }
      
       if(is_null($slider->uuid) || empty($slider->uuid)){
        $slider->uuid = uniqid();
       }

        return $slider;
    }


    private function insert(){

        $datafile = Config::datasource()."slideritems.json";
        if(file_exists($datafile)){
            file_put_contents($datafile,json_encode($this->data));
            return true;
        }else{
            echo "File not found";
            return false;
        }
    }

    public function find($id=null){
        if(is_null($id) || empty($id)){
            return false;
        }
        $slide = null;
        foreach($this->data as $aslide){
            if($aslide->id == $id){
                $slide = $aslide;
                break;
            }
        }
        return $slide;
    }

    public function findAll(){

    }



    private function connectdb(){
            
            try {
                
                    $this->conn = new \PDO('mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8', Config::DB_USER, Config::DB_PASSWORD);
            } catch (\PDOException $e) {
                // If there is an error with the connection, stop the script and display the error.
                echo $e->getMessage();
                //echo 'Failed to connect to database!';
            }
    }

    private function connectjson(){
        $dataSlides = file_get_contents(Config::datasource().'slideritems.json');
        $this->data = json_decode($dataSlides);
    }

}

