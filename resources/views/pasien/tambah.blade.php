@extends('master')

@section('content')
<div class="container-fluid" style="margin-top:1%;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default" style="background-color:#FBFBFB;padding-top:3%;padding-bottom:3%;">
    <div class="panel-body" style="background-color:#FBFBFB;margin: 0 auto;">
     <h2 style="text-align:center;font-size:30px;">Form Tambah Pasien</h2>
      <ul>
       @foreach($errors->all()as $error)
       <li class="alert alert-danger">{{$error}} </li>
       @endforeach
     </ul>

<<<<<<< HEAD

       <div class="col-md-8 col-md-offset-2">

         <form class="form s10" role="form" method="POST" action="{{ url('pasien/tambah') }}">
=======
       <div class="col-md-6">
         <form class="form-horizontal" role="form" method="POST" action="{{ url('pasien/tambah') }}">
>>>>>>> refs/remotes/catris25/master
  						<input type="hidden" name="_token" value="{{ csrf_token() }}">


              <div class="row">
  							<div class="input-field col s12">
  								<input id="nama_pasien" type="text" class="validate" name="nama_pasien" value="{{ old('nama_pasien') }}">
                  <label for="nama_pasien">Nama</label>
  							</div>
  						</div>

              <div class="row">
                <div class="input-field col s12">
  							<select name="jenis_kelamin" id="jenis_kelamin">
                  <option value="" disabled selected>Masukkan jenis kelamin</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
  						</div>

              <div class="row">
  							<div class="input-field col s12">
  								<input id="tgl_lahir" type="date" class="datepicker" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                  <label for="tgl_lahir">Tanggal lahir</label>
  							</div>
  						</div>

              <div class="row">
  							<div class="input-field col s12">
  								<input id="alamat" type="text" class="validate" name="alamat" value="{{ old('alamat') }}">
                  <label for="alamat">Alamat</label>
  							</div>
  						</div>

              <div class="row">
  							<div class="input-field col s12">
  								<input id="telepon" type="tel" class="validate" name="telepon" value="{{ old('telepon') }}">
                  <label for="telepon">Nomor telepon</label>
  							</div>
  						</div>

              <div class="row">
                <div class="input-field col s12">
                  <select name="gol_darah" id="gol_darah">
                    <option value="" disabled selected>Pilih gol. darah</option>
                    <option value="">Tidak tahu</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                  </select>
                  <label for="gol_darah">Golongan darah</label>
                </div>
  						</div>

              <div class="row">
  							<div class="input-field col s12">
  								<input id="alergi" type="text" class="validate" name="alergi" value="{{ old('alergi') }}">
                  <label for="alergi">Alergi</label>
  							</div>
  						</div>

              <div class="row">
  							<div class="input-field col s12">
  								<input id="riwayat_penyakit" type="text" class="validate" name="riwayat_penyakit" value="{{ old('riwayat_penyakit') }}">
                  <label for="riwayat_penyakit">Riwayat penyakit</label>
  							</div>
  						</div>

              <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
							</div>
						</div>
            </form>

        </div>
      </div>
      </div>
      </div>
   </div>
</div>

@endsection
