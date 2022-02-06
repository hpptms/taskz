<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="Sector" class="col-sm-3 col-form-label"
                            >Sector</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="Sector"
                            readonly="readonly"
                            v-model="task.sector"
                        />
                    </div>
                    <div class="form-group row">
                        <label for="Title" class="col-sm-3 col-form-label"
                            >Title</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="Title"
                            v-model="task.title"
                        />
                    </div>
                    <div class="form-group row">
                        <label
                            for="Content"
                            class="col-sm-3 col-form-label"
                            >Content</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="Content"
                            v-model="task.content"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;">
                        Submit
                    </button>
                    <p>{{ message }}</p>
                    <p>{{ message }}</p>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TaskCreate',
    props: ['message'],
    data: function () {
        return {
            task: {},
        };
    },
    methods: {
        submit() {
            axios.post("/api/tasks", this.task).then((res) => {
                this.$router.push({ name: "task.list" });
            });
        },
    },
};
</script>
