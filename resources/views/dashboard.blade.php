<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        tr, td, th {
            padding: 10px;
            text-align: center;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="phwaarde">
                    <table>
                        <tr>
                            <th class="meting"> Meting </th>
                            <th class="waarde"> Waarde </th>
                            <th class="percentage"> Percentage </th>
                        </tr>
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{$value->meting}}</td>
                                <td>{{$value->waarde}}</td>
                                <td>{{$value->percentage}}</td>
                            </tr>
                        @endforeach
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
