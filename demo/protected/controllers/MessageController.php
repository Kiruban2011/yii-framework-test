<?php
class MessageController extends Controller
{
    // public $theTime = "rr";// = OK
    protected $theTime;// = OK
    // private $theTime = "rr";// = KO

//    public function __construct()
//    {
//        parent::__construct();
//        $theTime = date("D M j G:i:s T Y");
//    }

    public function actionHelloWorld()
    {
        $this->render('helloWorld');
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionGoodBye()
    {
        $this->render('goodbye');
    }

    public function actionHello()
    {
        $this->render('hello');
    }
}