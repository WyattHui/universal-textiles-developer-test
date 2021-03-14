<template>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <router-link :to="{ name: 'home' }" class="navbar-brand">
      Flosso
    </router-link>
    <button
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li v-for="item in items" :key="item.name"
          class="nav-item">
          <router-link
            class="nav-link"
            data-toggle="collapse"
            :to="{ name: item.name }">
            {{ item.text }}
          </router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      items: [{
        name: 'home',
        text: 'T-Shirt'
      }]
    }
  },
  watch: {
    $route() {
      $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>
