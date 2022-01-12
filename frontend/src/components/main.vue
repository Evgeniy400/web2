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
    data(){
        return{
            elements: []
        }
    },
    created() {
        this.$http.get('/products')
            .then(response => this.elements = response.data)
    }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>
