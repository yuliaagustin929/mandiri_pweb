<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		</div>
			<div class="alert alert-success" role="alert">
			Data Berhasil Disimpan!
			</div>
		<div class="row">
			<div class="col-6">
				<h1 class="">DATA MAHASISWA</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-danger float-right"  data-toggle="modal" data-target="#exampleModal">
			TAMBAH 
			</button>

			
				</div>
		<table class="table table-hover">
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>NIM</th>
			</tr>
			@foreach($data_mahasiswa as $mahasiswa)
			<tr>
				<td>{{$mahasiswa->nama}}</td>
				<td>{{$mahasiswa->alamat}}</td>
				<td>{{$mahasiswa->NIM}}</td>
			</tr>
			@endforeach
		</table>
	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			       <form action="{{url('/mahasiswa/create')}}" method="POST">
			       	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama</label>
					    <input  name='nama' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan nama">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name='alamat' class="form-control" id="exampleFormControlTextarea1" rows="6"> </textarea>
					  </div>
					   <div class="form-group">
					    <label for="exampleInputEmail1">NIM</label>
					    <input name='nim' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan NIM">
					  </div>
					  <button type="button" class="btn btn-danger">close</button>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
</body>
</html>
