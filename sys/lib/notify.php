<?php
class notify {

    public static function render() {
        if (!isset($_SESSION['messages'])) {
            return null;
        }
        
        $messages  = "<div class='".$_SESSION['messages']['type']. " notice'>";
        $messages .= $_SESSION['messages']['message'];
        $messages .= "<a class='close' href='#' >close</a>";
        $messages .= "</div>";
        
        unset($_SESSION['messages']);
        return $messages;
    }

    public static function add($message, $type="message") {
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        }
        $_SESSION['messages']['message'] = $message;
        $_SESSION['messages']['type'] = $type;
    }

}