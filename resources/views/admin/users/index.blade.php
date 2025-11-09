<x-dashboard-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-lg font-medium text-gray-900">User Management</h1>
        <a href="{{ route('admin.users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-lg text-sm flex items-center">
            + Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 text-green-700 px-3 py-2 rounded mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg border">
        <table class="w-full">
            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase w-2/5">USER</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase w-1/5">ROLE</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase w-1/5">UNIT</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase w-1/5">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b last:border-b-0 hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-7 h-7 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                <span class="text-xs font-medium text-blue-600">{{ substr($user->name, 0, 1) }}</span>
                            </div>
                            <div class="min-w-0">
                                <div class="text-sm font-medium text-gray-900 truncate">{{ $user->name }}</div>
                                <div class="text-xs text-gray-500 truncate">{{ $user->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        @php
                            $roleColors = [
                                'Admin' => 'bg-green-100 text-green-700',
                                'Auditor' => 'bg-blue-100 text-blue-700', 
                                'Validator' => 'bg-green-100 text-green-700',
                                'Staff' => 'bg-blue-100 text-blue-700',
                                'Pimpinan' => 'bg-green-100 text-green-700'
                            ];
                            $colorClass = $roleColors[$user->role->role_name ?? ''] ?? 'bg-gray-100 text-gray-700';
                        @endphp
                        <span class="px-2 py-1 text-xs font-medium rounded {{ $colorClass }}">
                            {{ $user->role->role_name ?? '-' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        {{ $user->unit->nama_unit ?? '-' }}
                    </td>
                    <td class="px-4 py-3 text-right">
                        <div class="flex justify-end space-x-3">
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-500 hover:text-blue-700 text-sm">Edit</a>
                            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm" onclick="return confirm('Yakin hapus user ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @if($users->hasPages())
    <div class="mt-4">
        {{ $users->links() }}
    </div>
    @endif
</x-dashboard-layout>