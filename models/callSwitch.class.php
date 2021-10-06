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
}
?>