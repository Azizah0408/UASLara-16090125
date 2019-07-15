
@extends('partials.main')
@section('content')

<div class="modal-header">
<h1>Jadwal Kursus</h1>
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
    <label for="bulan">Bulan:</label>
    <input type="bulan" class="form-control" id="bulan">
  </div>
  <div class="form-group">
    <label for="waktu">Waktu:</label>
    <input type="waktu" class="form-control" id="waktu">
  </div>
  <div class="form-group">
    <label for="biaya">Biaya:</label>
    <input type="biaya" class="form-control" id="biaya">
  </div>
  <div class="form-group">
    <label for="pilihan_program">Pilihan Program:</label>
    <input type="pilihan_program" class="form-control" id="pilihan_program">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

@stop