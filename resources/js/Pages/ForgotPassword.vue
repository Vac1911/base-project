<template>
  <app-layout>
    <div class="card">
      <div class="card-header">Forgot Password</div>
      <div class="card-body">
        <form @submit.prevent="submit">
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
            <div class="col-md-4">
              <input id="email" type="email" class="form-control" :class="[ errors.email ? 'is-invalid' : '']" v-model="form.email" autocomplete="email" autofocus>
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.email" class="invalid-feedback"><span>{{ errors.email[0] }}</span></div>
            </div>
          </div>
    
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                Email Password Reset Link
              </button>
            </div>
          </div>
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
    data() {
      return {
        form: {
          email: null,
        },
      }
    },
    methods: {
      submit() {
        this.$inertia.post(this.$route('password.email'), this.form)
      },
    },
  }
</script>
