var flat = function (arr, n) {
    let flattenedArray = arr;
    while (n--) {
        let temp = [];
        for (let item of flattenedArray) {
            if (Array.isArray(item)) {
                temp.push(...item);
            } else {
                temp.push(item);
            }
        }
        flattenedArray = temp;
    }
    return flattenedArray;
};
