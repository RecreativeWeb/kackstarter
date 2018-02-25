<?php

namespace AppBundle\Service;

class MarkdownTransformer
{
	public function parse($str)
	{
		// fonction qui met les caracteres en capital
		return strtoupper($str);
	}
}


