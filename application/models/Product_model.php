<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {
// All this varible is used while checkout or store info on order table
    private $_productID;
    private $_productName;
    private $_model;
    private $_price;
    private $_qty;
    private $_subTotal;
    private $_slug;
    private $_status;
    private $_limit;
    private $_pageNumber;
    private $_offset;
    private $_orderID;
    private $_customerID;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_phone;
    private $_comment;
    private $_total;
    private $_orderStatusID;
    private $_timeStamp;
    private $_batchData;

    public function setProductID($productID) {
        $this->_productID = $productID;
    }

    public function setProductName($productName) {
        $this->_productName = $productName;
    }

    public function setModel($model) {
        $this->_model = $model;
    }

    public function setPrice($price) {
        $this->_price = $price;
    }

    public function setQty($qty) {
        $this->_qty = $qty;
    }
    public function setSubTotal($subTotal) {
        $this->_subTotal = $subTotal;
    }
    public function setSlug($slug) {
        $this->_slug = $slug;
    }

    public function setStatus($status) {
        $this->_status = $status;
    }

    public function setLimit($limit) {
        $this->_limit = $limit;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    public function setOffset($offset) {
        $this->_offset = $offset;
    }
    public function setOrderID($orderID) {
        $this->_orderID = $orderID;
    }
    public function setCustomerID($customerID) {
        $this->_customerID = $customerID;
    }
    public function setFirstName($firstName) {
        $this->_firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->_lastName = $lastName;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setPhone($phone) {
        $this->_phone = $phone;
    }
    public function setComment($comment) {
        $this->_comment = $comment;
    }
    public function setTotal($total) {
        $this->_total = $total;
    }
    public function setOrderStatusID($orderStatusID) {
        $this->_orderStatusID = $orderStatusID;
    }
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
    public function setBatchData($batchData) {
        $this->_batchData = $batchData;
    }
    // count all product
    public function getAllProductCount() {
        $this->db->where('status', $this->_status);
        $this->db->from('product');
        return $this->db->count_all_results();
    }

    // Get all details store in "products" table in database.
    public function getProductList($search = NULL) {
        $this->db->select(array('p.product_id', 'pd.name', 'pd.slug', 'p.sku', 'p.price', 'p.model', 'pd.description', 'p.image'));
        $this->db->from('product as p');
        $this->db->join('product_description as pd', 'pd.product_id = p.product_id', 'left');
        $this->db->where('p.status', $this->_status);
        if(!empty($search)){
            $this->db->like('pd.name', $search);
        }
        $this->db->limit($this->_pageNumber, $this->_offset);
        $query = $this->db->get();
        return $query->result_array();
    }

     // get resource centre items
    public function getProduct() {
        $this->db->select(array('p.product_id', 'pd.name', 'p.sku', 'p.price', 'p.model', 'pd.slug', 'pd.description', 'p.image'));
        $this->db->from('product as p');
        $this->db->join('product_description as pd', 'pd.product_id = p.product_id', 'left');
        if(!empty($this->_productID)) {
            $this->db->where('p.product_id', $this->_productID);
        }
        if(!empty($this->_slug)) {
            $this->db->where('pd.slug', $this->_slug);
        }
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getProductImage() {
        $this->db->select(array('m.id', 'm.product_id', 'm.image'));
        $this->db->from('product_image as m');
        $this->db->join('product as p', 'm.product_id = p.product_id', 'left');
        $this->db->where('p.product_id', $this->_productID);
        $query = $this->db->get();
        return $query->result_array();
    }

}   
?>