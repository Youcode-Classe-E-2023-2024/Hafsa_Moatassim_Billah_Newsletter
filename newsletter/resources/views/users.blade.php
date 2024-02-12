
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
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Image</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Name</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Rol</th>
                            <th class="py-2 text-center px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                                <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                                <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                                <td class="py-2 text-center px-4 border-b border-grey-light">
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                         Delete
                                    </button>
                                    <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                                        Update
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
