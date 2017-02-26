<?php 

class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=eshopday24;charset=utf8', 'root', ''); 
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//remove for production!!!!
    }

    public function insertproduct($name, $price, $size, $color)
    {
        $stmt = $this->db->prepare('INSERT INTO products (name,price,size,color) VALUES (?,?,?,?)');// their are the names of the column from the database. This means please PHP insert the table 'products'with  those colums in those place holders (?,?,?,?)
        $stmt->execute([$name, $price, $size, $color]);
        return $this->db->lastInsertId();
    }

    public function getproducts()
    {
        $stmt = $this->db->prepare('SELECT id,name,price,size,color FROM products');// prepare the data available in our database from the table products
        $stmt->execute(); // make our database products extracted and available in php
        return $stmt->fetchAll();// return the resul with all the data of the array instead of just true/false
    }

    public function getproduct($id)
    {
        $stmt = $this->db->prepare('SELECT id,name,price,size,color FROM products WHERE id = ?');// never put a variable into your queries
        $stmt->execute([$id]); // make our database products extracted and available in php
        return $stmt->fetch();// return the resul with all the data of the array instead of just true/false but just for one product 
    }

    public function insertorder($userid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders (user_id, created) VALUES (?, NOW())');// their are the names of the column from the database. This means please PHP insert the table 'products'with  those colums in those place holders (?,?,?,?)
        $stmt->execute([$userid]);
        return $this->db->lastInsertId();
    }

    public function insertproducttoorder($productid, $orderid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES (?, ?)');// their are the names of the column from the database. This means please PHP insert the table 'products'with  those colums in those place holders (?,?,?,?)
        $stmt->execute([$productid, $orderid]);
        return $this->db->lastInsertId();
    }

    public function insertuser($name, $email, $password)
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
        return $this->db->lastInsertId();
    }

    public function getuser($id)
    {
        $stmt = $this->db->prepare('SELECT id, name, email, password FROM users WHERE id = ?');// never put a variable into your queries
        $stmt->execute([$id]); // make our database products extracted and available in php
        return $stmt->fetch();// return the resul with all the data of the array instead of just true/false but just for one product 
    }
}
    

