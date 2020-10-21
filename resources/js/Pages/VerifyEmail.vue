<template>
  <app-layout>
    <div class="card">
      <div class="card-header">Login</div>
    
      <div class="card-body">
        <form @submit.prevent="resend">
          <button type="submit" class="btn btn-primary">
            Resend Verification Email
          </button>
        </form>
        <form @submit.prevent="logout">
          <button type="submit" class="btn btn-primary">
            Logout
          </button>
        </form>
      </div>
    </div>
  </app-layout>
</template>

<script>
  import AppLayout from './Layout/AppLayout'
  export default {
    components: {
      AppLayout,
    },
    props: {
      errors: Object,
    },
    methods: {
      resend() {
        this.$inertia.post(this.$route('verification.send'))
      },
      logout() {
        this.$inertia.post(this.$route('logout')).then(response => {
          window.location = '/';
        })
      },
    },
  }
</script>
