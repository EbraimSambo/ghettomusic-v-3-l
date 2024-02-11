<div class="page-container">

    <section id="new-musics">
      <h2 class="heading">Os mais baíxados</h2>
       <x-app.music.music-container :musics="$tops" />
    </section>

    <section id="new-musics">
      <h2 class="heading"> Recomendações para si</h2>
       <x-app.music.music-container :musics="$recomended" />
    </section>

    <section id="new-musics">
      <h2 class="heading"> Ultimos Lançamentos </h2>
       <x-app.music.music-container :musics="$new" />
    </section>

    <section id="categores">
      <h1 class="heading">Categoriass </h1>
      <x-app.music.categores-container />
    </section>
    
</div>
