<?php
require_once dirname(__FILE__) . '/../../Phpmodbus/ModbusMaster.php';
require_once dirname(__FILE__) . '/../config.php';

// Create Modbus object
$modbus = new ModbusMaster($test_host_ip, "Mismatch");

// Data to be writen
$data = array(1000, 2000, 1.250, 1.250);
$dataTypes = array("REAL", "REAL", "REAL", "REAL");

// FC23
$recData = $modbus->readWriteRegisters(0, 12288, 6, 12288, $data, $dataTypes);

// Should through an Exception

// Print status information
echo "Something wrong!";