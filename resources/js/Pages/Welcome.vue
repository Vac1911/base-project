<template>
  <app-layout>
    <div class="bg-white shadow-sm p-5 rounded">
      <h1>Welcome</h1>
      <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
      <a class="btn btn-lg btn-primary" href="#" role="button">More »</a>
    </div>
  </app-layout>
</template>

<script>
  import AppLayout from './Layout/AppLayout'
  export default {
    components: {
      AppLayout,
    },
    mounted() {
      console.log(this);
    }
  }
</script>
