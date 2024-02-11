@props(['music','similars'])
<div id="container-single">

    <div id="container-desc">
        <div id="content">
            <x-app.music.cover-single :cover="$music" />
            <livewire:components.music.legend-counter :music="$music" />
        </div>
        <x-app.music.top :datas="$similars"  />
    </div>

    <x-app.music.player :sound="$music" />
</div>    