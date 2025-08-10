class EventEmitter {
    /**
     * @param {string} eventName
     * @param {Function} callback
     * @return {Object}
     */
    subscribe(eventName, callback) {
        if (!this.events) {
            this.events = {};
        }

        if (!this.events[eventName]) {
            this.events[eventName] = [];
        }
        this.events[eventName].push(callback);

        return {
            unsubscribe: () => {
                const i = this.events[eventName]?.indexOf(callback);
                if (i !== -1) {
                    this.events[eventName].splice(i, 1);
                }
                return undefined;
            }
        };
    }

    /**
     * @param {string} eventName
     * @param {Array} args
     * @return {Array}
     */
    emit(eventName, args = []) {
        if (!this.events || !this.events[eventName]) return [];
        return this.events[eventName].map(e => e(...args));
    }
}
