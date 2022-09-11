<aside class="flex w-full flex-col items-center px-3 md:w-1/3">
    <div class="my-4 flex w-full flex-col bg-white p-6 shadow">
        <p href="#" class="flex w-full items-center justify-center rounded px-2 text-sm font-bold uppercase">
            Точки
        </p>
        @foreach ($points as $point)
            <x-point :point="$point" />
        @endforeach
        <a href="#" id="create-button"
            class="mt-4 flex w-full items-center justify-center rounded bg-yellow-500 px-2 py-3 text-sm font-bold uppercase text-white hover:bg-yellow-400">
            Добавить точку
        </a>
    </div>
</aside>
