<template>
  <div class="md:container md:mx-auto">
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Sector</th>
          <th scope="col">Title</th>
          <th scope="col" class="content">Content</th>
          <th scope="col">Show</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tr v-for="(task, index) in tasks" :key="index">
        <th scope="row">{{ index }}</th>
        <td class="sector">{{ task.sector }}</td>
        <td>{{ task.title }}</td>
        <td class="contents">{{ task.content }}</td>
        <td>
          <router-link
            v-bind:to="{
              name: 'task.show',
              params: { taskId: task.id.toString() },
            }"
          >
            <button class="btn btn-primary">Show</button>
          </router-link>
        </td>
        <td>
          <router-link
            v-bind:to="{
              name: 'task.edit',
              params: { taskId: task.id.toString() },
            }"
          >
            <button class="btn btn-success">Edit</button>
          </router-link>
        </td>
        <td>
          <button class="btn btn-danger" style="background-color: #dc3545" v-on:click="deleteTask(task.id)">Delete</button>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
    data: function () {
        return {
            tasks: [],
        };
    },
    methods: {
        getTasks() {
            axios.get("/api/tasks").then((res) => {
                this.tasks = res.data;
            });
        },
        deleteTask(id) {
            axios.delete("/api/tasks/" + id).then((res) => {
                this.getTasks();
            });
        },
    },
    mounted() {
        this.getTasks();
    },
};
</script>
