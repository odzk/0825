<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<?php


$inputHeight = $_POST['height'];
$inputWidth = $_POST['width'];
$choice = $_POST['submit'];


if ($choice == "Calculate Area") {

//parent class / main class
class ObjectHeight {
	private $height;
	
	public function setHeight($height) {
		$this->height = $height;
	}
	
	public function getHeight() {
		return $this->height;
	}
}


//child class
class ObjectWidth extends ObjectHeight {
	private $width;
	
	public function setWidth($width) {
		$this->width = $width;
	}
	
	public function getWidth() {
		return $this->width;
	}
}

//another child class converting m to cm (2nd layer)

class convertMM extends ObjectWidth {

	private $convertMM;

	public function setDataMM($convertMM) {
		$this->convertMM = $convertMM;
	}

	public function getDataMM() {
		return $this->convertMM;
	}

}

//another child class converting mm to km (3rd layer)

class convertKM extends convertMM {

	private $convertKM;

	public function setDataKM($convertKM) {
		$this->convertKM = $convertKM;
	}

	public function getDataKM() {
		return $this->convertKM;
	}

}

//another child class converting km to miles (4th layer)

class convertMiles extends convertKM {

	private $convertMiles;

	public function setDataMiles($convertMiles) {
		$this->convertMiles = $convertMiles;
	}

	public function getDataMiles() {
		return $this->convertMiles;
	}

}

//another child class converting km to miles (5th layer)

class convertYards extends convertMiles {

	private $convertYards;

	public function setDataYards($convertYards) {
		$this->convertYards = $convertYards;
	}

	public function getDataYards() {
		return $this->convertYards;
	}

}

//object of the child class
$obj = new convertYards();

//set property
$obj->setHeight($inputHeight);
$obj->setWidth($inputWidth);


$computeArea = $obj->getHeight() * $obj->getWidth();


//set another property for child inheretance (mm)

$obj->setDataMM($computeArea);
$computeAreaMM = $obj->getDataMM() * 1000;

//set another property for child inheretance (km)

$obj->setDataKM($computeAreaMM);
$computeAreaKM = $obj->getDataKM() / 1000000;

//set another property for child inheretance (miles)

$obj->setDataMiles($computeAreaKM);
$computeAreaMiles = $obj->getDataMiles() * 0.621371;

//set another property for child inheretance (yards)

$obj->setDataYards($computeAreaMiles);
$computeAreaYards = $obj->getDataYards() * 1760;

?>


<div class="row mt-5">
<div class="col-sm-6">
    <div class="card">
    <div class="card-header text-center">Results Using Inheretance Method</div>
      <div class="card-body">

	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeArea ?></span> in meters</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaMM ?></span> in millimeters</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaKM ?></span> in kilometers</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaMiles ?></span> in miles</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaYards ?></span> in yards</h3>
</div>
</div>
</div>
</div>

<?php 
} else {

class mainObject {
  public function calcArea($valArea) {

  }
}

class AreaM extends mainObject {
  private $height;
  private $width;
  private $valArea;


  public function __construct($height, $width)
  {
    $this->area = $height * $width;
  }
  
  // calculate the area in M
  public function calcArea($valArea)
  {
    return $this->area * $valArea;
  }
}

class AreaMM extends mainObject {
  private $height;
  private $width;


  public function __construct($height, $width)
  {
    $this->area = $height * $width;
  }
  
  // calculate the area in MM
  public function calcArea($valArea)
  {
    return $this->area * $valArea;
  }
}

class AreaKM extends mainObject {
  private $height;
  private $width;


  public function __construct($height, $width)
  {
    $this->area = $height * $width;
  }
  
  // calculate the area in KM
  public function calcArea($valArea)
  {
    return $this->area * $valArea;
  }
}

//using one object as intructed by Sir Christian
$areaM = new AreaM($inputHeight, $inputWidth);


//these are just variables to display the results, we can use to display the results directly in the echo paramaters but for presentation purposes, this is cleaner, example echo $areaM->calcArea(1)
$computeAreaM = $areaM->calcArea(1);
$computeAreaMM = $areaM->calcArea(1000);
$computeAreaKM = $areaM->calcArea(0.001);

?>

<div class="col-sm-6">
<div class="card">
<div class="card-header text-center">Results Using Polymorphism</div>

      <div class="card-body">

	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaM; ?></span> in meters</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaMM; ?></span> in millimeters</h3>
	<h3 style="text-align: center;">The Area is: <span style="color:red;"><?php echo $computeAreaKM ?></span> in kilometers</h3>

</div>
</div>
</div>
 
<?php }  ?>


