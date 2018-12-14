<table>
    <thead>
    <tr>
        <th colspan="2">Username</th>
        <th>Nominal</th>
        <th>Status</th>
        <th colspan="2">Jenis Pembayaran</th>
        <th>Tanggal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $user)
        <tr>
            <td colspan="2">{{ $user->username }}</td>
            <td>{{ $user->request_nominal }}</td>
            <td>{{ $user->status }}</td>
            <td colspan="2">{{ $user->name }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>