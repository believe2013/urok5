<?php


class View /*implements Iterator*/
{

	/*public function current()
	{

	}

	public function next()
	{
		
	}

	public function key()
	{
		
	}

	public function valid()
	{
		
	}

	public function rewind()
	{
		
	}*/

	const PATH = __DIR__.'/../views/';
	protected $data = [];



	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}

	public function __get($k)
	{
		return $this->data[$k];
	}

	public function render($template)
	{
		foreach($this->data as $key => $val):
			$$key = $val;
		endforeach;
		ob_start();
		include self::PATH . $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}

	public function display($template)
	{
		echo $this->render($template);
	}
}