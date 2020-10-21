<template>
  <app-layout>
    <div class="card">
      <div class="card-header">Login</div>
    
      <div class="card-body">
        <form @submit.prevent="submit">
  
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Name</label>
            <div class="col-md-4">
              <input id="name" type="text" class="form-control" :class="[ errors.name ? 'is-invalid' : '']" v-model="form.name" autocomplete="name" autofocus>
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.name" class="invalid-feedback"><span>{{ errors.name[0] }}</span></div>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
            <div class="col-md-4">
              <input id="email" type="email" class="form-control" :class="[ errors.email ? 'is-invalid' : '']" v-model="form.email" autocomplete="email">
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.email" class="invalid-feedback"><span>{{ errors.email[0] }}</span></div>
            </div>
          </div>
        
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <div class="col-md-4">
              <input id="password" type="password" class="form-control" autocomplete="new-password" :class="[ errors.password ? 'is-invalid' : '']" v-model="form.password">
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.password" class="invalid-feedback"><span>{{ errors.password[0] }}</span></div>
            </div>
          </div>
          <div class="form-group row">
            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
            <div class="col-md-4">
              <input id="password_confirmation" type="password" class="form-control" autocomplete="new-password" :class="[ errors.password_confirmation ? 'is-invalid' : '']" v-model="form.password_confirmation">
            </div>
            <div class="col-md-4 col-feedback">
              <div v-if="errors.password_confirmation" class="invalid-feedback"><span>{{ errors.password_confirmation[0] }}</span></div>
            </div>
          </div>
        
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                Register
              </button>
              <inertia-link class="btn btn-link" :href="$route('login')">
                Already registered?
              </inertia-link>
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
          name: null,
          email: null,
          password: null,
          password_confirmation: null,
        },
      }
    },
    methods: {
      submit() {
        this.$inertia.post(this.$route('register'), this.form)
      },
    },
  }
</script>
