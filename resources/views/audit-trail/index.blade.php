<x-dashboard-layout>
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-900 mb-2">Audit Trail</h1>
        <p class="text-gray-600 text-sm">Log aktivitas sistem</p>
    </div>

    <div class="bg-white rounded-lg border">
        <table class="w-full">
            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Timestamp</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">User</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Tabel</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($auditTrails as $trail)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $trail->timestamp }}</td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $trail->user->name ?? 'System' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                            @if($trail->aksi == 'CREATE') bg-green-100 text-green-800
                            @elseif($trail->aksi == 'UPDATE') bg-yellow-100 text-yellow-800
                            @elseif($trail->aksi == 'DELETE') bg-red-100 text-red-800
                            @else bg-blue-100 text-blue-800 @endif">
                            {{ $trail->aksi }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $trail->tabel_terkait }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit($trail->deskripsi, 50) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @if($auditTrails->hasPages())
    <div class="mt-6">
        {{ $auditTrails->links() }}
    </div>
    @endif
</x-dashboard-layout>