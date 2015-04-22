
<?php
class serverload extends plugin{
	
	public function onPageLoad(){
		if (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
			GLOBAL $D;
			$load = sys_getloadavg();		
			if ($load[0] >80) {			
				$D->page_title = "Server too busy. Please try again later.";
				$tpl = new template(array(),false);				
				$tpl->layout->useBlock('serverload','serverload');
				$tpl->layout->block->save('main_content');
				$html = $tpl->display(true);
				echo $html;
				exit;
			}	
		}	
	}

}
