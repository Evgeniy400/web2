<template>
  <section>
    <app-header></app-header>

    <main class="container">

    <div class="product-title">
      <h1>{{element.title}}</h1>
    </div>

    <div class="info">
      <div class="product-image">
        <img :src=element.img :alt=element.title>
      </div>

      <div class="product-description">
        <div>
          <span class="price">Восполняет {{element.hunger}}
              <img src="../assets/images/hunger.png" alt="hunger">
          </span>
        </div>
        <div>Уменьшает истощение на {{element.emaciation}} пунктов.</div>
        <div>Ингридиенты: {{element.ingredients}}</div>

        <div class="buying">
          <div class="buying-price">
            <div>Цена:</div>
            <div class="buying-pricenew-val">
              <span> {{element.price}}
                  <img src="../assets/images/emerald.png" alt="hunger">
              </span>
            </div>
          </div>
          <a @click = "addToCart(element)" class="btn"><span class="text">Добавить в корзину</span></a>

        </div>
      </div>

      <div class="product-about">
        <h4>Инормация о {{element.title}}</h4>
        <div class="description">
          {{element.description}}
        </div>
      </div>
    </div>

    </main>
    <app-footer></app-footer>
  </section>
</template>

<script>
import footer_ from "./footer";
import header_ from "./header";

export default {
  name: "item_page",
  components: {
    // eslint-disable-next-line vue/no-unused-components
    footer_,
    // eslint-disable-next-line vue/no-unused-components
    header_
  },
  beforeCreate: function() {
    document.body.className = 'item_page';
  },
    methods: {
        addToCart(product){
            const params = {
                id: product.id, count: 1, userId: localStorage.userId
            }
            this.$http.post('/cart', params)
        }
    },
    data() {
        return {
            element: null
        }
    },
    created() {
        const id = this.$route.params.id
        this.$http.get('/products/' + id)
            .then(response => this.element = response.data)
    }
}
</script>

<style scoped src="../assets/styles/item_page_style.css">

</style>
