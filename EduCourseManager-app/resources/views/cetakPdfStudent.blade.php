<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK DATA STUDENT</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">DATA STUDENT</h1>
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Siswa</th>
                    <th>Nama Kursus</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->users->name }}</td>
                        <td>{{ $student->courses->name }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>{{ $student->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>

