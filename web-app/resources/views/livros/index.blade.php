<x-app-layout>

<x-slot name="header">
    Meus Livros
</x-slot>

<div>
<h1>Esses são seus livros</h1>

<table>
<tr>
    <th>name</th>
    <th>categoria</th>
</tr>

@foreach ($livros as $livro)
<tr>
    <td>{{ $livro->name }}</td>
    <td>{{ $livro->categoria }}</td>
    <td><a href="{{ route('livros.delete') }}">Remover</a></td>
</tr>
        {{ $livro }}
@endforeach
</table>

<a href="{{ route('livros.create') }}">Form para criar</a>
</div>

</x-app-layout>