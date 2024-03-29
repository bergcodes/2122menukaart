<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product wijzigen
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/product/edit/{{ $product->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <label for="txtName">Naam: </label>
                <input type="text" name="txtName" id="txtName" value="{{ $product->name }}"><br />
                <label for="txtPrice">Prijs: </label>
                <input type="text" name="txtPrice" id="txtPrice" value="{{ $product->price }}"><br />
                <label for="selCategory">Categorie: </label>
                <select name="selCategory" id="selCategory">
                    @foreach($categories as $category)
                    @if($category->id == $product->category_id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
                <br />
                <input style="padding: 2em; border-radius: 40px;" type="submit" value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>