<?php

class News_Menu_Create_AddSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.twomenu.create.add'));
		$this->setAttribute('_title', 'Menu.Create.Add');
	}
}

?>