<?php
class userModel extends Model {
    
    public function get($option = [], $no_option = []){        
        $rez = $this->getItems([], $option, $no_option);
        return $rez;
    }
    
    public function add($data = []){        
        $sql = $this->addItem($data);
        return $sql;
    }
    
    public function del($option = [], $no_option = []){        
        $sql = $this->deleteItems($option, $no_option);
		return $sql;
    }
    
    public function upd($data = [], $option = [], $no_option = []){        
        $sql = $this->updateItems($data, $option, $no_option);
		return $sql;
    }
}
?>