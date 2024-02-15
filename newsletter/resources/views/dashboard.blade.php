@include('side')
<div class="flex-1 p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <div class="bg-slate-50 p-5 m-2 rounded-md flex justify-between items-center shadow">
            <div>
                <h3 class="font-bold">Total Users</h3>
                <p class="text-gray-500">{{ $totalUsersCount }}</p>
            </div>
            <i class="fa-solid fa-users p-4 bg-gray-200 rounded-md"></i>
        </div>

        <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
            <div>
                <h3 class="font-bold">Total Subscribers</h3>
                <p class="text-gray-500">65</p>
            </div>
            <i class="fa-solid fa-users p-4 bg-green-200 rounded-md"></i>
        </div>

        <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
            <div>
                <h3 class="font-bold">Total Template</h3>
                <p class="text-gray-500">30</p>
            </div>
            <i class="fa-solid fa-users p-4 bg-yellow-200 rounded-md"></i>
        </div>

        <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
            <div>
                <h3 class="font-bold">Deleted Users</h3>
                <p class="text-gray-500">5</p>
            </div>
            <i class="fa-solid fa-users p-4 bg-red-200 rounded-md"></i>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
        <div class="bg-white p-4 rounded-md" style="max-height: 200px; overflow-y: auto;">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Template</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                <tr class="text-sm text-left leading-normal">
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        TITLE
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Date
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Creator
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
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Users</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
            <table class="w-full table-auto text-sm">
                <thead>
                <tr class="text-sm text-left leading-normal">
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        ID
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                        Name
                    </th>
                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">
                        Email
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">{{$user->id}}</td>
                        <td class="py-2 px-4 border-b border-grey-light">{{$user->name}}</td>
                        <td class="py-2 px-4 border-b border-grey-light">{{$user->email}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

