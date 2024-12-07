<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <form action="{{ route('message.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="user-id" class="block text-sm font-medium text-gray-700">Felhasználó kiválasztása</label>
                        <select id="user-id" name="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="all">Összes</option>
                            @foreach($users as $user)
                                <option value="{{ $user->role_id }}">{{ $user->role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Üzenet Leírása</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Írd ide az üzenetet..."></textarea>
                    </div>

                    <button type="submit" class="px-6 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                        Üzenet Rögzítése
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
