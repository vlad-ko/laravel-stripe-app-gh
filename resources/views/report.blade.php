<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stripe API - Test App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
    <table id="report-table" class="tablesorter">
        <thead>
            <th class="header">
                ID
            </th>
            <th class="header">
                Object
            </th>
            <th class="header">
                Amount
            </th>
            <th class="header">
                Description
            </th>
            <th class="header">
                Receipt Email
            </th>
        </thead>
        <tbody>
        @foreach ($charges as $charge)
            <tr>
                <td>{{ $charge['id'] }}</td>
                <td>{{ $charge['object'] }}</td>
                <td>${{ number_format($charge['amount']/100, 2, '.', ',') }}</td>
                <td>{{ $charge['description'] }}</td>
                <td>{{ $charge['receipt_email'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery.tablesorter.js') }}"></script>
        <script src="{{ asset('js/jquery.tablesorter.widgets.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
</html>
