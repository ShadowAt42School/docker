<?php
	namespace Core;
	use League\Plates\Engine;
	/**
	 *
	 */
	final class BaseController
	{
		protected $templates;

		protected function __construct(string $tpl_ext = 'html.tpl') {
			$this->templates = new Engine(
				$_SERVER['DOCUMENT_ROOT'] . 'templates/',
				$tpl_ext
			);
		}

		protected function setTemplateFolder(string $ref, string $path) {
			$path =  $_SERVER['DOCUMENT_ROOT'] . 'templates/' . $path;
			$this->templates->addFolder($ref, $path, true);
		}

	}

?>