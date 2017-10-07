<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="newsTag in newsTags">
                    <div class="message-header">
                        <p>{{ newsTag.name }} said ...</p>
                        <p>{{ newsTag.created_at | ago }}</p>
                        <a class="delete is-small" @click="deleteNewsTag(newsTag)"></a>
                    </div>
                    <div class="message-body" v-text="newsTag.description"></div>
                </div>

                <div v-if="message" class="notification is-success">
                    <button class="delete"></button>
                    {{ message }}
                </div>

                <!-- Add to stream form -->
                <add-to-stream @completed="addNewsTag"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import NewsTag from '../models/NewsTag';
    import AddToStream from '../components/AddToStream.vue';

    export default {
        components: {AddToStream},
        data() {
            return {
                newsTags: [],
                message: ''
            }
        },
        created() {
            NewsTag.all(newsTags => this.newsTags = newsTags);
            // .then(response => this.newsTags = response.data);
//                .then(({data}) => this.newsTags = data);
        },

        filters: {
            ago(date) {
                return moment(date).fromNow();
            }
        },

        methods: {
            addNewsTag(newsTag) {
                this.newsTags.unshift(newsTag);

                this.message = 'wat is deze';
                alert('Your news tag has been added to the stream');
//                window.scrollTo(0, 0);
            },
            removeNewsTag(newsTag) {
                console.log('remove');
                console.log(newsTag);
            },
            deleteNewsTag(newsTag) {
                NewsTag.delete(newsTag)
                    .then(newsTag => this.$emit('deleted', newsTag));

                this.newsTags = this.newsTags.filter(function (item) {
                    return newsTag.id != item.id;
                });
            }
        }

    }
</script>