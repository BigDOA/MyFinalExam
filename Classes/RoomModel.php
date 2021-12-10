<?php

require(dirname(__FILE__).'/../Settings/connection.php');

// inherit the methods from Connection
class Room extends Connection{


	function add_room( $room, $cat , $status ){
		// return true or false
		return $this->query("INSERT into rooms( room, category_id , status ) values('$room', '$cat', '$status')");
	}

	function delete_one_room($id){
		// return true or false
		return $this->query("DELETE from rooms where id = '$id'");
	}

	function update_one_room($id, $room, $cat , $status ){
		// return true or false
		return $this->query("UPDATE rooms 
							set room = '$room', category_id='$cat', status = '$status' 
							where id = '$id'");
	}
	
	function select_feature_rooms(){
		//$limit = 10;
		//$offset = Product::get_offset($limit);

		return $this->fetch("SELECT * from rooms
							inner join room_categories 
							on rooms.category_id = room_categories.cat_id
							Limit 9");
	}
	

	function select_one_room($id){
		// return associative array or false
		return $this->fetchOne("SELECT * from rooms 
								inner join room_categories 
								on room_categories.id = room.categories_id
								where room.category_id='$id'");
	
	}

	function add_category($category){
		return $this->query("INSERT INTO room_categories(name) value ('$category')");
	}



	function update_category($id, $newCat){
		return $this->query("UPDATE room_categories SET name = '$newCat' WHERE id = '$id'");
	}



	function select_all_categories(){
		return $this->fetch("SELECT * from room_categories");
	}

	// public static function get_offset($limit){
	// 	$limit = (int)$limit;
	// 	$page_num = isset($_GET['pg'])? (int)$_GET['pg'] : 1;
	// 	$page_num = $page_num <1 ? 1: $page_num;
	// 	return ($page_num -1) * $limit;

	// }

	function select_category($category){
		return $this->fetchOne("SELECT * FROM room_categories WHERE name='$category'");
	}

	function get_category_rooms($cat_id){
		return $this->fetch("SELECT * from rooms where category_id = '$cat_id'");
	}



	// function search_product($word)
    // {
    //     // return associative array or false
    //     return $this->fetch("SELECT * From rooms where product_title Like '%$word%'  or product_keywords Like '%$word%' ");
    // }
}

?>