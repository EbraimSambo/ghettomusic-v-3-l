<div id="description">

    <h1> {{$music->title}} </h1>

    <div class="legend-count">
        <h2> {{$music->artist}} </h2>
        <span class="counter"> {{$count}} Downloads </span>
    </div>

    <div class="down-play">

        <button wire:click="download" wire:loading.attr="disabled"  class="btn-download">
            <span wire:loading.remove>Download</span>
            {{-- Load do careegamento --}}
            <div wire:loading class="loader"></div>
            <span wire:loading>Processando</span>
        </button>

        <button class="btn-play">
            <span class="material-symbols-outlined">play_arrow</span>
        </button>

    </div>
    
    <p>Publicado há {{$music->created_at->diffForHumans()}} </p>
    
</div>
