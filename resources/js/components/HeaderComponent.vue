<template>
    <div class="container">
        <div>
            <nav class="container">
                <span class="Yellowtail text-6xl">tasks</span>
                <div>
                    <router-link to="/tasks">
                        <span class="Rowdies">List</span>
                    </router-link>
                    <router-link v-bind:to="{name: 'task.create'}">
                    <span class="Rowdies">ADD</span>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>