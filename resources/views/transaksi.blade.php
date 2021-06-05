<html>
<head>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>1461900129</title>
</head>
<body>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">id_pelanggan</th>
      <th scope="col">id_barang</th>
    </tr>
  </thead>
  <tbody>]
  @forelse ($transaksi as $transaksi)
    <tr>
      <th scope="row">1</th>
      <td>{{ $transaksi->id }}</td>
      <td>{{ $transaksi->idpelanggan->nama }}</td>
      <td>{{ $transaksi->idbarang->nama }}</td>
    </tr>
    <a href="{{route('transaksi.edit',['id' => $transaksi->id])}}"
    <form action="{{route('transaksi.hapus',['id' => $transaksi->id])}}" method="post">
    @csrf
    @empty
    @endforelse
    <tr>
      <th scope="row">2</th>
      <td>{{route('transaksi.edit',['id' => $transaksi->id])}}</td>
      <td></td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>