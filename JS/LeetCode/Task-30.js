class Calculator {
    constructor(value) {
        this.result = value;
        this.error = null;
    }

    add(value) {
        this.result += value;
        return this;
    }

    subtract(value) {
        this.result -= value;
        return this;
    }

    multiply(value) {
        this.result *= value;
        return this;
    }

    divide(value) {
        if (value === 0) {
            this.error = "Division by zero is not allowed";
        } else {
            this.result /= value;
        }
        return this;
    }

    power(value) {
        this.result **= value;
        return this;
    }

    getResult() {
        return this.error ? this.error : this.result;
    }
}
