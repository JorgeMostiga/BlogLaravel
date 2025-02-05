<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input 
    name="title" 
    id="title" 
    value="{{  old('title',$post->title) }}" 
    class="block form-control mt-1"
    />
        {{-- @error('title')
            <small style="color:rgb(226, 8, 73)">{{  $message }}</small><br>
        @enderror --}}
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<div>
    <x-input-label for="body" :value="__('Body')" />
            <x-textarea 
            class="block form-control mt-1" 
            name="body" 
            id="body" 
            cols="30" 
            rows="10">{{ old('body',$post->body) }}</x-textarea>
            {{-- @error('body')
                <small style="color:brown">{{  $message }}</small><br>
            @enderror --}}
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>