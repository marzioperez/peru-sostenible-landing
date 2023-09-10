<table cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Nombres</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Apellidos</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">E-mail</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Teléfono</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Empresa</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Cargo</td>
            <td style="background: #000000; color: #FFFFFF; text-align: center;">Compromisos</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user['first_name']}}</td>
                <td>{{$user['last_name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['phone']}}</td>
                <td>{{$user['company']}}</td>
                <td>{{$user['position']}}</td>
                <td>
                    @if($user['commitments'])
                        @php
                            $commitments = $user['commitments'];
                        @endphp
                        @foreach($commitments as $commitment)
                            {{$commitment . ($commitment === end($commitments) ? '' : ', ')}}
                        @endforeach
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
