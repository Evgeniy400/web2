<template>
  <section>
    <app-header></app-header>
    <main class="container">
      <div>
        <h1>
          Лучшие рецепты за всю историю кухни Стива
        </h1>
      </div>
      <section class="products">
        <div  class="v-for" v-for="element in elements" :key="element.id">
          <app-element :element="element"> </app-element>
        </div>
      </section>
    </main>
    <app-footer></app-footer>
  </section>
</template>


<script>

export default {
  name: "main",
  beforeCreate: function() {
    document.body.className = 'main';
  },
  data:function(){
    return{
      elements: [
        {
          id: 1,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 2,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 3,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 4,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 5,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 6,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 7,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 8,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 9,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        },
        {
          id: 10,
          title: 'Торт.',
          description: 'Описание добавится в бд...',
          price: 1,
          img: 'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
          hunger: 1,
          ingredients: 'водичка и чечевичка',
          emaciation: 0.0
        }]
    }
  }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>