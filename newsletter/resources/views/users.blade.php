@include('side')
<div class="flex-1 p-4">
    <div class="grid grid-cols-1 md:grid-cols-1 mt-2 p-2">

        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Users</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                <tr class="text-sm leading-normal text-left">
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Name
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Email
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Rol
                    </th>
                    <th class="py-2 text-center px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Operation
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">{{$user->name}}</td>
                        <td class="py-2 px-4 border-b border-grey-light">{{$user->email}}</td>
                        <td class="py-2 px-4 border-b border-grey-light">
                            <span
                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        @foreach($user->roles as $role)
                                            <span class="relative">{{ $role->name }}</span>
                                        @endforeach
                                    </span>
                        </td>
                        <td class="space-x-3 flex justify-center py-2 text-center px-4 border-b border-grey-light">
                            <form action="/delete/{{$user->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                    Delete User
                                </button>
                            </form>

                            <a href="/update/{{$user->id}}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                                Update Role
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{$users->links()}}
            </div>
        </div>


    </div>
</div>
</div>
