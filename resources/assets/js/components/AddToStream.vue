<template>
    <div class="message">
        <div class="message-header">
            Create a new news tag
        </div>
        <div class="message-body">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()" action="/api/news-tags/" method="post">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input
                                id="name"
                                placeholder="Name"
                                class="input"
                                v-model="form.name"
                                v-bind:class="{ 'is-danger' : form.errors.has('name') }"
                                required
                                autofocus
                        />
                    </div>
                    <p v-if="form.errors.has('name')"
                       v-text="form.errors.first('name')"
                       class="help is-danger"></p>
                </div>
                <div class="field">
                    <label for="description" class="label">Description</label>
                    <div class="control">
                        <input
                                id="description"
                                placeholder="Description"
                                class="input"
                                v-model="form.description"
                                v-bind:class="{ 'is-danger' : form.errors.has('description') }"
                                autofocus
                        />
                    </div>
                    <p v-if="form.errors.has('description')"
                       v-text="form.errors.first('description')"
                       class="help is-danger"></p>
                </div>
                <p class="control">
                    <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
                </p>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form(['name', 'description'], {
                    resetOnSuccess: true,
                }),
                message: '',
                messageClass: '',
            }
        },
        props: ['method', 'action'],
        methods: {
            onSubmit() {
//                this.form[this.method](this.action)
                this.form['post']('/api/news-tags/')
                    .then(newsTag => this.$emit('completed', newsTag))
                    .catch(response => console.log('ERROR'));
            }
        }

    }
</script>
