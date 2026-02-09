<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $usuario?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $usuario?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="address" :value="__('Address')"/>
        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $usuario?->address)" autocomplete="address" placeholder="Address"/>
        <x-input-error class="mt-2" :messages="$errors->get('address')"/>
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $usuario?->phone)" autocomplete="phone" placeholder="Phone"/>
        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>