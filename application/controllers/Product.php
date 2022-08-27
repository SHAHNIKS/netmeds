<?php
/*
 Fetches Products details
 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

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
    // list product
    public function index() {
        $data = array();
        $data['page'] = 'product-list';
        $data['title'] = 'Product | Netmeds'; 
        $data['breadcrumbs'] = array('Home' => '#');
       
        $config['total_rows'] = $this->basket->getAllProductCount();
        $page_number = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'cart/index/';
        if (empty($page_number))
            $page_number = 1;
        $offset = ($page_number - 1) * $this->pagination->per_page;
        $this->basket->setPageNumber($this->pagination->per_page);
        $this->basket->setOffset($offset);
        $this->pagination->cur_page = $offset;
        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();

        $this->basket->setStatus(1);
        $search = '';
        if(isset($_GET['search'])){
            $search = $_GET['search'];
        }
        $data['products'] = $this->basket->getProductList($search);
        $this->load->view('product/index', $data);
    }

    // quickView
    public function quickView() {
        $json = array();
        $productID = $this->input->post('product_id');
        $this->basket->setProductID($productID);
        $json['productInfo'] = $this->basket->getProduct();
        $this->output->set_header('Content-Type: application/json');
        $this->load->view('product/render/view', $json);
    }

}
?>