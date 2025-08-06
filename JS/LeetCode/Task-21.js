/**
 * @param {Array} arr
 * @param {number} size
 * @return {Array}
 */
var chunk = function(arr, size) {
    let returnedArray = [];
    let tempArray = [];
    for (let i = 0; i < arr.length; i++) {
        tempArray.push(arr[i]);
        if (tempArray.length === size) {
            returnedArray.push([...tempArray]);
            tempArray.length = 0;
        }
    }
    if (tempArray.length > 0) {
        returnedArray.push([...tempArray]);
    }
    return returnedArray;
};
