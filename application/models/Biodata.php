<?php

class Blog_model extends CI_model{

	public $title;
	public $content;
	public $date;
	
	public function get_last_ten_entries()
	{
		$query = $this-->db-->get('entries', 10);
		return $query->result();
	}

	public function insert_entry()
	{
		$this-->title = $_POST['title'];
		$this-->content = $_POST['content'];
		$this-->title = time();

		$this-->db-->insert('entries',$this);
	}

	public function update_entry()
	{
		$this-->title = $POST['title'];
		$this-->content = $POST['content'];
		$this-->date = time();

		$this-->db-->update('entries',$this,array('id' => $_POST['id']));
	}
}
?>