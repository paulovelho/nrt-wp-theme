<?php

abstract class Singleton {
	protected static array|null $instance = [];

	final private function __construct(){}
	final protected function __clone(){}
	final public function __wakeup(){}

	public static function Instance(): static | Singleton {
		$classname = get_called_class();
		if(!array_key_exists($classname, static::$instance) || static::$instance[$classname] === null) {
				static::$instance[$classname] = new static;
				if(method_exists(static::$instance[$classname], "Initialize")) {
					static::$instance[$classname]->Initialize();
				}
		}
		return static::$instance[$classname];
	}

	public static function MockClass($mocker): static | Singleton {
		$classname = get_called_class();
		static::$instance[$classname] = $mocker;
		return $mocker;
	}

	public function SetInstance($inst) {
		$this->instance = $inst;
		return $this;
	}
}
