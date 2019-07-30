<<<<<<< HEAD
<?php

class mailbox_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

    public function getInbox(){
		$this->db->query('SELECT * FROM inbox');
		return $this->db->resultSet();
	}

	public function getSent(){
		$this->db->query('SELECT * FROM sentitems');
		return $this->db->resultSet();
	}

	public function time_elapsed_string($datetime, $full = false) {
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);
	
		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;
	
		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}
	
		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}

=======
<?php

class mailbox_model{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

    public function getInbox(){
		$this->db->query('SELECT * FROM inbox');
		return $this->db->resultSet();
	}

	public function getSent(){
		$this->db->query('SELECT * FROM sentitems');
		return $this->db->resultSet();
	}

	public function time_elapsed_string($datetime, $full = false) {
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);
	
		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;
	
		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}
	
		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}