import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.config.productionTip = false
Vue.use(VueRouter)

import Dashboard from './components/Dashboard.vue'
import Auth from '@okta/okta-vue'
import TriviaGame from './components/TriviaGame.vue'

Vue.use(Auth, {
  issuer: 'https://myself-dev-729175.okta.com/oauth2/default',
  client_id: '0oayjabe4JDjXU7ZA4x6',
  redirect_uri: 'http://localhost:8080/implicit/callback',
  scope: 'openid profile email'
})

const routes = [
  { path: '/implicit/callback', component: Auth.handleCallback() },
  { path: '/trivia', component: TriviaGame }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(Dashboard)
}).$mount('#app')