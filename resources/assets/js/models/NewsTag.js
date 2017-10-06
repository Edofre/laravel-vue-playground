/**
 *
 */
class NewsTag {
    /**
     *
     * @param then
     */
    static all(then) {
        return axios.get('/api/news-tags')
            .then(({data}) => then(data));
    }

    /**
     *
     * @param newsTag
     * @param then
     */
    static delete(newsTag, then) {
        return axios.delete('/api/news-tags/' + newsTag.id);
        // .then(({data}) => then(data));
    }
}

export default NewsTag;