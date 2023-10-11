<table cellspacing="0" cellpadding="0" border="1">
    <tbody>
    <tr>
        <td style="background: #000000; color: #FFFFFF; text-align: center;">Nombres</td>
        <td style="background: #000000; color: #FFFFFF; text-align: center;">Apellidos</td>
        <td style="background: #000000; color: #FFFFFF; text-align: center;">E-mail</td>
        <td style="background: #000000; color: #FFFFFF; text-align: center;">Actividad</td>
        <td style="background: #000000; color: #FFFFFF; text-align: center;">Fecha</td>
    </tr>
    @foreach($logs as $log)
        <tr>
            <td>{{$log['user']['first_name']}}</td>
            <td>{{$log['user']['last_name']}}</td>
            <td>{{$log['user']['email']}}</td>
            <td>{{$log['activity']['title']}}</td>
            <td>{{date("d/m/Y H:i", strtotime($log['created_at']))}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
