<div class="page-container">

    <section id="new-musics">
      <h2 class="heading">Os mais baixados</h2>
       <x-app.music.music-container :musics="$tops" />
    </section>

    @if (count($recomended)=== 0)
    <section id="new-musics">
      <h2 class="heading"> Recomendações para si</h2>
       <x-app.music.music-container :musics="$recomended" />
    </section>        
    @endif


    <section id="new-musics">
      <h2 class="heading"> Ultimos Lançamentos </h2>
       <x-app.music.music-container :musics="$new" />
    </section>

    <section id="categores">
      <h1 class="heading">Categoriass </h1>
      <x-app.music.categores-container />
    </section>
    
</div>
