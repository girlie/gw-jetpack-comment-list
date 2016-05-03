<?php
/*
Name: Jetpack Comment List
Author: GirlieWorks, LLC
Description: Use WordPress Comment List for Jetpack Compatibility
Version: 1.2
Class: gwthesis_jetpack_comment_list
*/

class gwthesis_jetpack_comment_list extends thesis_box {
	public function translate() {
		$this->title = __('Jetpack Comment List', $this->_class);
	}
	
	public function html() {
		echo '<ul class="comment_list">';
		wp_list_comments();
		echo '</ul>';
	 }
}