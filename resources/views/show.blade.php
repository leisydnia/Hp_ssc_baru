<!-- resources/views/borrowing/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman</title>
</head>

<body>
    <h1>Detail Peminjaman</h1>
    <p>ID: {{ $borrowing->id }}</p>
    <p>UKM Name: {{ $borrowing->ukm_name }}</p>
    <p>Event Name: {{ $borrowing->event_name }}</p>
    <p>Event Date: {{ $borrowing->event_date }}</p>

    <h2>Peminjaman Mahasiswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <!-- tambahkan kolom lain jika diperlukan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <!-- tambahkan kolom lain jika diperlukan -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
