<template>
  <a class="nav-item" @click.prevent="logout" :href="$route('logout')"><span class="nav-link">Logout</span></a>
</template>

<script>
  export default {
    name: "NavLogout",
    props: {
      href: {
        type: String,
        required: true,
      },
    },
    methods: {
      logout() {
        this.$inertia.post(this.$route('logout')).then(response => {
          window.location = '/';
        })
      },
    },
  }
</script>
