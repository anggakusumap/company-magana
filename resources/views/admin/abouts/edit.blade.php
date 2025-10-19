@php use Illuminate\Support\Facades\Storage; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 mb-2 w-full rounded-3xl bg-red-500 text-white px-4">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.abouts.update', $about) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                      value="{{ old('name', $about->name) }}" required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('Thumbnail')"/>
                        @if($about->thumbnail)
                            <img src="{{ Storage::url($about->thumbnail) }}" alt=""
                                 class="rounded-2xl object-cover w-[90px] h-[90px] mb-3">
                        @endif
                        <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail"
                                      autocomplete="thumbnail"/>
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="type" :value="__('Type')"/>
                        <select name="type" id="type" class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value="Visions" {{ old('type', $about->type) == 'Visions' ? 'selected' : '' }}>
                                Visions
                            </option>
                            <option value="Missions" {{ old('type', $about->type) == 'Missions' ? 'selected' : '' }}>
                                Missions
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-2"/>
                    </div>

                    <h3 class="text-indigo-950 text-lg font-bold mt-6">Keypoints</h3>
                    <div class="mt-4 flex flex-col gap-y-4">
                        @php
                            $keypoints = old('keypoints', $about->keypoints->pluck('keypoint')->toArray() ?? []);
                        @endphp

                        @forelse($keypoints as $keypoint)
                            <input type="text" class="py-3 rounded-lg border-slate-300 border"
                                   name="keypoints[]" value="{{ $keypoint }}" placeholder="Write your keypoint">
                        @empty
                            @for($i = 0; $i < 3; $i++)
                                <input type="text" class="py-3 rounded-lg border-slate-300 border"
                                       name="keypoints[]" placeholder="Write your keypoint">
                            @endfor
                        @endforelse
                        <x-input-error :messages="$errors->get('keypoints')" class="mt-2"/>
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <button type="submit"
                                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full hover:bg-indigo-800 transition">
                            Update About
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
