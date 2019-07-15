@extends('partials.main')
@section('content')

<div class="modal-header">

<h1>Form Peserta Kursus</h1>
<form >
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="nama" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="jenis_kelamin" class="form-control" id="jenis_kelamin">
  </div>
  <div class="form-group">
    <label for="tgl_lahir">Tanggal Lahir:</label>
    <input type="tgl_lahir" class="form-control" id="tgl_lahir">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="alamat" class="form-control" id="alamat">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="status">Status:</label>
    <input type="status" class="form-control" id="jstatus">
  </div>
  <div class="form-group">
    <label for="pilihan_program">Pilihan Program:</label>
    <input type="pilihan_program" class="form-control" id="pilihan_program">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form> 

 
@stop