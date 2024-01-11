<x-session-status class="mb-4" :status="session('status')" />
        <form action="{{ route('posts.store')}}" method="POST">
            @csrf
            <div class="mt-4">
                <x-input-label for="body" :value="__('Body')" />
                <x-textarea class="block mt-1 w-full" name="body" required/>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Guardar') }}
                </x-primary-button>
            </div>
        </form>
