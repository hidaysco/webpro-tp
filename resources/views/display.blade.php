<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1303223017</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center min-vh-100">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h1>User Information</h1>
          </div>
          <div class="card-body">
            @if(session('user'))
              <p><strong>Nama:</strong> {{ session()->get('user')['name'] }}</p>
              <p><strong>NIM:</strong> {{ session()->get('user')['nim'] }}</p>
            @else
              <p class="text-danger">Data tidak ada</p>
            @endif
            <br>
            <a href="{{ route('users') }}" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery