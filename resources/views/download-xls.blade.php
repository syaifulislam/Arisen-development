<table>
        <thead>
        <tr>
            <th>Username</th>
            <th>Nominal</th>
            <th>Status</th>
            <th>Jenis Pembayaran</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->request_nominal }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>