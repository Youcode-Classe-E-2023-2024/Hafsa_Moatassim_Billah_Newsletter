@include('side')
<div class="text-gray-900 mx-auto w-full bg-gray-200">

    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th class="text-left p-3 px-5">Status</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.role" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end">
                        <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Subscriber</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
