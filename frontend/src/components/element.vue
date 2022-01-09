<template>
  <section class="product-item">
    <div>
      <img :src=element.img :alt= element.title>
    </div>
    <h4>
      <div class = "title">
        <router-link :to="{name: 'item_page', params: {element: element, id: element.id}}">
          {{ element.title }}
        </router-link>
      </div>
    </h4>
    <p>
      {{element.description}}
    </p>
    <div>
      <span class="price"> {{ element.price }}
          <img src="../assets/images/emerald.png" alt="emerald">
      </span>
    </div>
  </section>
</template>

<script>
export default {
  name: "element",
  props: ['element']
}
</script>

<style scoped src="../assets/styles/element_style.css">

</style>

