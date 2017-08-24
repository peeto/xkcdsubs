<?php

abstract class PageTranslator
{

	const INPUTFIELDNAME = 'u';

	public function __construct()
	{
		self::go();
	}

	abstract protected function displayHome();
	
	abstract protected function getDictionary();
	
	protected function getInput()
	{
		if (!isset($_REQUEST[self::INPUTFIELDNAME]))
			return false;

		$url = $_REQUEST[self::INPUTFIELDNAME];

		if ($url=='')
			return false;

		return $url;
	}

	protected function getPage( $url )
	{
		return @file_get_contents( $url );
	}

	protected function translateContent( $content )
	{
		$dict = $this->getDictionary();
		$search = array_keys( $dict );
		$replace = array_values( $dict );

		$new = str_ireplace( $search, $replace, $content );

		return $new;
	}
	
	public function go()
	{
		$url = self::getInput();

		if ($url===false)
		{
			$this->displayHome();
		}
		else
		{
			$content = self::getPage( $url );

			if ($content===false)
			{
				// @todo Display an error?
				$this->displayHome();
			}
			else
			{
				echo self::translateContent( $content );
			}
		}
	}

}

