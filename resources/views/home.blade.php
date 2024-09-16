<x-layout>
    <x-slot:heading>
        Todo List
    </x-slot:heading>

  <div class="flex content-center">
      <!-- component -->
<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
	<div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <h1 class="text-grey-darkest">Todo List</h1>
                <form action="/add" class="flex mt-4" method="post">
                    @csrf
                <x-input name="name" placeholder="Get Milk"></x-input>
                <x-button type="submit">Add</x-button>
                </form>
        </div>
        <div>
            @if($todos->isEmpty())
            <p>Create a todo</p>
            @else
            @foreach($todos as $lists)
            <div class="flex mb-4 items-center">
                <p class="w-full text-grey-darkest todo-text">{{ $lists->name }}</p>
                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green done-btn">Done</button>
               <form action="/remove/{{ $lists->id }}" method="post">
            @csrf
            @method('DELETE')
            <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red" type="submit">Remove</button>
        </form>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
  </div>
</x-layout>