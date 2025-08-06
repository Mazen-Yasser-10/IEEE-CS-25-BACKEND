/**
 * @param {Object|Array} obj
 * @return {Object|Array}
 */
var compactObject = function(obj) {
    if (Array.isArray(obj)) {
        return obj
            .map(compactObject)
            .filter(Boolean);
    } else if (obj !== null && typeof obj === "object") {
        const result = {};
        for (const [key, value] of Object.entries(obj)) {
            const compactedValue = compactObject(value);
            if (Boolean(compactedValue)) {
                result[key] = compactedValue;
            }
        }
        return result;
    } else {
        return obj;
    }
};
