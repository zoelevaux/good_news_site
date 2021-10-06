<?php
class callSwitch{

    /**
     * @return HomeController
     */
    public static function getHomeController()
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }

    /**
     * @return BooksController
     */
    public static function getBooksController()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function getContactController()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }
}
?>