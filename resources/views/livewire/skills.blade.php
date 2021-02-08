<div>
    @foreach($skills as $skill)
{{$skill['name']}}
    @endforeach
    <form class="my-4 " wire:submit.prevent="addSkill">
      
        <input class="w-full rounded border shadow p-2 mr-2 my-2" wire:model="newSkill">
        <div class="py-2">

            <button class="p-2 bg-blue-500 w-20 rounded shadow text-white "
             type="submit">Add</button>
        </div>
        <div><p>{{$newSkill}}</p></div>
       
    </form>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
