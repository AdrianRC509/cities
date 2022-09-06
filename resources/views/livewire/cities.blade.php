@section('tabtitle')
Cities but searchable
@endsection

<div>
    <input wire:model="search" type="text" placeholder="Seach cities or by county" size=40 >
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
                <th>
                    <a href="#" wire:click="SortList('name', 'asc')">&uarr;</a>
                    City
                    <a href="#" wire:click="SortList('name', 'desc')">&darr;</a>
                </th>
                <th>
                    <a href="#" wire:click="SortList('county', 'asc')">&uarr;</a>
                    County
                    <a href="#" wire:click="SortList('county', 'desc')">&darr;</a>
                </th>
                <th align="right">
                    <a href="#" wire:click="SortList('population_2000', 'asc')">&uarr;</a>
                    2000
                    <a href="#" wire:click="SortList('population_2000', 'desc')">&darr;</a>
                </th>
                <th align="right">
                    <a href="#" wire:click="SortList('population_2010', 'asc')">&uarr;</a>
                    2010
                    <a href="#" wire:click="SortList('population_2010', 'desc')">&darr;</a>
                </th>
                <th align="right">
                    <a href="#" wire:click="SortList('population_2020', 'asc')">&uarr;</a>
                    2020
                    <a href="#" wire:click="SortList('population_2020', 'desc')">&darr;</a>
                </th>
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
</div>
