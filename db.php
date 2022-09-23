<?php

include"env.php";

class db{

public $connection;
public $query;
public $sql;
public function __construct()
 {
$this->connection=mysqli_connect(SERVER,USER,PASS,DBNAME);

 }


public function select($table,$column){
$this->sql="SELECT $column FROM `$table`";


return $this;
}
public function where($column,$compair,$value){

    $this->sql .="WHERE `$column` $compair`$value`";
    return $this;

}
public function andwhere($column,$compair,$value){

    $this->sql .=" AND WHERE `$column` $compair`$value`";
    return $this;
}
public function orwhere($column,$compair,$value){

    $this->sql .="OR WHERE `$column` $compair`$value`";
    return $this;
}

public function GetAll(){

$this->$query=mysqli_query($this->connection,this->sql );

while($row=mysqli_fetch_assoc(this->$query)){

    $data[]=$row;
}
return $data;
}


public function GetRow()
this->$query=mysqli_query($this->connection,this->sql );

$row=mysqli_fetch_assoc(this->$query){
return $row;

}

public function insert($table,$data){

$columns="";
$values="";
    foreach($data as $key=>$value ){

     $columns.=" `$key`, ";
     $values.=" `$value`, ";
    }

     $columns=rtrim($columns,",");
     $values=rtrim($values,",");


$this->sql="INSERT INTO  `$table`( ) VALUES()";
return $this;
}


public function execute($table,$data){

    this->$query=mysqli_query($this->connection,this->sql );
    if(mysqli_affected_rows($this->connection)>0){
       return true;

    }else{

        return false;
    }

}

















 









}