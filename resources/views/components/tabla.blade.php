    <div class="flex flex-col items-center mt-6">

        <table class="table-auto border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr class="text-left" >
                    <th class="pr-4">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 mb-4">
                @foreach ($usuarios as $usuario)
                    <tr">
                        <td class="p-2">{{ $usuario->id }}</td>
                        <td class="p-2">{{ $usuario->name }}</td>
                        <td class="p-2">{{ $usuario->email }}</td>
                        <td class="p-2">{{ $usuario->address }}</td>
                        <td class="p-2">{{ $usuario->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
    </div>