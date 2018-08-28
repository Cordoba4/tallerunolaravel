<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TALLER UNO - #####</title>
    </head>
    <body>

        <center>
        <table border=1>
            <tr>
                <td colspan=2><center><b>@yield('Titulo') {{$No}}</b></center></td>
            </tr>

            @for($i=1;$i<=10;$i++)
             <tr>
                <td><center><b>{{$No}}x{{$i}}</b></center></td>
                <td><center><b>{{$No*$i}}</b></center></td>
            </tr>
            @endfor

            <tr>
                <td colspan=2><center><b>@yield('pie')</b></center></td>
            </tr>
        </table>
        </center>
        
    </body>
</html>