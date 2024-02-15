@include('side')
<div class="flex-1 p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">

        <div class="bg-white p-4 rounded-md" style="max-height: 200px; overflow-y: auto;">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">User</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                <tr class="text-sm leading-normal">
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        NAME
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        EMAIL
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Rol
                    </th>
                </tr>
                </thead>
                        <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light">e</td>
                            <td class="py-2 px-4 border-b border-grey-light">e</td>
                            <td class="py-2 px-4 border-b border-grey-light">e</td>
                        </tr>
                        </tbody>

            </table>
        </div>

        <div class="bg-white p-4 rounded-md mt-4">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Templates</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                <tr class="text-sm leading-normal">
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Nombre
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Fecha
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                        Monto
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-2 px-4 border-b border-grey-light">Carlos Sánchez</td>
                    <td class="py-2 px-4 border-b border-grey-light">27/07/2023</td>
                    <td class="py-2 px-4 border-b border-grey-light text-right">$1500</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

