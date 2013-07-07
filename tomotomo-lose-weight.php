<?php

/**
 * Plugin Name: 体重減らすプラグイン
 * Description: Word Bench Osaka 2013/07/19
 * Author: Tomoyuki Sugita
 * Author URI: http://tomotomosnippet.blogspot.jp/
 * Version: 0.1
 */

// ログイン画面に体重入力フォームを付け足すよ
add_action('login_form', 'current_weight_field');
function current_weight_field () {
?>

	<p>
		<label for="current_weight">[デモ]現在の体重(kg)<br />
		<input type="text" name="current_weight" id="current_weight" class="input" value="" size="20" placeholder="例 : 48.2" /></label>
	</p>
<?php
	
} // End of current_weight_field
