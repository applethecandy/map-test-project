<div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none"
    id="modal-edit">
    <div class="relative my-6 mx-auto w-auto max-w-3xl">
        <!--content-->
        <div
            class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between rounded-t border-b border-solid border-slate-200 p-5">
                <h3 class="text-xl font-semibold text-gray-900">Ошибка</h3>
            </div>
            <!--body-->
            @csrf
            @method('PUT')
            <div class="space-y-6 p-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $key => $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <!--footer-->
            <div class="flex items-center justify-end rounded-b border-t border-solid border-slate-200 p-6">
                <button
                    class="background-transparent mr-1 mb-1 px-6 py-2 text-sm font-bold uppercase outline-none transition-all duration-150 ease-linear focus:outline-none"
                    type="button" onclick="document.querySelector('#modal').innerHTML = null">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="fixed inset-0 z-40 flex bg-black opacity-25" id="modal-edit-backdrop"></div>
