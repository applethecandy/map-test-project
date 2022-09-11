@extends('layouts.app')

@section('content')
    <div class="py-auto container mx-auto flex flex-wrap">
        <x-points :points="$points" />
        <x-map />
    </div>

    <div id="modal"></div>

    @if ($errors->any())
        <x-error-modal :errors="$errors" />
    @endif
@endsection
