@extends('cities.layout')

@section('tabtitle')
    City Pop App
@endsection

@section('title')
    City Population Data
@endsection

@section('content')
    <h3>Cities in Database</h3>
    <table style="width:700px;" class="table table-striped">
        <tr style="background-color: rgb(0, 73, 6); color:rgb(229,229,229);">
            <th colspan="2" align="center">
                <img width=50 src="{{ URL::to('/assets/washingtonstate-1638402624944-3230.jpg') }}">
                &nbsp; &nbsp;
                Washington State
            </th>
            <th colspan="3" align="center">Populations</th>
        </tr>
        <tr>
            <th>City</th>
            <th>County</th>
            <th align="right">2000</th>
            <th align="right">2010</th>
            <th align="right">2020</th>
        </tr>
        @foreach ($cities as $city)
            <tr>
                <td>{{ $city->name }}</td>
                <td>{{ $city->county }}</td>
                <td align="right">{{ $city->population_2000 }}</td>
                <td align="right">{{ $city->population_2010 }}</td>
                <td align="right">{{ $city->population_2020 }}</td>
            </tr>
        @endforeach
    </table>
@endsection
