<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
	<div class="container">
	<br>
	<div class="text-center">
	<h1>Taules de multiplicar </h1>
	<br>
	 <h2 class="text-muted"> Del 1 al 10 </h2>
	 </div> 
	<br>
	<div class="row">
 <?php
	for ($counter = 1; $counter <= 10; $counter++)  
	{?>
<table class="table table-bordered col-sm-4">
		<thead class="thead-dark" >
			<tr>
				<th scope="col">Taula del <?= $counter ?> </th>
			</tr>
		</thead>
	<tbody>
<?php	

	for ($operator = 1; $operator <= 10; $operator++)
	{?>
			<tr>
	<?php 
		if ($counter != $operator){ ?>
			<th scope="row"> <?= $counter ?> x <?= $operator ?>  = <?= $counter*$operator ?>
	<?php	}
		else { ?>
		<th scope="row" class="table-danger"> <?= $counter ?> x <?= $operator ?>  = <?= $counter*$operator ?>
	<?php	
		}
		?>
				</th>
			</tr>
<?php
		
	}
?>
	</tbody>
</table>

<?php
	}
?>
	</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>