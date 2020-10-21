<template>
  <a v-if="external" class="nav-item" :class="{active: isActive()}" :href="$route(to)">
    <span class="nav-link"><slot></slot></span>
  </a>
  <inertia-link v-else class="nav-item" :class="{active: isActive()}" :method="method" :href="$route(to)">
    <span class="nav-link"><slot></slot></span>
  </inertia-link>
</template>

<script>
  export default {
    name: "NavItem",
    props: {
      to: {
        type: String,
        required: true,
      },
      external: {
        type: Boolean,
        default: false,
      },
      method: {
        type: String,
        default: 'get',
      },
    },
    methods: {
      isActive: function () {
        return this.$route().current() == this.to;
      }
    },
  }
</script>
