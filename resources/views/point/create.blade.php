<div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none"
    id="modal-edit">
    <div class="relative my-6 mx-auto w-auto max-w-3xl">
        <!--content-->
        <div
            class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between rounded-t border-b border-solid border-slate-200 p-5">
                <h3 class="text-xl font-semibold text-gray-900">Создание точки</h3>
            </div>
            <!--body-->
            <form method="POST" action="{{ route('point.store') }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class="space-y-6 p-6">
                    <div class="mb-6">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Название
                            точки</label>
                        <input type="text" id="name" name="name"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Моя первая точка" required />
                    </div>
                    <div class="mb-6">
                        <label for="latitude" class="mb-2 block text-sm font-medium text-gray-900">Широта</label>
                        <input type="text" id="latitude" name="latitude"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="55.753994" required />
                    </div>
                    <div class="mb-6">
                        <label for="longitude" class="mb-2 block text-sm font-medium text-gray-900">Долгота</label>
                        <input type="text" id="longitude" name="longitude"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="37.622093" required />
                    </div>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end rounded-b border-t border-solid border-slate-200 p-6">
                    <button
                        class="background-transparent mr-1 mb-1 px-6 py-2 text-sm font-bold uppercase text-red-500 outline-none transition-all duration-150 ease-linear focus:outline-none"
                        type="button" onclick="document.querySelector('#modal').innerHTML = null">Отмена</button>
                    <button
                        class="mr-1 mb-1 rounded bg-yellow-500 px-6 py-3 text-sm font-bold uppercase text-white shadow outline-none transition-all duration-150 ease-linear hover:shadow-lg focus:outline-none active:bg-yellow-400"
                        type="submit">Создать</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="fixed inset-0 z-40 flex bg-black opacity-25" id="modal-edit-backdrop"></div>
