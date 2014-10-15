<?php

spl_autoload_register(function($class) {
	if (0 === strpos($class, 'Qafoo')) {
        include strtr($class, '\\', '/') . '.php';
	}
});
