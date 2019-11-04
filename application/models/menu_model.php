<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {

		function __construct(){
            parent::__construct();
        }
        
		function getAllShops($sid){
			$this->db->select('shop_id, shop_name_th, shop_name_en');
			//$result = $this->db->get('shop');
			$result = $this->db->get_where('shop', array('shop_id' => $sid));
			return $result;
		}

 		// function _queryUsers(){
		// 	$query = $this->db->query("select * from users where id='3'");
 		// 	return $query;
         // }	
         
		function shop_insert($data){
			$this->db->insert('shop',$data);
        }
        
		// function _delete_user_id($id){
		// 	$this->db->where('id', $id);
		// 	$this->db->delete('users');  
		// }	
		
		function cafe_insert($data){
			$this->db->insert('menu',$data);
		}
		
		function getmenu(){
			$result['data'] = $this->db->get('menu');
			return  $result;
		}

		function delete($sid){
			$this->db->where('menu_id',$sid);
			$this->db->delete('menu');
		}

		function menu_edit($date,$id){
			$this->db->where('menu_id',$id);
			$this->db->update('menu',$data);
		}

		function getid($id){
			$this->db->where('menu_id',$id);
			$result['data'] = $this->db->get('menu');
			return $result;
		}

		function menu_update($data,$cid){
			$this->db->where('menu_id',$cid);
			$this->db->update('menu',$data);
		}


}
