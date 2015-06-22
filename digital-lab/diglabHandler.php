<?php 
	include_once(dirname( __FILE__ )."/../util-lib/excel-util/PHPEXCEL_includes.php");

	class DiglabHandler {
		
		private $file;

		function __construct(){

		}

		function getFile(){
			return $this->file;
		}

		function setFile($file){
			$realPath = realpath($file);
			$this->file = $realPath;
		}

		function getDataArray(){
			return AbstractPHPExcel::getArrayDataFromExcel($this->getFile(), true);
		}

		function exportXml($columns){

		}
	}

	$djHandler = new DiglabHandler();
	$djHandler->setFile("GW_books_info.xlsx");
	print_r($djHandler->getDataArray());


