<div>
    <div class="format lg:format-md mx-auto w-full px-2">
        <h1 class="mt-12 my-6 text-center">Submit your App</h1>
        <form wire:submit.prevent="submit" class="flex flex-col gap-6 px-4 sm:w-8/12 sm:px-0 mx-auto">
            <input
                name="icon"
                type="file"
                label="App Icon"
                placeholder="Choose an icon for the app"/>
            <button class="mt-6 mx-auto">Submit</button>
        </form>
    </div>
</div>
