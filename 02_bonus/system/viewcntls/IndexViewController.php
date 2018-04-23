<?php
	namespace ViewControllers;
	use \Core\BaseViewController;

	final class IndexViewController extends BaseViewController {
		public function __construct() {
			parent::__construct();
		}

		public function genPageInit() {
			return $this->genPage(array(
				'head' => null,
				'footer' => array(),
				'content' => array(
					'template' => 'views::welcome',
					'data' => array()
				)
			));
		}
	}
?>
