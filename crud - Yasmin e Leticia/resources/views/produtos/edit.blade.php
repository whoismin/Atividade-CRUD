<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold">Editar Produto</h3>
                    </div>

                    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="nome" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" value="{{ $produto->nome }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Descrição</label>
                            <textarea name="descricao" id="descricao" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" rows="4" required>{{ $produto->descricao }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="preco" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Valor</label>
                            <input type="number" step="0.01" name="preco" id="preco" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" value="{{ $produto->preco }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="quantidade" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Quantidade</label>
                            <input type="number" name="quantidade" id="quantidade" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" value="{{ $produto->quantidade }}" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
                                Atualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
