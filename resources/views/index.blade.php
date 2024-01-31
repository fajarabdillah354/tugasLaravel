<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" class="table table-hover">
        <tr>
            <th>ID_BUKU</th>
            <th>NAMA_BUKU</th>
            <th>NAMA_PENGARANG</th>
            <th>KATEGORI</th>
            <th>QTY</th>
            <th>Cover</th>
        </tr>
        @foreach($book as $b)
        <tr>
            <td>{{$b->ID_BUKU}}</td>
            <td>{{$b->NAMA_BUKU}}</td>
            <td>{{$b->NAMA_PENGARANG}}</td>
            <td>{{$b->KATEGORI}}</td>
            <td>{{$b->QTY}}</td>
            <td><image src="{{Storage::url($b->IMAGE)}}" width="150" height="200"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>