<?php

class News_Call_Admin_CreateSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Call.Admin.Create');
	}
}

?>