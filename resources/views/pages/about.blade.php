@extends('layouts.app')
@section('title','halaman about')
@section('content')
<x-modal warna="danger" link="/contact" modal="About">
    SELANJUTNYA
</x-modal>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div class="container" style="height:500px;">
          <div class="row mb-4">
            <div class="col text-left ml-4">
            </div>
          </div>
          <div class="row content-left ml-5">
            <div class="col-md-7">
              <p> Percobaan </p>
            </div>
          </div>
        </div>
        
@stop