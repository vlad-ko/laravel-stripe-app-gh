// FILE: resources/js/calculator.js

class Calculator {
    add(a, b) {
      return a + b;
    }
  
    subtract(a, b) {
      return a - b;
    }
  
    multiply(a, b) {
      return a * b;
    }
  
    divide(a, b) {
      return a / b;
    }

    power(base, exponent) {
      return Math.pow(base, exponent);
    }

    squareRoot(number) {
      return Math.sqrt(number);
    }

    absolute(number) {
      return Math.abs(number);
    }
  }
  
  module.exports = Calculator;