<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product overzicht
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Prijs</th>
                    <th>Categorie</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Wijzigen?</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td><a href="/product/edit/{{$product->id}}">Wijzig</a></td>
                    <td><a href="/product/delete/{{$product->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>