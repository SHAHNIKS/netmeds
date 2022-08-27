<?php
/*
 thIS CONTROLLER performs cart related transaction
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin');
        if(!$this->admin->logged_id())
		{
            redirect("login");			

		}
        //load model
        $this->load->model('Product_model', 'basket');
        $this->load->library('pagination');
        $this->load->library('cart');
        $this->load->helper('text');
    }

    public function index() {
        $data = array();
        $data['page'] = 'shopping-cart';
        $data['title'] = 'My Cart | Netmeds'; 
        $data['breadcrumbs'] = array('Home' => site_url(), 'Cart' => '#');

        $data['productInfo'] = $this->cart->contents();
        
        
        $this->load->view('cart/index', $data);
    }

    public function single() {
        $data = array();
        $data['page'] = 'shopping-cart';
        $data['title'] = 'Shopping Cart | Netmeds'; 
        $data['breadcrumbs'] = array('Shopping Cart' => '#', 'List' => '#');
        $this->load->view('cart/single', $data);
    }

    // product add to basket    
    function add() {
        $json = array();
        if (!empty($this->input->post('productID'))) {
            $this->basket->setProductID($this->input->post('productID'));
            $qty = $this->input->post('qty');
            $productInfo = $this->basket->getProduct();
			
            $cartData = array(
                'id' => $productInfo['product_id'],
                'name' => $productInfo['name'],
                'model' => $productInfo['model'],
                'price' => $productInfo['price'],
                'slug' => $productInfo['slug'],
                'qty' => $qty,
                'image' => $productInfo['image'],
            );
            $this->cart->insert($cartData);
			
            $json['status'] = 1;
            $json['counter'] = count($this->cart->contents());
        } else {
            $json['status'] = 0;
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    // remove cart item
    function remove() {
        $json = array();
        if (!empty($this->input->post('productID'))) {
            $rowid = $this->input->post('productID');
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    // update cart item
    function update() {
        $json = array();
        if (!empty($this->input->post('productID'))) {
            $rowid = $this->input->post('productID');
            $qty = $this->input->post('qty');
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        $a = $this->cart->contents();
        //echo "<pre>"; print_r($a); exit;
        header('Content-Type: application/json');
        echo json_encode($json);
    }

        // checkout item
    function success() {
        $data = array();
        $data['metaDescription'] = 'Shopping Cart';
        $data['metaKeywords'] = 'Shopping, Cart';
        $data['title'] = "Shopping Cart - Netmeds";
        $data['breadcrumbs'] = array('Home' => site_url(), 'Success' => '#');
        $order_id = $this->input->get('order_id');
        $data['order_id'] = $order_id;
        $this->load->view('cart/success', $data);
    }

}
?>