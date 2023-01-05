<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Halaman profil dosen </h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">nama_dosen</th>
            <th scope="col">nip</th>
            <th scope="col">foto_dosen</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($profil as $item)
            <tr>
              <th scope="row"></th>
              <td>{{ $item->nama_dosen }}</td>
              <td>{{ $item->nip }}</td>
              <td>{{ $item->foto_dosen }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
