<template>
  <div class="home">
    <app-intro></app-intro>
<!--    <app-item_page></app-item_page>-->
  </div>
</template>

<script>

// @ is an alias to /src
import header from '../components/header'
import footer from "../components/footer";
import main from "../components/main";
import intro from "../components/intro";
import element from "@/components/element";
import item_page from "@/components/item_page";

export default {
  name: 'Home',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    intro,
    // eslint-disable-next-line vue/no-unused-components
    main,
    // eslint-disable-next-line vue/no-unused-components
    footer,
    // eslint-disable-next-line vue/no-unused-components
    header,
    // eslint-disable-next-line vue/no-unused-components
    element,
    // eslint-disable-next-line vue/no-unused-components
    item_page

  }
}
</script>