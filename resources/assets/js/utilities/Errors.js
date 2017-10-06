class Errors {
    /**
     * Create a new Errors instance.
     */
    constructor(errors = {}) {
        this.record(errors);
    }

    /**
     *
     * @returns {*}
     */
    all() {
        return this.errors;
    }

    /**
     * Determine if any errors exists for the given field or object.
     * @param {string} field
     */
    has(field) {
        let hasError = this.errors.hasOwnProperty(field);

        if (!hasError) {
            const errors = Object
                .keys(this.errors)
                .filter(e => e.startsWith(`${field}.`) || e.startsWith(`${field}[`));

            hasError = errors.length > 0;
        }

        return hasError;
    }

    /**
     * @param field
     * @returns {*}
     */
    first(field) {
        return this.get(field)[0];
    }

    /**
     * @param field
     * @returns {*|Array}
     */
    get (field) {
        return this.errors[field] || [];
    }

    /**
     * Determine if we have any errors.
     */
    any() {
        return Object.keys(this.errors).length > 0;
    }

    /**
     * Record the new errors.
     * @param {object} errors
     */
    record(errors = {}) {
        this.errors = errors;
    }

    /**
     * Clear a specific field, object or all error fields.
     * @param {string|null} field
     */
    clear(field) {
        if (!field) {
            this.errors = {};
            return;
        }

        Object.keys(this.errors)
            .filter(e => e === field || e.startsWith(`${field}.`))
            .forEach(e => delete this.errors[e]);
    }
}

export default Errors;