<div class="point mt-4 flex w-full cursor-pointer bg-gray-50 p-3 shadow">
    <p href="#" class="flex w-full items-center justify-center rounded px-2 text-sm font-bold uppercase"
        data-latitude="{{ $point->latitude }}" data-longitude="{{ $point->longitude }}" data-action="center">
        {{ $point->name }}</p>
    <div class="text-lg flex
        items-center">
        <button type="button"{{-- data-modal-toggle="modal-edit" --}}>
            <i class="mx-1 fa-solid fa-square-pen text-gray-600 hover:text-gray-500" data-action="edit"
                data-id="{{ $point->id }}"></i>
        </button>
        <!-- <button type="button" data-modal-toggle="modal-remove"> -->
        <i class="mx-1 fa-solid fa-square-minus text-gray-600 hover:text-gray-500" data-action="remove"
            data-id="{{ $point->id }}"></i>
        <!-- </button> -->
    </div>
</div>
