<?php
	namespace Core;
	use League\Plates\Engine;
	/**
	 *
	 */
	class BaseViewController
	{
		protected $templates;

		protected function __construct(string $tpl_ext = 'php.tpl') {
			$this->templates = new Engine(
				$_SERVER['DOCUMENT_ROOT'] . '/templates/',
				$tpl_ext
			);
			$this->setTemplateFolder('base', '/templates/base/');
			$this->setTemplateFolder('views', '/templates/views/');
		}

		protected function setTemplateFolder(string $ref, string $path) {
			$path =  $_SERVER['DOCUMENT_ROOT'] . $path;
			$this->templates->addFolder($ref, $path, true);
		}

		protected function getHead(
			array $head_params = null,
			string $head_tpl = 'base::head_jquery'
		) {
			return $this->templates->render($head_tpl,
				$head_params === null ?
					array (
						'meta' => '',
						'title' => 'Default Page',
						'styles' => '',
						'javascript' => '',
						'links' => ''
					) :
					$head_params
			);
		}

		protected function getNavBar(
			array $nav_paramas = array(),
			string $nav_tpl = 'base::navbar'
		) {
			return $this->templates->render($nav_tpl);
		}

		protected function getFooter(
			array $footer_paramas = null,
			string $footer_tpl = 'base::footer'
		) {
			return $this->templates->render($footer_tpl, $footer_paramas);
		}

		protected function getContent(string $template, array $content_params) {
			return $this->templates->render($template, $content_params);
		}

		protected function getRenderSnippet(string $template, array $content_params) {
			return $this->templates->render($template, $content_params);
		}

		protected function genPage(array $params) {
			$head = $this->getHead($params['head']);
			$footer = $this->getFooter($params['footer']);
			// $navbar = $this->getNavBar(array());
			$content = $this->getRenderSnippet(
				$params['content']['template'],
				$params['content']['data']
			);
			$extra = null;
			if (array_key_exists('extra', $params)) {
				$extra = $this->getRenderSnippet(
					$params['extra']['template'],
					$params['extra']['data']
				);
			}
			return $this->templates->render('base::index', array(
				"head" => $head,
				// "navbar" => $navbar,
				"content" => $content,
				"extra" => $extra !== null ? $extra : '',
				"footer" => $footer,
			));
		}
	}

?>
