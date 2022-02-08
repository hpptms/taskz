<template>
    <div class="container create">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <br>
                    <!-- <div class="form-group row" style="visibility:hidden;">
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="c_user"
                            :value="task.u_id"
                            @input="task.u_id = $event.target.value"
                        />
                    </div> -->
                    <div class="form-group row">
                        <label for="Sector" class="col-sm-3 col-form-label"
                            >Sector</label
                        >
                        <!-- <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="Sector"
                            :value="task.s_id"
                            @input="task.s_id = $event.target.value"
                        /> -->
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sector" value="1" v-model="task.s_id">
                        <label class="form-check-label" for="one">「重要」で「緊急」なもの</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sector" value="2" v-model="task.s_id">
                        <label class="form-check-label" for="one">「重要」だけど「緊急」でないもの</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sector" value="3" v-model="task.s_id">
                        <label class="form-check-label" for="one">「重要」ではないが「緊急」なもの</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sector" value="4" v-model="task.s_id">
                        <label class="form-check-label" for="one">「重要」でもないが「緊急」でもないもの</label>
                        </div>
                        <span style="display:none;" id="is_Sector"></span>
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
                        <label for="Content" class="col-sm-3 col-form-label"
                            >Content</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="Content"
                            v-model="task.content"
                        />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                        style="background-color: #0d6efd"
                        id="created"
                    >
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            task: {},
        };
    },
    methods: {
        submit() {
            axios.post("/api/tasks", {
                u_id:$("#login_user").val(),
                s_id:$('#is_Sector').text(),
                title:this.task.title,
                content:this.task.content,
                se_id:$("#session").val()
            }).then((res) => {
                this.$router.push({ name: "task.list" });
            });
        },
    },
};
</script>
