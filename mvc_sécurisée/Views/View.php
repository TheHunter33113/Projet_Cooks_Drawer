<?php
class View
{
	private $_file;
	private $_t;

    public function __construct($action)
    {
		$this->_file_file = 'views.View'.$action.'.php';
	}
    public function generate($data)
    {
		$nomObj= $this->generateFile($this->_file, $data);
        $view = $this->generateFile('views/template.php', array('t' => $this->_t ,
        'nomObj' => $nomObj));
		echo $view;
	}
    private function generateFile($file, $data)
    {
        if(file_exists($file))
        {
			extract($data);
			ob_start();
			require $file;
			return ob_get_clean();
		}
	}
}