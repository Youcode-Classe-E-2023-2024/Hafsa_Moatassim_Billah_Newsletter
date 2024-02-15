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
                                <button type="submit"
                                        class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                    Delete User
                                </button>
                            </form>

                            <button href="/update/{{$user->id}}" data-modal-target="crud-modal"
                                    data-modal-toggle="crud-modal"
                                    class=" bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded"
                                    type="button">
                                Update Role
                            </button>
                        </td>
                    </tr>

                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Change The Role
                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5">
                                    <div class="pl-6 pr-6 mb-4 ">
                                        <div class="col-span-2 mx-auto sm:col-span-1">
                                            <select id="category"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Select category</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="text-white ml-20 mb-5 inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Change
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

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

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
