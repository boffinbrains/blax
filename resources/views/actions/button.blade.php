@extends('layouts.root')

@section('content')
    <div style="display: flex; flex-direction: column; gap: 2rem">
        <div>
            <x-actions.button>
                Add product
            </x-actions.button>
        </div>
        <div>
            <x-actions.button variant="plain">
                View shipping settings
            </x-actions.button>
        </div>
    </div>
@endsection
