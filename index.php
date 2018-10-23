<?php
session_start();

require_once 'core/Factory.class.php';
$factory=new FactoryBase();
$factory->run();