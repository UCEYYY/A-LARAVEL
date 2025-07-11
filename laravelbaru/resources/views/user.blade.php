<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar User</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    h2 {
      margin: 0;
    }

    .tambah-btn {
      background-color:rgb(11, 12, 11);
      color: white;
      padding: 8px 14px;
      text-decoration: none;
      border-radius: 5px;
    }

    .tambah-btn:hover {
      background-color:rgb(27, 27, 27);
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color:rgb(23, 23, 23);
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>
  <div class="header">
    <h2>Daftar User</h2>
  </div>

  <table>
    <thead>
      <tr>
        <th>nama</th>
        <th>email</th>
        <th>created_at</th>
      </tr>
    </thead>
    <tbody>
         {{-- <?php foreach ($users as $user => $value): ?>
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['email'] ?></td>
            <td><?= $value['created_at'] ?></td>
                <?php endforeach; ?>
      <tr> --}}
        @foreach ($users as $user)
            <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
      <tr>
        <td>sapa</td>
        <td>mw@example.com</td>
        <td></td>
      </tr>
      <tr>
        <td>ti</td>
        <td>su@example.com</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  {{$users->links()}}

</body>
</html>