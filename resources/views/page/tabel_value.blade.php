@extends('layouts.main')

@section('container')
<style>
        table.styled-table {
            border-collapse: collapse;
            margin: 25px auto;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 500px;
            border: 1px solid #cacaca; /* Border dengan warna hitam */
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }

        .styled-table th {
            padding: 12px 15px;
            text-align: center;
            border-right: 1px solid #cacaca;
            border-bottom: 1px solid #cacaca;
            background-color: #e5e5e5;
            font-size: 1.0em;
        }

        .styled-table td {
            padding: 12px 15px;
            text-align: center;
            border-right: 1px solid #cacaca; 
        }

        .styled-table tbody tr:nth-of-type(odd) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879; 
        }

        h1 {
            text-align: center;
        }
    </style>

    <h1>Data Tabel Value Data</h1>
    <table class="styled-table">
        <tr>
            <th>ID ELEMENT</th>
            <th>ID USER</th>
            <th>VALUE</th>
        </tr>
        @foreach($trs_values as $trs_value)
            <tr>
                <td>{{ $trs_value->id_element }}</td>
                <td>{{ $trs_value->id }}</td>
                <td>{{ $trs_value->value }}</td>
            </tr>
        @endforeach
    </table>
@endsection
