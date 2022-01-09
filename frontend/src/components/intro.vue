<template>
  <section class="intro_vue">
    <div class="login-box">
      <div class="row">
        <img
            src="../assets/images/angry_bea.png" alt="bea"
        />
      </div>
      <h2>Авторизация</h2>
      <form>
        <div class="user-box">
          <input type="text" name="" required=""/>
          <label><i class="Username"></i>
            Почта или логин
          </label>
        </div>
        <div class="user-box">
          <input type="password" name="" required=""/>
          <label><i class="Unlock"></i>
            Пароль
          </label>
        </div>
      </form>
      <router-link :to="{name: 'main'}">
        <button type="submit" class="submit-button">Вход</button>
      </router-link>
    </div>
  </section>
</template>

<script>
export default {
  name: "intro",


  beforeCreate: function () {
    document.body.className = 'intro';
  }
}
</script>

<style scoped src="../assets/styles/intro_style.css">

body {
  background: radial-gradient(#f69d3c, #3f87a6);
}

</style>


