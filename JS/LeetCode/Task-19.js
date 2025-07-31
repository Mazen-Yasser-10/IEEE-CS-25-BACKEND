/**
 * @param {Array<Function>} functions
 * @return {Promise<any>}
 */
var promiseAll = function(functions) {
    return new Promise((resolve, reject) => {
        const results = new Array(functions.length);
        let resolvedCount = 0;
        let hasRejected = false;

        functions.forEach((fn, i) => {
            try {
                fn().then(value => {
                    if (hasRejected) return;
                    results[i] = value;
                    resolvedCount++;
                    if (resolvedCount === functions.length) {
                        resolve(results);
                    }
                }).catch(err => {
                    if (!hasRejected) {
                        hasRejected = true;
                        reject(err);
                    }
                });
            } catch (err) {
                if (!hasRejected) {
                    hasRejected = true;
                    reject(err);
                }
            }
        });
    });
};

/**
 * const promise = promiseAll([() => new Promise(res => res(42))])
 * promise.then(console.log); // [42]
 */