<template>
  <app-layout>
    <div class="card">
      <div class="card-header">Login</div>
    
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
        
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <div class="col-md-4">
              <input id="password" type="password" class="form-control" autocomplete="current-password" :class="[ errors.password ? 'is-invalid' : '']" v-model="form.password">
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.password" class="invalid-feedback"><span>{{ errors.password[0] }}</span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" :value="true" v-model="form.remember">
                <label class="form-check-label" for="remember">
                  Remember Me
                </label>
              </div>
            </div>
          </div>
        
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                Login
              </button>
              <a class="btn btn-link" :href="$route('password.request')">
                Forgot Your Password?
              </a>
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
          password: null,
          remember: false,
        },
      }
    },
    methods: {
      submit() {
        this.$inertia.post(this.$route('login'), this.form)
      },
    },
  }
</script>
