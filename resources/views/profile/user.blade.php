<x-dashboard-layout>
    <div class="mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900 mb-2">User Profile</h1>
                <p class="text-gray-600 text-sm">{{ $user->name }}'s profile information</p>
            </div>
            <a href="{{ url()->previous() }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                ← Back
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile Card -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg border p-6">
                <div class="text-center">
                    <img class="h-24 w-24 rounded-full mx-auto mb-4" src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random&size=96" alt="">
                    <h3 class="text-lg font-medium text-gray-900">{{ $user->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                    <div class="mt-4">
                        <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ $user->role->nama_role ?? 'No Role' }}
                        </span>
                    </div>
                    @if($user->unit)
                    <div class="mt-2">
                        <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full bg-gray-100 text-gray-800">
                            {{ $user->unit->nama_unit }}
                        </span>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Details Card -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg border">
                <div class="px-6 py-4 border-b">
                    <h3 class="text-lg font-medium text-gray-900">Contact Information</h3>
                </div>
                <div class="p-6">
                    <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Full Name</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $user->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Email Address</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $user->email }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Role</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $user->role->nama_role ?? 'No Role Assigned' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Unit/Department</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $user->unit->nama_unit ?? 'No Unit Assigned' }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Activity Summary -->
            <div class="bg-white rounded-lg border mt-6">
                <div class="px-6 py-4 border-b">
                    <h3 class="text-lg font-medium text-gray-900">Activity Overview</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $user->dataKinerja->count() }}</div>
                            <div class="text-sm text-gray-600">Performance Data</div>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">{{ $user->auditAsAuditor->count() }}</div>
                            <div class="text-sm text-gray-600">Audits Conducted</div>
                        </div>
                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600">{{ $user->validasiAsValidator->count() }}</div>
                            <div class="text-sm text-gray-600">Validations Done</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>