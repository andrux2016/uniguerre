<?php

class ChatDAO extends DataAccessModel {
    
 
    public static function add($obj) {
        (new SQLInsertChat($obj))->write();
    }

    public static function delete($id) {
        
    }

    public static function selectAll() {
        return (new SQLSelectChat())->read();
    }

    public static function selectById($id) {
        
    }

    public static function update($obj, $id) {
        
    }

}