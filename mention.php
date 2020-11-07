<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    
    	public function q_view_content($q_view)
	{
		$content = isset($q_view['content']) ? $q_view['content'] : '';

		$this->output('<div class="qa-q-view-content qa-post-content">');
		
	//	$this->output_raw($content);
		$mentionedcontent = preg_replace("/@([A-Za-z0-9_])/", " <a href=\"/user/$1\">@$1</a>", $content);
		if (strlen($content))
			echo $mentionedcontent;
		
		$this->output('</div>');
	}


	public function a_item_content($a_item)
	{
		if (!isset($a_item['content'])) {
			$a_item['content'] = '';
		}

		$this->output('<div class="qa-a-item-content qa-post-content">');
//		$this->output_raw($a_item['content']);
        $acontent = preg_replace("/@([A-Za-z0-9_])/", " <a href=\"/user/$1\">@$1</a>", $a_item['content']);
		if (strlen($acontent))
			echo $acontent;
		$this->output('</div>');
	}	
	public function c_item_content($c_item)
	{
		if (!isset($c_item['content'])) {
			$c_item['content'] = '';
		}

		$this->output('<div class="qa-c-item-content qa-post-content">');
	//	$this->output_raw($c_item['content']);
	    $ccontent = preg_replace("/@([A-Za-z0-9_])/", " <a href=\"/user/$1\">@$1</a>", $c_item['content']);
		if (strlen($ccontent))
			echo $ccontent;
		$this->output('</div>');
	}

    
}
