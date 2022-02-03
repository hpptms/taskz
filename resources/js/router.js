import Vue from 'vue'
import Router from 'vue-router'
import TaskListComponent from "./components/TaskListComponent";


Vue.component('tasklist-component', TaskListComponent).default;


window.Vue = require('vue').default;
Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
      {
        path: '/tasks',
        name: 'task.list',
        component: TaskListComponent
      }
    ]
})

const app = new Vue({
    el: '#app',
    router
}).$mount('#app');