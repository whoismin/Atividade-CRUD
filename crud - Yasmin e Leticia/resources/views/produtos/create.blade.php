<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicionar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFCBDB] dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-6">Adicione um novo produto:</h3>

                    <form action="{{ route('produtos.store') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="preco" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Valor</label>
                                <input type="number" step="0.01" name="preco" id="preco" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="descricao" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descrição</label>
                            <textarea name="descricao" id="descricao" rows="4" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500"></textarea>
                        </div>

                        <div class="mb-6">
                            <label for="quantidade" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Quantidade</label>
                            <input type="number" name="quantidade" id="quantidade" class="form-input rounded-md shadow-sm mt-1 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:border-blue-500 dark:focus:border-blue-500 focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
                                Adicionar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

