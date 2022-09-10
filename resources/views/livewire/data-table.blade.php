<table class="table-auto border-collapse">
    <thead>
        <tr>
            @foreach ($columns as $column)
            <th class="bg-stone-200 text-stone-900 border border-stone-400">{{ $column['name'] }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $datum)
        <tr>
            @foreach ($columns as $column)
            <td class=" bg-stone-100 text-stone-900 border border-stone-400">{{ $datum[$column['data-field']] }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
