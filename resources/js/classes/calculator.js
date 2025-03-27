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
  }
  
  module.exports = Calculator;