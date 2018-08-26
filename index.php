<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


<form method="post" action="compute.php">
<div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
<div class="form-group row">
      <label class="col-sm-5 col-form-label col-form-label-sm" for="height">Enter Height of the Object (in m):</label>
      <div class="col-sm-7">
      <input class="form-control form-control-sm" type="text" name="height" id="height">
	</div>
</div>

<div class="form-group row">
      <label class="col-sm-5 col-form-label col-form-label-sm" for="height">Enter Width of the Object (in m):</label>
      <div class="col-sm-7">
      <input class="form-control form-control-sm" type="text" name="width" id="width">
	</div>
</div>
<input type="submit" class="form-control" value="Calculate Area" name="submit">
<input type="submit" class="btn btn-info form-control" value="Calculate Area Using Polymorphism" name="submit" style="margin-top: 10px;">
</div>
</div>
</div>