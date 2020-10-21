<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 px-5 py-0">
    <div class="container-fluid">
      <img src="https://quasars.com/images/logo_sq.png" alt="" width="24" height="24" class="rounded mr-2" />
      <inertia-link class="navbar-brand" :href="$route($page.props.auth.user ? 'dashboard' : 'welcome')">QIS</inertia-link>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarColor03">
        <div v-if="$page.props.auth.user" class="navbar-nav">
          <nav-link to="dashboard">Dashboard</nav-link>
          <nav-link href="https://laravel.com/docs/8.x" :external="true">Laravel</nav-link>
          <nav-link href="https://inertiajs.com/" :external="true">InertiaJs</nav-link>
          <nav-link href="https://v3.vuejs.org/guide/introduction.html" :external="true">Vue 3</nav-link>
          <nav-link href="https://v5.getbootstrap.com/docs/5.0/getting-started/introduction/" :external="true">Bootstrap 5</nav-link>
        </div>
        <div v-else class="navbar-nav">
          <nav-link to="welcome">Home</nav-link>
        </div>
        <div v-if="$page.props.auth.user" class="navbar-nav ml-auto mb-2 mb-lg-0">
          <nav-logout />
        </div>
        <div v-else class="navbar-nav ml-auto mb-2 mb-lg-0">
          <nav-link to="login">Login</nav-link>
          <nav-link to="register">Sign up</nav-link>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
  import NavLink from "./NavLink";
  import NavLogout from "./NavLogout";
  export default {
    name: "Navigation",
    components: {NavLogout, NavLink},
  }
</script>
