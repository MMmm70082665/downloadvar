<?php

class News_Call_Main_PageSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Call.Main.Page');
	}
}

?>