<?php
/**
 * @package  RssFeed
 */

class AlecadddPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}