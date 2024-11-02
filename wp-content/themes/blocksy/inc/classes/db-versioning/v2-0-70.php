<?php

namespace Blocksy\DbVersioning;

class V2070 {
	public function migrate() {
		$cleaner = new DefaultValuesCleaner();
		// Temporarily disable this migration
		// $cleaner->clean_whole_customizer_recursively();
	}
}
