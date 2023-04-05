@extends('backend.app')


@section('content')

<div class="container">

    <marquee behavior="" direction=""><h1>Welcome to Dash Board of Sawa-Family</h1></marquee>
    <div class="row">
     <container class="card">
        <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading">Total Users</div>
              <div class="panel-body">100</div>
            </div>
          </div>
     </container>
     <container class="card">
        <div class="col-md-4">
            <div class="panel panel-success">
              <div class="panel-heading">New Users</div>
              <div class="panel-body">10</div>
            </div>
          </div>
     </container>
     <container class="card">
        <div class="col-md-4">
            <div class="panel panel-danger">
              <div class="panel-heading">Banned Users</div>
              <div class="panel-body">5</div>
            </div>
          </div>
     </container>
    </div>
  </div>


  <div class="container">
    <h1>Users</h1>
    <p>Here are all the users in the system:</p>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john@example.com</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Doe</td>
          <td>jane@example.com</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Bob Smith</td>
          <td>bob@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>



@endsection
