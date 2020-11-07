<?php

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../');
		exit;
	}

	class alpha_filter {

		var $directory;
		function load_module($directory, $urltoroot)
		{
			$this->directory=$directory;
		}

		

	public function filter_handle(&$handle, $olduser)
	{
		if (!strlen($handle)) {
			return qa_lang('users/handle_empty');
		}
		$subhandle = str_replace(' ', '', $handle);
		if (strlen($subhandle) !== strlen($handle)) {
                        return 'Spaces are not allowed.' ;
                }
		

                if(!preg_match('/^[a-zA-Z0-9_]+$/', $handle)) {
                        return 'Your username is not properly formatted.';
                } 
		

		if (qa_strlen($handle) > QA_DB_MAX_HANDLE_LENGTH) {
			return qa_lang_sub('main/max_length_x', QA_DB_MAX_HANDLE_LENGTH);
		}
		// check for banned usernames (e.g. "anonymous")
		$wordspreg = qa_block_words_to_preg(qa_opt('block_bad_usernames'));
		$blocked = qa_block_words_match_all($handle, $wordspreg);
		if (!empty($blocked)) {
			return qa_lang('users/handle_blocked');
		}
	} // end of filter_handle



	} //end of class


/*
	Omit PHP closing tag to help avoid accidental output
*/
