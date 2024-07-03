<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
				<h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Pengguna</th>
							<th>Hadiah</th>
							<th width="1%">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($a->nama); ?></td>
							<td>
								<ul>
									<?php $__currentLoopData = $a->hadiah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li> <?php echo e($h->nama_hadiah); ?> </li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</td>
							<td class="text-center"><?php echo e($a->hadiah->count()); ?></td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\relasi-laravel\resources\views/anggota.blade.php ENDPATH**/ ?>