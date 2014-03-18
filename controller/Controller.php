<?php
include_once("model/Model.php");

class Controller {

   public $model;

	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function sortN()
	{

		if (!isset($_POST['form']))
		{

            $b = array_values($_POST);

            $start1 = microtime(true);
            $mem_start1 = memory_get_usage();
	         $this->model->bubble_sort($b);

            $start2 = microtime(true);
            $mem_start2 = memory_get_usage();
            $c = array_values($_POST);
            $this->model->insertion_sort($c);

            $start3 = microtime(true);
            $mem_start3 = memory_get_usage();

            $a = array_values($_POST);
            $this->model->ShellSort($a);
            $start4 = microtime(true);
            $mem_start4 = memory_get_usage();

            $e = array_values($_POST);
            $this->model->quicksort($e);

			include 'view/view.php';

		}
		else
		{
			print_r('error');
		}
	}
}

?>