<x-app-layout>
<x-slot name="header">
    Adicionar ou criar um livro
</x-slot>

<form action="{{ route('livros.store') }}" method="POST">
@csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="categoria" placeholder="categoria">
    <input type="submit">
</form>
</x-app-layout>
