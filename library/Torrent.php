<?php

/**
 * @author Wuild
 */
class Torrent {

    private $id;
    private $_vars = array();

    /**
     * Construct the torrent class to store information on the selected torrent id.
     * @param string $id 
     */
    function __construct($id = "") {
        if ($id != "") {
            $this->id = $id;

            $db = new DB("torrents");
            $db->select("torrent_id = '" . $this->id . "'");
            $db->nextRecord();

            foreach ($db->record as $name => $value)
                $this->__set($name, $value);
        }
    }

    /**
     * Store a variable in the class
     * @param string $name
     * @param string $value 
     */
    function __set($name, $value) {
        $this->_vars[str_replace("torrent_", "", $name)] = $value;
    }

    /**
     * Get a stored variable
     * @param type $name
     * @return type 
     */
    function __get($name) {
        return $this->_vars[$name];
    }

    /**
     * Get the category icon of the selected torrent.
     * @return type 
     */
    function category() {
        $db = new DB("categories");
        $db->select("category_id = '" . $this->_vars['category'] . "'");
        $db->nextRecord();
        return $db->category_icon;
    }

}

?>
