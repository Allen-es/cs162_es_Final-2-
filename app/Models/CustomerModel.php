<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    //attributes
    protected $table = 'customer';
    protected $db;
    protected $allowedFields = ['customer_id', 'first_name', 'last_name', 'email', 'phone', 'dob', 'shipment_address'];


    //constructor
    public function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function insert_customer($customer = array()){

    }

    public function delete_customer($id = false){

    }

    public function update_customer($customer = array()){

    }

    public function get_customer($customer_id = false){
        if(!$customer_id){
            //if $id is false get all customers
            $sql = "SELECT * FROM " . $this->table;
            $query = $this->db->query($sql);
            return $query->getResult();
        }
        else{
            //otherwise get customer by id
            $sql = "SELECT * FROM " . $this->table . " WHERE customer_id='".$customer_id."'";
            $query = $this->db->query($sql);
            //SELECT * FROM customer WHERE id='1'
            return $query->getResult();
        }
    }

    public function get_columnNames(){
        //information we know
        /*
        -names of the columns
        -number of columns
        -we know how to write SQL select

        */
        //information we don't know
        /*
        -get the names of all table columns
        */
        return $this->db->getFieldNames($this->table);
    }
}